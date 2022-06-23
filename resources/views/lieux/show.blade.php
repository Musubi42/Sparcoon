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
      <form action="">
        <div class="mb-6">
          <label class="block mb-2 text-coolGray-800 font-medium" for="">Nom</label>
          <input disabled class="appearance-none block w-full p-3 leading-5 text-coolGray-900 border border-coolGray-200 rounded-lg shadow-md placeholder-coolGray-400 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50" type="email" placeholder="dev@shuffle.dev" autocomplete="off">
        </div>

        <div class="mb-6">
          <label class="block mb-2 text-xs text-gray-700 uppercase tracking-wide font-bold">Example textarea</label>
          <textarea disabled class="appearance-none block w-full py-3 px-4 leading-tight text-gray-700 bg-gray-200 focus:bg-white border border-gray-200 focus:border-gray-500 rounded focus:outline-none" placeholder="Write something..." rows="5"></textarea>
        </div>
        <div class="mb-6">
          <label class="block mb-2 text-coolGray-800 font-medium" for="">Role</label>
          <input disabled class="appearance-none block w-full p-3 leading-5 text-coolGray-900 border border-coolGray-200 rounded-lg shadow-md placeholder-coolGray-400 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50" type="text" placeholder="Votre role dans l'entreprise" autocomplete="off">
        </div>
        <a class="inline-block py-3 px-7 mb-6 w-full text-base text-red-50 font-medium text-center leading-6 bg-red-500 hover:bg-red-600 focus:ring-2 focus:ring-red-500 focus:ring-opacity-50 rounded-md shadow-sm" href="#">Enregistrer</a>
        <p class="text-center">
          <span class="text-xs font-medium">Vous voulez retourner à la page précédente ?</span>
          <a class="inline-block text-xs font-medium text-red-500 hover:text-red-600 hover:underline" href="#">Retour</a>
        </p>
      </form>

    </div>
    <button class="inline-block px-6 leading-none text-white hover:bg-indigo-600 rounded shadow py-3 bg-red-700 rounded-11xl">Modifier l'entreprise</button>

  </div>
</section>
 
@endsection