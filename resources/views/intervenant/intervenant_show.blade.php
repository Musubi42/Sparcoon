@extends('app.app')

@section('title')
    Mes intervenants
@endsection

@section('content')
    <section class="container flex flex-row bg-gray-50 m-6">
        <section class="w-1/5">
            les icones(retour), photo, nom, prenom, role/profession
            <img src="placeholders/pictures/office.jpg" alt="" class="shadow-md h-60 w-60" style="border-radius: 50%;"
                title="">
            <div class="flex justify-center whitespace-nowrap mb-6">
                <span class="mr-2">Jean</span>
                <span class="ml-2">Luc</span>
            </div>
            <div class="flex justify-center">
                <span class="">Rôle</span>
            </div>
        </section>

        <section class="w-4/5">

            <div class="bg-white h-1/2 drop-shadow-md px-4 mb-4 flex">
                <div class="flex flex-col">
                    <h3 class="text-5xl mt-2 mb-6 leading-tight font-heading">Information</h3>

                    <h4 class="text-3xl mt-2 mb-6 leading-tight font-medium">Contact</h4>

                    <div class="">
                        <div
                            class="inline-flex h-14 w-auto mx-4 items-center justify-start text-white bg-green-700 rounded-lg pr-4">
                            <div class="mx-4">
                                <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" fill="white"
                                    viewBox="0 0 448 512">
                                    <path
                                        d="M432 256c0 17.69-14.33 32.01-32 32.01H256v144c0 17.69-14.33 31.99-32 31.99s-32-14.3-32-31.99v-144H48c-17.67 0-32-14.32-32-32.01s14.33-31.99 32-31.99H192v-144c0-17.69 14.33-32.01 32-32.01s32 14.32 32 32.01v144h144C417.7 224 432 238.3 432 256z" />
                                </svg>
                            </div>
                            <span class="whitespace-nowrap font-semibold text-2xl">Ajouter un objet</span>
                        </div>
                    </div>
                    <h4 class="text-3xl mt-2 mb-6 leading-tight font-medium">Adresse</h4>
                </div>
            </div>

            <div class="bg-white h-1/2 drop-shadow-md px-4">
                <div class="flex flex-start">
                    <h3 class="">Description</h3>
                </div>
            </div>

        </section>
    </section>
@endsection
