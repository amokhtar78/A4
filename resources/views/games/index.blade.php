@extends('layouts.master')

@section('title')
    All the Games
@endsection

@section('content')
    <div class='game'>
        @foreach($games as $game)
            <h2>{{ $game->title }}</h2>
            <h2>{{ $game->published }}</h2>
        @endforeach
    </div>
@endsection
