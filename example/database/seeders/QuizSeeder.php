<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Quiz;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\QuizController;



class QuizSeeder extends Seeder
{
   
    public function run(): void
    {
         

        $quizzes = [
            [
                'title' => 'Quiz 1',
                'description' => 'what animal is this?',
                'photo' => 'bear.jpg', 
                'status' => 'active',
            ],

            [
                'title' => 'Quiz 2',
                'description' => 'what animal is this?',
                'photo' => 'bird.jpg',
                'status' => 'active',
            ],

            [
                'title' => 'Quiz 3',
                'description' => 'what animal is this?',
                'photo' => 'cat.jpg',
                'status' => 'active',
            ],

            [
                'title' => 'Quiz 4',
                'description' => 'what animal is this?',
                'photo' => 'dog.jpg',
                'status' => 'active',
            ],

            [
                'title' => 'Quiz 5',
                'description' => 'what animal is this?',
                'photo' => 'fish.jpg',
                'status' => 'active',
            ],

            [
                'title' => 'Quiz 6',
                'description' => 'what animal is this?',
                'photo' => '',
                'status' => 'active',
            ],

            [
                'title' => 'Quiz 7',
                'description' => 'what animal is this?',
                'photo' => 'lion.jpg',
                'status' => 'not active',
            ],

            [
                'title' => 'Quiz 8',
                'description' => 'what animal is this?',
                'photo' => 'reptile.jpg',
                'status' => 'active',
            ],


            [
                'title' => 'Quiz 9',
                'description' => 'what place is this?',
                'photo' => 'london.jpg',
                'status' => 'active',
            ],

            [
                'title' => 'Quiz 10',
                'description' => 'what place is this?',
                'photo' => 'NYC.jpg',
                'status' => 'active',
            ],

            [
                'title' => 'Quiz 11',
                'description' => 'what place is this?',
                'photo' => 'paris.jpg',
                'status' => 'active',
            ],

            [
                'title' => 'Quiz 12',
                'description' => 'what place is this?',
                'photo' => 'rome.jpg',
                'status' => 'active',
            ],

            [
                'title' => 'Quiz 13',
                'description' => 'what place is this?',
                'photo' => 'tbilisi.jpg',
                'status' => 'active',
            ],

            [
                'title' => 'Quiz 14',
                'description' => '',
                'photo' => 'tokyo.jpg',
                'status' => 'active',
            ],

            [
                'title' => 'Quiz 15',
                'description' => 'what place is this?',
                'photo' => 'china.jpg',
                'status' => 'active',
            ],

            [
                'title' => 'Quiz 16',
                'description' => 'what place is this?',
                'photo' => 'brazil.jpg',
                'status' => 'active',
            ],
            // Add more quizzes as needed
        ];
    
        foreach ($quizzes as $quizData) {
            $this->createQuiz($quizData);
        }
    }
    
    private function createQuiz(array $data)
    {
        $quiz = new Quiz([
            'title' => $data['title'],
            'description' => $data['description'],
            'photo' => $data['photo'],
            'status' => $data['status'],
        ]);
    
        
    
        $quiz->save();
    }
}
