@extends('component.app')

@section('title')
    Mon patrimoine
@endsection

@section('content')

    <h1 class="titre-vues">Mon patrimoine</h1>
    <div class="barre-controle">
        <button class="bouton-ajouter">Ajouter</button>
        <livewire:search />
        <select name="barre_filtre" class="bouton-filtre">
            <option>Nom A-Z</option>
            <option>Nom Z-A</option>
            <option>Age croissant</option>
            <option>Age décroissant</option>
        </select>
    </div>

@endsection


