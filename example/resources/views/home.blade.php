<!-- resources/views/home.blade.php -->

@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!-- Your Home Page Content Goes Here -->
    <h1>Welcome to the Home Page</h1>

    @foreach($quizzes as $quiz)
        <div class="card">
            <img src="{{ $quiz['photo'] }}" class="card-img-top" alt="{{ $quiz['name'] }}">
            <div class="card-body">
                <h2>{{ $quiz->title }}</h2>
                <p>{{ $quiz->description }}</p>
                <img src="{{ 'storage/' . $quiz->photo }}" alt="{{ $quiz->title }}" style="max-width: 300px;">
                <p>Status: {{ $quiz->status }}</p>


                <h5 class="card-title">{{ $quiz['name'] }}</h5>
                <p class="card-text">Status: 
                    <span class="{{ $quiz['status'] ? 'text-success' : 'text-danger' }}">
                        {{ $quiz['status'] ? 'Active' : 'Inactive' }}
                    </span>
                </p>
                
                <!-- Link to Quiz Page -->
                <a href="{{ route('quiz.show', ['quizId' => $loop->index + 1]) }}" class="btn btn-primary">Take Quiz</a>
                <a href="{{ route('quiz.create') }}" class="btn btn-primary">Create Quiz</a>
               
                
            </div>
        </div>
    @endforeach


@endsection

