<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SentimentHistory extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'sentiment',
        'score',
        'file_name',
        'file_path',
        'text',
    ];

    protected $dates = ['deleted_at'];
}
