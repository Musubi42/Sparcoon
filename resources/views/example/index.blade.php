@extends('app.app')

@section('title')
    Liste des examples
@endsection

@section('content')
@if(session('success'))
    <div class="bg-green-100 rounded-md p-3 flex">
        <svg
            class="stroke-2 stroke-current text-green-600 h-8 w-8 mr-2 flex-shrink-0"
            viewBox="0 0 24 24"
            fill="none"
            strokeLinecap="round"
            strokeLinejoin="round"
        >
            <path d="M0 0h24v24H0z" stroke="none" />
            <circle cx="12" cy="12" r="9" />
            <path d="M9 12l2 2 4-4" />
        </svg>
    
        <div class="text-green-700">
            <div class="font-bold text-xl">Super !</div>
    
            <div>{{session('success')}}</div>
        </div>
    </div>
@endif

<table class="border-collapse w-full">
    <thead>
        <tr>
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Titre</th>
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($examples as $example)
        <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Titre</span>
                {{ $example->title }}
            </td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Action</span>
                <a href="{{ route('examples.show', $example->id) }}" class="text-blue-500 hover:text-blue-700">Voir</a>
                <a href="{{ route('examples.edit', $example->id) }}" class="ml-4 text-blue-500 hover:text-blue-700">Modifier</a>
                <form action="{{ route('examples.destroy', $example->id) }}" method="POST" class="ml-4">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-blue-500 hover:text-blue-700">Supprimer</button>
            </td>
        </tr>
        @empty
            rien
        @endforelse

       
    </tbody>
</table>

{{$examples->links()}}
@endsection