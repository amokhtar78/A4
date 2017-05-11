{{-- /resources/views/games/delete.blade.php --}}
@extends('layouts.master')
@push('head')
<link href='/css/games.css' rel='stylesheet'>
@endpush
@section('title')
{{ $game->title }}
@endsection

@section('content')
<h1>Confirm deletion</h1>
<form method='POST' action='/games/delete'>

    {{ csrf_field() }}

    <input type='hidden' name='id' value='{{ $game->id }}'?>

    <h2>Are you sure you want to delete <em>{{ $game->title }}</em>?</h2>

    <input type='submit' value='Confirm deletion of game.' class='btn btn-danger'>

</form>

@endsection
