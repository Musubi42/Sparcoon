@extends('app.app')

@section('title')
    Example
@endsection


@section('content')
    <form action="{{ route('examples.store') }}" method="post">
        @csrf
        <input type="text" name="title" id="title">
        <button>submit</button>
    </form>
@endsection 