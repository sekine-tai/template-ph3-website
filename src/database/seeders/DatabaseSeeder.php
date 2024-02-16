<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // $this->call([
        //     QuizzeSeeder::class
        // ]);

        \App\Models\Quizze::factory(100)->create();
        // ↑ここの個数でダミーデータの個数を変えれるよ
    }
}
