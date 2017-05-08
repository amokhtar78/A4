{{-- /resources/views/books/new.blade.php --}}
@extends('layouts.master')

@section('title')
New Game
@endsection

@section('content')

@if(count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<h1>Add a new Game</h1>

<form method='POST' action='/games/new'>
    {{ csrf_field() }}
    
    <small>* Required fields</small>
    <br> 

    <label for='title'>* Title</label>
    <input type='text' name='title' id='title' value='{{ old('title', 'Halo') }}'>
    <br>

    <label for='published'>* Published Year</label>
    <input type='text' name='published' id='published' value='{{ old('published', 2001) }}'>
    <br>

    <input type='submit' value='Add New Game'>
</form>

@endsection