{{-- /resources/views/games/review.blade.php --}}
@extends('layouts.master')
@push('head')
<link href='/css/games.css' rel='stylesheet'>
@endpush

@section('title')
{{$game->title}}
@endsection

@section('content')
<h2>Review {{$game->title}} Game</h2>
@if(count($errors) > 0)
<ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif

<form method='POST' action='/games/review'>
    {{ csrf_field() }}

    <input type='hidden' name='id' value='{{ $game->id }}'>


    <label for='grank_id'>* What do you think of {{$game->title}}:</label>
    <select id='grank_id' name='grank_id'>
        @foreach($granksForDropdown as $grank_id => $grankName)
        <option value='{{ $grank_id }}' {{ ($game->grank_id == $grank_id) ? 'SELECTED' : '' }}>
            {{$grankName}}
        </option>
        @endforeach
    </select>
    <br><br>

    <input type='submit' value='Save Game Changes'>
</form>

@endsection