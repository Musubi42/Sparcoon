@extends('app.app')

@section('content')
    @forelse(auth()->user()->soignants as $soignant)
        <h1><b>{{ $soignant->firstname." ".$soignant->lastname }}</b></h1>
        <span><i>Em@il :</i></span>
        <p>{{ $soignant->email }}</p><br>
    @empty
        Aucun soignants
    @endforelse
@endsection