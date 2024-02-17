<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = ["question", "a", "b", "c", "d", "answer_option", "answer_text", "quiz_id"];

    public function Quiz()
    {
        return $this->belongsTo(Quiz::class);
    }
}
