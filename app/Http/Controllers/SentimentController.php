<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\SentimentAnalysisService;
use PhpOffice\PhpWord\IOFactory;
use Smalot\PdfParser\Parser;
use App\Models\SentimentHistory;
use Illuminate\Support\Facades\Storage;
use League\Flysystem\Filesystem;
use League\Flysystem\AzureBlobStorage\AzureBlobStorageAdapter;
use MicrosoftAzure\Storage\Blob\BlobRestProxy;


class SentimentController extends Controller
{
    protected $sentimentService;

    public function __construct(SentimentAnalysisService $sentimentService)
    {
        $this->sentimentService = $sentimentService;
    }

    public function index()
    {
        return view('welcome');
    }

    public function analyze(Request $request)
    {
        // Validate input fields
        $request->validate([
            'text' => 'nullable|string|max:10000',
            'file' => 'nullable|file|mimes:txt,docx,pdf|max:2048',
        ]);

        $text = $request->input('text');
        $fileName = null;
        $filePath = null;

        // Handle file upload if present
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();

            // Extract text from file based on type
            if ($extension === 'txt') {
                $text = file_get_contents($file->getRealPath());
            } elseif ($extension === 'docx') {
                $phpWord = IOFactory::load($file->getRealPath());
                $text = '';
                foreach ($phpWord->getSections() as $section) {
                    foreach ($section->getElements() as $element) {
                        if (method_exists($element, 'getText')) {
                            $text .= $element->getText() . ' ';
                        }
                    }
                }
            } elseif ($extension === 'pdf') {
                $parser = new Parser();
                $pdf = $parser->parseFile($file->getRealPath());
                $text = $pdf->getText();
            }

            // Upload file to Azure Blob Storage
            $fileName = $file->getClientOriginalName();
            $filePath = 'uploads/' . $fileName;
            Storage::disk('azure')->write($filePath, file_get_contents($file));
        }

        // If no text is provided, return an error
        if (empty($text)) {
            return back()->withErrors(['text' => 'Please enter text or upload a valid file.']);
        }

        // Perform sentiment analysis
        $result = $this->sentimentService->analyzeSentiment($text);

        // Save analysis result to the database
        SentimentHistory::create([
            'user_id' => auth()->id(), // Add this line to associate with the logged-in user
            'sentiment' => $result['sentiment'],
            'score' => $result['score'],
            'file_name' => $fileName,
            'file_path' => $filePath,
            'text' => $text,
        ]);

        // Return the analysis results as JSON
        return response()->json([
            'sentiment' => $result['sentiment'],
            'highlightedText' => $result['highlightedText'],
            'positiveCount' => $result['positiveCount'],
            'negativeCount' => $result['negativeCount'],
            'score' => $result['score'],
        ]);
    }
    public function history()
    {
        $history = SentimentHistory::where('user_id', auth()->id())->latest()->paginate(10);
        return view('history', compact('history'));
    }
    
}
