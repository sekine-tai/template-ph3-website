<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Quizze_questionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Quizze_questions::create([
                'quiz_id' => '1',
                'image' => 'image.png',
                'text' => '日本のIT人材が2030年には最大どれくらい不足すると言われているでしょうか？'
        ]);
        \App\Models\Quizze_questions::create([
                'quiz_id' => '1',
                'image' => 'image.png',
                'text' => '既存業界のビジネスと、先進的なテクノロジーを結びつけて生まれた、新しいビジネスのことをなんと言うでしょう？'
        ]);
        \App\Models\Quizze_questions::create([
                'quiz_id' => '1',
                'image' => 'image.png',
                'text' => 'IoTとは何の略でしょう？'
        ]);
        \App\Models\Quizze_questions::create([
                'quiz_id' => '2',
                'image' => 'image.png',
                'text' => '誕生日はいつでしょう？'
        ]);
        \App\Models\Quizze_questions::create([
                'quiz_id' => '2',
                'image' => 'image.png',
                'text' => 'どことどこのハーフでしょう？'
        ]);
        \App\Models\Quizze_questions::create([
                'quiz_id' => '2',
                'image' => 'image.png',
                'text' => '学部はどこでしょう？'
        ]);
    }
}
