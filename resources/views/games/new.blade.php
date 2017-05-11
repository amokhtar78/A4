{{-- /resources/views/games/new.blade.php --}}
@extends('layouts.master')
@push('head')
<link href='/css/games.css' rel='stylesheet'>
<h2>Add New Game</h2>
@endpush

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

    <label for='developer_id'>* Developer:</label>
    <select id='developer_id' name='developer_id'>
        <option value='0'>Choose</option>
        @foreach($developersForDropdown as $developer_id => $developerName)
        <option value='{{ $developer_id }}'>
            {{ $developerName }}
        </option>
        @endforeach
    </select>
    <br>

    <label>Genres</label>
    <ul id='genres'>
        @foreach($genresForCheckbox as $id => $name)
        <input
            type='checkbox'
            value='{{ $id }}'
            id='genre_{{ $id }}'
            name='genres[]'
            >&nbsp;
        <label for='genre_{{ $id }}'>{{ $name }}</label>
        @endforeach
    </ul>
    <br>

    <input type='submit' value='Add New Game'>
</form>

@endsection