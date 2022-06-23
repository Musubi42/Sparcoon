@extends('app.app')

@section('content')
    @forelse(auth()->user()->patients as $soignant)
    <h1><b>{{ $soignant->firstname." ".$soignant->lastname }}</b></h1>
    <span><i>Em@il :</i></span>
    <p>{{ $soignant->email }}</p><br>

    Voir entreprises : <a href="{{ route('lieux.show', ['lieux' => $soignant->lieux]) }}"></a>
    @empty
        Aucun Patients
    @endforelse
@endsection