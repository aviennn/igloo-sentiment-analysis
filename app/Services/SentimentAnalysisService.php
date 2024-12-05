<?php

namespace App\Services;

class SentimentAnalysisService
{
    protected $positiveWords;
    protected $negativeWords;

    public function __construct()
    {
        // Load words as flipped arrays for faster lookups
        $this->positiveWords = array_flip($this->loadWords('positive-words.txt'));
        $this->negativeWords = array_flip($this->loadWords('negative-words.txt'));
    }
    
    protected function loadWords($filename)
    {
        $filePath = storage_path('app/private/' . $filename);
    
        if (!file_exists($filePath)) {
            throw new \Exception("The file {$filename} is missing.");
        }
    
        return file($filePath, FILE_IGNORE_NEW_LINES);
    }    

    public function analyzeSentiment($text)
{
    $positiveCount = 0;
    $negativeCount = 0;
    $highlightedText = '';
    
    // Split text into words while keeping punctuation separate
    $words = preg_split('/(\s+|[^\w]+)/', $text, -1, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);

foreach ($words as $word) {
    // Clean up word to remove any leading/trailing punctuation, e.g., commas, periods, etc.
    $cleanWord = strtolower(trim(preg_replace('/[^\w]+$/', '', preg_replace('/^[^\w]+/', '', $word))));

    // Only process non-empty cleaned words
    if (!empty($cleanWord)) {
        if (isset($this->positiveWords[$cleanWord])) {
            $positiveCount++;
            $highlightedText .= '<span style="color: green;">' . htmlspecialchars($word) . '</span> ';
        } elseif (isset($this->negativeWords[$cleanWord])) {
            $negativeCount++;
            $highlightedText .= '<span style="color: red;">' . htmlspecialchars($word) . '</span> ';
        } else {
            $highlightedText .= htmlspecialchars($word) . ' ';
        }
    } else {
        // If the word is only punctuation, simply skip it
        $highlightedText .= htmlspecialchars($word) . ' ';
    }
}

    
    // Sentiment score
    $score = $positiveCount - $negativeCount;

    // Sentiment label
    $sentiment = $score > 0 ? 'Positive' : ($score < 0 ? 'Negative' : 'Neutral');

    return [
        'sentiment' => $sentiment,
        'highlightedText' => $highlightedText,
        'positiveCount' => $positiveCount,
        'negativeCount' => $negativeCount,
        'score' => $score,
    ];

}
}