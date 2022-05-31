@extends('app.app')

@section('content')
    @forelse(auth()->user()->patients as $soignant)
        <p>{{ $soignant->email }}</p>
    @empty
        Aucun soignants
    @endforelse
@endsection