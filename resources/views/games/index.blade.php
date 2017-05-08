@extends('layouts.master')

@section('title')
    All the Games
@endsection

@section('content')
    <div class='game'>
        @foreach($games as $game)
            <h3>{{ $game->published.' '.$game->title }}</h3>
        @endforeach
    </div>
@endsection
