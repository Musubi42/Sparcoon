@extends('app.app')

@section('title')
    Traitement
@endsection

@section('content')
    <div class="container px-4 mx-auto">
        <div class="w-full flex flex-row items-center mb-6">
            <h3 class="flex flex-1 text-3xl leading-tight text-coolGray-900 font-bold tracking-tighter justify-end">
                Traitement</h3>

            {{-- Pour faire défiler les jours --}}
            <div class="flex flex-1 flex-row justify-end text-3xl ">
                <div class="cursor-pointer">
                    <svg height="38" width="38" xmlns="http://www.w3.org/2000/svg" fill="black" viewBox="0 0 256 512">
                        {{-- ! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license
                    (Commercial License) Copyright 2022 Fonticons, Inc. --}}
                        <path
                            d="M192 448c-8.188 0-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25l160-160c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25L77.25 256l137.4 137.4c12.5 12.5 12.5 32.75 0 45.25C208.4 444.9 200.2 448 192 448z" />
                    </svg>
                </div>
                <span class="">Jour</span>
                <div class="rotate-180 height-auto cursor-pointer" style="line-height: 0">
                    <svg height="38" width="38" xmlns="http://www.w3.org/2000/svg" fill="black" viewBox="0 0 256 512">
                        {{-- ! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license
                    (Commercial License) Copyright 2022 Fonticons, Inc. --}}
                        <path
                            d="M192 448c-8.188 0-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25l160-160c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25L77.25 256l137.4 137.4c12.5 12.5 12.5 32.75 0 45.25C208.4 444.9 200.2 448 192 448z" />
                    </svg>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap -mx-4">

            <div class="w-full px-4 mb-16">
                <div class="group h-full">
                    {{-- medication schedule --}}
                    <h1 class="text-5xl mt-2 mb-6 leading-tight font-heading">9:00</h1>
                    {{-- Name of the medicament to take --}}
                    <div class="flex flex-row flex-wrap mx-4">
                        <span class="w-1/4 p-4">Jean</span>
                        <span class="w-1/4 p-4">Jean</span>
                        <span class="w-1/4 p-4">Jean</span>
                        <span class="w-1/4 p-4">Jean</span>
                        <span class="w-1/4 p-4">Jean</span>
                        <span class="w-1/4 p-4">Jean</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
