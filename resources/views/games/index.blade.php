{{-- /resources/views/games/index.blade.php --}}
@extends('layouts.master')

@push('head')
<link href='/css/games.css' rel='stylesheet'>
@endpush

@section('title')
games
@endsection

@section('content')
<h2>The application to rank your favorite games !!</h2>
<section id='games' class='cf'>

    @if(count($games) == 0)
    You don't have any games yet; would you like to <a href='/games/new'>add one</a>?
    @else
    <div class='game cf'>
        <table>
            @foreach($games as $game)
            <tr>
                <th>{{$game->published}}</th>
                <th>{{$game->title}}</th>
                <th>{{'Score : '.$game->gameScore().'%'}}</th>
                <th>
                    <a class='gameAction' href='/games/{{ $game->id }}'><i class='fa fa-eye'></i></a>
                    <a class='gameAction' href='/games/review/{{ $game->id }}'><i class='fa fa-thumbs-up'></i></a>
                    <a class='gameAction' href='/games/edit/{{ $game->id }}'><i class='fa fa-edit'></i></a>
                    <a class='gameAction' href='/games/delete/{{ $game->id }}'><i class='fa fa-trash'></i></a>
                </th>

            </tr>
            @endforeach
        </table>
    </div>
    @endif
</section>
@endsection



