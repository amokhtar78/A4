{{-- /resources/views/books/edit.blade.php --}}
@extends('layouts.master')
@push('head')
<h2>Edit {{$game->title}} Game</h2>
@endpush

@section('title')
Edit {{$game->title}} Game
@endsection

@section('content')

@if(count($errors) > 0)
<ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif

<form method='POST' action='/games/edit'>
    {{ csrf_field() }}

    <input type='hidden' name='id' value='{{ $game->id }}'>

    <small>* Required fields</small>
    <br> 

    <label for='title'>* Title</label>
    <input type='text' name='title' id='title' value='{{ old('title', $game->title) }}'>
    <br>

    <label for='published'>* Published Year</label>
    <input type='text' name='published' id='published' value='{{ old('published', $game->published) }}'>
    <br>

    <label for='developer_id'>* Developer:</label>
    <select id='developer_id' name='developer_id'>
        @foreach($developersForDropdown as $developer_id => $developerName)
        <option value='{{ $developer_id }}' {{ ($game->developer_id == $developer_id) ? 'SELECTED' : '' }}>
            {{$developerName}}
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
            name='genres[]'
            {{ (in_array($name, $genresForThisGame)) ? 'CHECKED' : '' }}
            >&nbsp;
        {{ $name }}
        @endforeach
    </ul>
    <br>

    <input type='submit' value='Save Game Changes'>
</form>

@endsection