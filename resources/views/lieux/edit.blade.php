@extends('app.app')

@section('content')
    

<section class="py-24 md:py-32 bg-white" style="background-image: url('flex-ui-assets/elements/pattern-white.svg'); background-position: center;">
  <div class="container px-4 mx-auto">
    <div class="max-w-sm mx-auto">
      <div class="mb-6 text-center">
        <a class="inline-block mb-6" href="#">
          
        </a>
        <h3 class="mb-4 text-2xl md:text-3xl font-bold">Ajouter une entreprise</h3>
        <p class="text-lg text-coolGray-500 font-medium">Compléter les champs ci-dessous</p>
      </div>
      <form action="{{ route('lieux.update', ['lieux' => $lieux]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-6">
          <label class="block mb-2 text-coolGray-800 font-medium" for="name">Nom</label>
          <input name='name' id='name' value='{{ $lieux->name }}' class="appearance-none block w-full p-3 leading-5 text-coolGray-900 border border-coolGray-200 rounded-lg shadow-md placeholder-coolGray-400 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50" type="text" placeholder="Nom de l'entreprise" autocomplete="off">
        </div>
        
        <div class="mb-6">
          <label class="block mb-2 text-coolGray-800 font-medium" for="adresse">Adresse</label>
          <input value='{{ $lieux->adresse }}' name='adresse' id='adresse' class="appearance-none block w-full p-3 leading-5 text-coolGray-900 border border-coolGray-200 rounded-lg shadow-md placeholder-coolGray-400 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50" type="text" placeholder="Adresse de l'entreprise" autocomplete="off">
        </div>

        <div class="mb-6">
          <label class="block mb-2 text-coolGray-800 font-medium" for="telephone">Téléphone</label>
          <input value='{{ $lieux->telephone }}' name='telephone' id='telephone' class="appearance-none block w-full p-3 leading-5 text-coolGray-900 border border-coolGray-200 rounded-lg shadow-md placeholder-coolGray-400 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50" type="text" placeholder="Téléphone de l'entreprise" autocomplete="off">
        </div>

        <div class="mb-6">
          <label class="block mb-2 text-xs text-gray-700 uppercase tracking-wide font-bold">Description</label>
          <textarea name="description" class="appearance-none block w-full py-3 px-4 leading-tight text-gray-700 bg-gray-200 focus:bg-white border border-gray-200 focus:border-gray-500 rounded focus:outline-none" placeholder="Petite description de l'entreprise" rows="5">{{ $lieux->description }}</textarea>
        </div>
        <div class="mb-6">
          <label class="block mb-2 text-coolGray-800 font-medium" for="rank">Role</label>
          <input value='{{ $lieux->rank }}' name="rank" id="rank" class="appearance-none block w-full p-3 leading-5 text-coolGray-900 border border-coolGray-200 rounded-lg shadow-md placeholder-coolGray-400 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50" type="text" placeholder="Votre role dans l'entreprise" autocomplete="off">
        </div>
        <button class="inline-block py-3 px-7 mb-6 w-full text-base text-red-50 font-medium text-center leading-6 bg-red-500 hover:bg-red-600 focus:ring-2 focus:ring-red-500 focus:ring-opacity-50 rounded-md shadow-sm">Enregistrer</button>
        <p class="text-center">
          <span class="text-xs font-medium">Vous voulez retourner à la page précédente ?</span>
          <a class="inline-block text-xs font-medium text-red-500 hover:text-red-600 hover:underline" href="{{ route('lieux.index') }}">Retour</a>
        </p>
      </form>

    </div>

    <form action="{{ route('lieux.destroy', ['lieux'=>$lieux]) }}" method="post">
      @csrf
      @method('DELETE')
      <button class="inline-block px-6 leading-none text-white bg-red-500 hover:bg-indigo-600 rounded shadow py-3">Supprimer l'entreprise</button>
    </form>
  </div>
</section>

@endsection