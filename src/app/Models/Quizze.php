<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quizze extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function quizze(){
        return $this->belongsTo(User::class);
    }
}
