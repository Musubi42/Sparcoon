@extends('app.app')

@section('title')
    Example
@endsection


@section('content')
    <form action="{{ route('examples.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="flex items-center justify-center h-screen bg-red-100">
            <div class="bg-white rounded-2xl border shadow-x1 p-10 max-w-lg">
                <div class="flex flex-col items-center space-y-4">
                    <h1 class="font-bold text-2xl text-gray-700 w-4/6 text-center">
                        Création d'un example
                    </h1>
                    <p class="text-sm text-gray-500 text-center w-5/6">
                       Salut, Insére un titre ci-dessous pour créer un example
                    </p>
                    <input type="file" name="image" id="image">
                    <input type="text" placeholder="Titre" class="border-2 rounded-lg w-full h-12 px-4" name="title" id="title"/>
                    <button class="bg-red-400 text-white rounded-md hover:bg-red-500 font-semibold px-4 py-3 w-full">
                        Créer
                    </button>
                </div>
            </div>
        </div>
    </form>
    @endsection
