<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSentimentHistoriesTable extends Migration
{
    public function up()
    {
        Schema::create('sentiment_histories', function (Blueprint $table) {
            $table->id();
            $table->string('sentiment');
            $table->integer('score');
            $table->string('file_name')->nullable();
            $table->string('file_path')->nullable();
            $table->text('text')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sentiment_histories');
    }
}
