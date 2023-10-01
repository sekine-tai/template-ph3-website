<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuizzeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Quizze::create([
            'name' => 'ITクイズ'
        ]);
        \App\Models\Quizze::create([
            'name' => '紹介クイズ'
        ]);
    }
}
