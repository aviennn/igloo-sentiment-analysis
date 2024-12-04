<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SentimentHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'sentiment',
        'score',
        'file_name',
        'file_path',
        'text',
    ];
}
