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
    
        // Split text into words and clean punctuation
        $words = preg_split('/\s+/', $text); // Handles multiple spaces and newlines
        foreach ($words as $word) {
            $word = preg_replace('/[^\w\s]/', '', $word); // Remove punctuation
            $lowercaseWord = strtolower($word);

            if (isset($this->positiveWords[$lowercaseWord])) {
                $positiveCount++;
                $highlightedText .= '<span style="color: green;">' . htmlspecialchars($word) . '</span> ';
            } elseif (isset($this->negativeWords[$lowercaseWord])) {
                $negativeCount++;
                $highlightedText .= '<span style="color: red;">' . htmlspecialchars($word) . '</span> ';
            } else {
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
