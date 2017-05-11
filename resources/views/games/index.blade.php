{{-- /resources/views/games/index.blade.php --}}
@extends('layouts.master')

@push('head')
<link href='/css/games.css' rel='stylesheet'>
<h2>The application to rank your favorite games !!</h2>
@endpush

@section('title')
games
@endsection

@section('content')
<section id='games' class='cf'>

    @if(count($games) == 0)
    You don't have any games yet; would you like to <a href='/games/new'>add one</a>?
    @else
    @foreach($games as $game)

    <div class='game cf'>
        <h3>{{
            $game->published.' '.$game->title.
                     ' - Score : '.$game->gameScore().'% '
            }}
            
            <a class='gameAction' href='/games/{{ $game->id }}'><i class='fa fa-eye'></i></a>
            <a class='gameAction' href='/games/review/{{ $game->id }}'><i class='fa fa-thumbs-up'></i></a>
            <a class='gameAction' href='/games/edit/{{ $game->id }}'><i class='fa fa-edit'></i></a>
            <a class='gameAction' href='/games/delete/{{ $game->id }}'><i class='fa fa-trash'></i></a>
        </h3>
    </div>
    @endforeach
    @endif
</section>
@endsection



