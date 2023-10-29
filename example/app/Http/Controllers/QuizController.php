<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;

class QuizController extends Controller
{
    public function index()
    {
        $quizzes = [
            ['name' => 'Quiz 1', 'photo' => 'https://53.fs1.hubspotusercontent-na1.net/hub/53/hubfs/google-quiz.jpg?width=595&height=400&name=google-quiz.jpg', 'status' => true],
            // Add more quizzes as needed
        ];

        return view('home', compact('quizzes'));
    }

    // Add the subscribe method if not already present
    public function subscribe(Request $request)
    {
        // Handle form submission and subscription logic here
        // You can use $request->input('email') to get the email input value
    }
    public function show($quizId)
    {
        // Retrieve quiz details based on $quizId and pass them to the view
        $quizDetails = [
            'name' => 'Quiz 1',
            'questions' => [
                // ... details of questions for Quiz 1
            ],
        ];

        return view('quizzes.show', compact('quizDetails'));
    }
    public function createOrUpdate(Request $request, $id = null)
    {
        $quiz = $id ? Quiz::find($id) : new Quiz();

        if ($request->isMethod('post')) {
            $quiz->title = $request->input('title');
            $quiz->description = $request->input('description');
            $quiz->save();
            return redirect()->route('quiz.list');
        }

        return view('quiz.form', ['quiz' => $quiz]);
    }
}

