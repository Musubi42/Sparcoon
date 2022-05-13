@extends('app.app')

@section('title')
    Mes dépenses
@endsection

@section('content')

<h1 class="titre-vues">Mes dépenses</h1>
<div class="barre-controle">
    <button class="bouton-ajouter">Ajouter</button>
    <livewire:search />
    <select name="barre_filtre" class="bouton-filtre">
        <option>- cher au + cher</option>
        <option>+ cher au - cher</option>
        <option>+ récent au - récent</option>
        <option>- récent au + récent</option>
    </select>
</div>

@endsection