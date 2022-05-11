@extends('app.app')
@section('title')
    📜 {{ $example->title }}	
@endsection


@section('content')
    <form method="POST" action="{{ route('examples.update', ['example' => $example ]) }}">
        @csrf
        @method("PATCH")

        <input type="text" name="title" id="title" value="{{ $example->title }}">
        <button type="submit">Sauvegarder</button>
    </form>
@endsection