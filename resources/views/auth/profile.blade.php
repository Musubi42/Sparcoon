@extends('app.app')

@section('title')
    {{ auth()->user()->name }}
@endsection

@section('content')
    <form action="{{ route('logout') }}" method="post">
        @csrf
        <button class="bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 border-b-4 border-red-700 hover:border-red-500 rounded">
            Déconnexion
          </button>
    </form>
@endsection