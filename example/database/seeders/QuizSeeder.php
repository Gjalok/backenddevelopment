<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\QuizController;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          DB::table('questions')->insert([
            [
                'question_text' => 'What is the capital of France?',
                'correct_answer' => 'Paris',
            ],
            [
                'question_text' => 'How many continents are there in the world?',
                'correct_answer' => '7',
            ],

            [
                'question_text' => 'How many oceans are there in the world?',
                'correct_answer' => '7',
            ],
            [
                'question_text' => 'How many peaople are there in the world?',
                'correct_answer' => '7bil',
            ],
            [
                'question_text' => 'How many years humans live ?',
                'correct_answer' => '70',
            ],
        ]);
    }
}
