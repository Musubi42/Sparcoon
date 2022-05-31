@extends('app.app')

@section('title')
    Modifier un traitement
@endsection

@section('content')
    <section class="container px-4 mx-auto">
        <div class="text-center">
            <h1
                class="mb-10 mx-auto text-3xl md:text-4xl leading-tight text-coolGray-900 font-bold tracking-tighter max-w-5xl">
                Nom du médicament
            </h1>
        </div>

        {{-- <form action="{{ route('treatment.store') }}" method="post"> --}}
        @csrf
        <div class="container px-4 mx-auto mb-6">
            <div
                class="flex flex-wrap p-8 text-center md:text-left hover:bg-white rounded-md hover:shadow-xl transition duration-200">
                <div class="w-full md:flex-1 md:pt-3">
                    <h3 class="mb-4 text-xl md:text-2xl leading-tight text-coolGray-900 font-bold">Information du médicament
                    </h3>
                    <div>
                        <label class="block mb-2 text-xs text-gray-700 uppercase tracking-wide font-bold">Nom du
                            médicament</label>
                        <input name="name"
                            class="appearance-none block w-full py-3 px-4 mb-2 md:mb-0 leading-tight text-gray-700 bg-gray-200 focus:bg-white border border-gray-200 focus:border-gray-500 rounded focus:outline-none"
                            type="text" placeholder="Nom de l'objet" required="">
                    </div>
                    <div>
                        <label class="mb-2 text-xs text-gray-700 uppercase tracking-wide font-bold">Description</label>
                        <textarea name="description" class="appearance-none w-full py-3 px-4 leading-tight text-gray-700 bg-gray-200 focus:bg-white border border-gray-200 focus:border-gray-500 rounded focus:outline-none"
                            placeholder="Description de l'objet" rows="1"></textarea>
                    </div>
                </div>
            </div>

            <div
                class="flex flex-wrap p-8 text-center md:text-left hover:bg-white rounded-md hover:shadow-xl transition duration-200">
                <div class="w-full md:flex-1 md:pt-3">
                    <h3 class="mb-4 text-xl md:text-2xl leading-tight text-coolGray-900 font-bold">Jour de prise
                    </h3>

                    <div class="flex flex-row flex-wrap mx-4">
                        <div class="w-1/4 p-4">
                            <span>Lundi</span>
                            <input type="checkbox" name="monday" value="1">
                        </div>
                        <div class="w-1/4 p-4">
                            <span>Mardi</span>
                            <input type="checkbox" name="tuesday" value="1">
                        </div>
                        <div class="w-1/4 p-4">
                            <span>Mercredi</span>
                            <input type="checkbox" name="wednesday" value="1">
                        </div>
                        <div class="w-1/4 p-4">
                            <span>Jeudi</span>
                            <input type="checkbox" name="thursday" value="1">
                        </div>
                        <div class="w-1/4 p-4">
                            <span>Vendredi</span>
                            <input type="checkbox" name="friday" value="1">
                        </div>
                        <div class="w-1/4 p-4">
                            <span>Samedi</span>
                            <input type="checkbox" name="saturday" value="1">
                        </div>
                        <div class="w-1/4 p-4">
                            <span>Dimanche</span>
                            <input type="checkbox" name="sunday" value="1">
                        </div>
                    </div>
                </div>
            </div>


            <div
                class="flex flex-wrap p-8 text-center md:text-left hover:bg-white rounded-md hover:shadow-xl transition duration-200">
                <div class="w-full md:flex-1 md:pt-3">
                    <h3 class="mb-4 text-xl md:text-2xl leading-tight text-coolGray-900 font-bold">Posologie
                    </h3>

                    <div class="w-full flex flex-wrap mx-4 my-6">
                        <div class="mr-10">
                            <label class="mr-2" for="appt">Dosage:</label>
                            <input type="number" id="appt" name="appt" required>
                        </div>
                        <label class="flex items-center mr-2" for="appt">Heure:</label>
                        <input type="time" id="appt" name="appt" min="00:00" max="23:59" required>
                    </div>
                </div>
            </div>

        </div>
        <div class="flex justify-end">
            <button type="submit"
                class="inline-flex h-14 w-auto mx-4 items-center justify-start text-white bg-green-700 rounded-lg pr-4">
                <div class="mx-4">
                    <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 448 512">
                        {{-- ! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --}}
                        <path
                            d="M432 256c0 17.69-14.33 32.01-32 32.01H256v144c0 17.69-14.33 31.99-32 31.99s-32-14.3-32-31.99v-144H48c-17.67 0-32-14.32-32-32.01s14.33-31.99 32-31.99H192v-144c0-17.69 14.33-32.01 32-32.01s32 14.32 32 32.01v144h144C417.7 224 432 238.3 432 256z" />
                    </svg>
                </div>
                <span class="whitespace-nowrap font-semibold text-2xl">Modifier le traitement</span>
            </button>
        </div>

        {{-- </form> --}}


    </section>
@endsection
