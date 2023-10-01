<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Quizze;

class QuizzeController extends Controller
{
    public function quizzes(){
        $quizzes = Quizze::all();
        return view('quizzes', compact('quizzes'));
    }
}