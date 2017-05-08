@extends('layouts.master')

@section('title')
    All the Games
@endsection

@section('content')
    <div class='game'>
        <ul>
           @foreach($games as $game)
            <li>{{ $game->published.' '.$game->title. 
                        ' by '.$game->developer->dev_name.' of '.$game->developer->dev_country }}
        @endforeach 
        </ul>
        
    </div>
@endsection
