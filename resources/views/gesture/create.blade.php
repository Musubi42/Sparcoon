@extends('app.app')

@section('content')
<form action="{{ route('addPatient')}}" method="post">
    @csrf
    <select name="soignant" >
        @foreach($users as $userS)
            <option value="{{$userS->id}}">{{$userS->firstname}} {{$userS->lastname}}</option>
        @endforeach
    </select>

    <select name="patient" >
        @foreach($users as $userP)
            <option value="{{$userP->id}}">{{$userP->firstname}} {{$userP->lastname}}</option>
        @endforeach
    </select>

    <button>Envoyer</button>
</form>
@endsection