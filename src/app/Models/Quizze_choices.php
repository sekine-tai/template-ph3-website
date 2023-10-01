<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quizze_choices extends Model
{
    use HasFactory;

    protected $fillable =[
        'question_id',
        'text',
        'is_collect'
    ];
}
