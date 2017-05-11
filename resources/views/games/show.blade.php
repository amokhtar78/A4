{{-- /resources/views/games/show.blade.php --}}
@extends('layouts.master')
@push('head')
<link href='/css/games.css' rel='stylesheet'>
@endpush

@section('title')
{{$game->title}}
@endsection

@section('content')
<h2>About {{$game->title}} Game</h2>
<table>
    <tr>
        <th>Published Date</th>
        <th>Name</th>
        <th>Developer</th>
        <th>Country</th>
        <th>Average Score</th>   
    </tr>
    <tr>
        <th>{{$game->published}}</th>
        <th>{{$game->title}}</th>
        <th>{{$game->developer->dev_name}}</th>
        <th>{{$game->developer->dev_country}}</th>
        <th>{{$game->gameScore()}}</th>  
    </tr>
    <table>
        <tr>
            <th>
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
            </th>
        </tr>
    </table>
</table>


<br>
@endsection