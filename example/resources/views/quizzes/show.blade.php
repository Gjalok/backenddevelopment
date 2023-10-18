<!-- resources/views/quizzes/show.blade.php -->

@extends('layouts.app')

@section('title', $quizDetails['name'])

@section('content')
    <h1>{{ $quizDetails['name'] }}</h1>
    <!-- Display details of Quiz 1 -->
    <!-- For example, list questions and allow users to answer -->
@endsection