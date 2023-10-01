<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Quizze_choicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Quizze_choices::create([
                'question_id'=>'1',
                'text'=>'約79万人',
                'is_collect'=>'1'
        ]);
        \App\Models\Quizze_choices::create([
                'question_id'=>'1',
                'text'=>'約28万人',
                'is_collect'=>'0'
        ]);
        \App\Models\Quizze_choices::create([
                'question_id'=>'1',
                'text'=>'約183万人',
                'is_collect'=>'0'
        ]);
        \App\Models\Quizze_choices::create([
                'question_id'=>'2',
                'text'=>'INTECH',
                'is_collect'=>'0'
        ]);
        \App\Models\Quizze_choices::create([
                'question_id'=>'2',
                'text'=>'BIZZTECH',
                'is_collect'=>'0'
        ]);
        \App\Models\Quizze_choices::create([
                'question_id'=>'2',
                'text'=>'X-TECH',
                'is_collect'=>'1'
        ]);
        \App\Models\Quizze_choices::create([
                'question_id'=>'3',
                'text'=>'Internet of Things',
                'is_collect'=>'1'
        ]);
        \App\Models\Quizze_choices::create([
                'question_id'=>'3',
                'text'=>'Information on Tool',
                'is_collect'=>'0'
        ]);
        \App\Models\Quizze_choices::create([
                'question_id'=>'3',
                'text'=>'Integrate into Technology',
                'is_collect'=>'0'
        ]);
        \App\Models\Quizze_choices::create([
                'question_id'=>'4',
                'text'=>'2001/12/6',
                'is_collect'=>'0'
        ]);
        \App\Models\Quizze_choices::create([
                'question_id'=>'4',
                'text'=>'2002/12/6',
                'is_collect'=>'1'
        ]);
        \App\Models\Quizze_choices::create([
                'question_id'=>'4',
                'text'=>'2003/12/6',
                'is_collect'=>'0'
        ]);
        \App\Models\Quizze_choices::create([
                'question_id'=>'5',
                'text'=>'群馬と埼玉',
                'is_collect'=>'0'
        ]);
        \App\Models\Quizze_choices::create([
                'question_id'=>'5',
                'text'=>'栃木と東京',
                'is_collect'=>'1'
        ]);
        \App\Models\Quizze_choices::create([
                'question_id'=>'5',
                'text'=>'神奈川と茨城',
                'is_collect'=>'0'
        ]);
        \App\Models\Quizze_choices::create([
                'question_id'=>'6',
                'text'=>'商学部',
                'is_collect'=>'1'
        ]);
        \App\Models\Quizze_choices::create([
                'question_id'=>'6',
                'text'=>'法学部',
                'is_collect'=>'0'
        ]);
        \App\Models\Quizze_choices::create([
                'question_id'=>'6',
                'text'=>'経済学部',
                'is_collect'=>'0'
        ]);
    }
}
