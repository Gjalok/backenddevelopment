<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;

class QuizController extends Controller
{
    public function index()
    {
        $quizzes = Quiz::where('status', 'active')
        ->whereNotNull('photo') 
        ->where('photo', '!=', '')
        ->take(8)
        ->get(['title', 'description', 'photo', 'status']);
        
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

        return view('quizzes.form', ['quiz' => $quiz]);
    }
}

