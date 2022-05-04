@extends('component.app')

@section('title')
    Accueil
@endsection

@section('content')

<div class="container">
        <div class="row">
            <div class="col-md-12" style="border-style: none;">
                <h1 style="text-align: center;height: 60px;margin: 100px;color: rgb(0,0,0);"> Bonjour {{auth()->user()->name}}! </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3"><button class="bouton-accueil" onclick="window.location.href='{{ route('pat') }}'">Mon patrimoine</button></div>
            <div class="col-md-3"><button class="bouton-accueil" onclick="window.location.href='{{ route('dep') }}'">Mes dépenses</button></div>
            <div class="col-md-3"><button class="bouton-accueil" onclick="window.location.href='{{ route('trait') }}'">Mes traitements</button></div>
            <div class="col-md-3"><button class="bouton-accueil" onclick="window.location.href='{{ route('cal') }}'">Mon calendrier</button></div>
        </div>
    </div>
    <script src="/bootstrap/js/bootstrap.min.js"></script>

@endsection

