@extends('app.app')

@section('title')
    Mes intervenants
@endsection

@section('content')
    <section class="container flex h-screen flex-row bg-gray-50 p-6">
        <section class="w-1/5">
            les icones(retour), photo, nom, prenom, role/profession
            <div class="flex justify-center">
                <img src="placeholders/pictures/office.jpg" alt="" class="shadow-md h-60 w-60" style="border-radius: 50%;"
                    title="">
            </div>
            <div class="flex justify-center whitespace-nowrap mb-6">
                <span class="mr-2">Jean</span>
                <span class="ml-2">Luc</span>
            </div>
            <div class="flex justify-center">
                <span class="">Rôle</span>
            </div>
        </section>

        <section class="w-4/5">

            {{-- Le h-1/2 fait des effets de bords --}}
            <div class="bg-white drop-shadow-md px-4 mb-4 flex">
                <div class="flex flex-col w-full h-full">
                    <h3 class="text-5xl mt-2 mb-6 leading-tight font-heading">Information</h3>
                    <hr>

                    {{-- <div class="">
                        <div
                            class="inline-flex h-14 w-auto mx-4 items-center justify-start text-white bg-green-700 rounded-lg pr-4">
                            <div class="mx-4">
                                <svg height="42" width="42" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                    <path
                                        d="M511.2 387l-23.25 100.8c-3.266 14.25-15.79 24.22-30.46 24.22C205.2 512 0 306.8 0 54.5c0-14.66 9.969-27.2 24.22-30.45l100.8-23.25C139.7-2.602 154.7 5.018 160.8 18.92l46.52 108.5c5.438 12.78 1.77 27.67-8.98 36.45L144.5 207.1c33.98 69.22 90.26 125.5 159.5 159.5l44.08-53.8c8.688-10.78 23.69-14.51 36.47-8.975l108.5 46.51C506.1 357.2 514.6 372.4 511.2 387z" />
                                </svg>
                            </div>
                            <span class="whitespace-nowrap font-semibold text-2xl">Ajouter un objet</span>
                        </div>
                    </div> --}}

                    <div class="w-full">
                        <h4 class="text-3xl mt-2 mb-6 leading-tight font-medium">Contact</h4>

                        {{-- <div
                        class="flex flex-wrap h-auto p-8 text-center md:text-left hover:bg-white rounded-md hover:shadow-xl transition duration-200">
                        <div class="w-full md:w-auto mb-6 md:mb-0 md:pr-6"> --}}
                        <div class="flex flex-row">
                            <div
                                class="inline-flex h-14 w-14 mx-auto items-center justify-center text-white bg-green-700 rounded-lg mr-6">
                                <svg height="21" width="21" xmlns="http://www.w3.org/2000/svg" fill="white"
                                    viewBox="0 0 512 512">
                                    {{-- ! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --}}
                                    <path
                                        d="M464 64C490.5 64 512 85.49 512 112C512 127.1 504.9 141.3 492.8 150.4L275.2 313.6C263.8 322.1 248.2 322.1 236.8 313.6L19.2 150.4C7.113 141.3 0 127.1 0 112C0 85.49 21.49 64 48 64H464zM217.6 339.2C240.4 356.3 271.6 356.3 294.4 339.2L512 176V384C512 419.3 483.3 448 448 448H64C28.65 448 0 419.3 0 384V176L217.6 339.2z" />
                                </svg>
                            </div>

                            {{-- <div class="w-full flex justify-start flex-row md:pt-3">
                            <h3 class="text-xl md:text-2xl leading-tight text-coolGray-900 font-bold">
                                Nom de l'objet :
                            </h3>
                            <span class="">je.suis@un.mail</span>
                            <button class="absolute" style="right: 0">
                                <svg width="42" height="42" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M362.7 19.32C387.7-5.678 428.3-5.678 453.3 19.32L492.7 58.75C517.7 83.74 517.7 124.3 492.7 149.3L444.3 197.7L314.3 67.72L362.7 19.32zM421.7 220.3L188.5 453.4C178.1 463.8 165.2 471.5 151.1 475.6L30.77 511C22.35 513.5 13.24 511.2 7.03 504.1C.8198 498.8-1.502 489.7 .976 481.2L36.37 360.9C40.53 346.8 48.16 333.9 58.57 323.5L291.7 90.34L421.7 220.3z" />
                                </svg>
                            </button>
                        </div> --}}

                            <div class="w-full flex place-content-between">
                                <div class="flex flex-row items-center">
                                    <h3 class="text-xl md:text-2xl leading-tight text-coolGray-900 font-bold mr-4">
                                        Nom de l'objet :
                                    </h3>
                                    <span class="">je.suis@un.mail</span>
                                </div>
                                <button>
                                    <svg width="42" height="42" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        {{-- ! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --}}
                                        <path
                                            d="M362.7 19.32C387.7-5.678 428.3-5.678 453.3 19.32L492.7 58.75C517.7 83.74 517.7 124.3 492.7 149.3L444.3 197.7L314.3 67.72L362.7 19.32zM421.7 220.3L188.5 453.4C178.1 463.8 165.2 471.5 151.1 475.6L30.77 511C22.35 513.5 13.24 511.2 7.03 504.1C.8198 498.8-1.502 489.7 .976 481.2L36.37 360.9C40.53 346.8 48.16 333.9 58.57 323.5L291.7 90.34L421.7 220.3z" />
                                    </svg>
                                </button>
                            </div>
                            {{-- </div>
                    </div> --}}
                        </div>

                        <h4 class="text-3xl mt-2 mb-6 leading-tight font-medium">Adresse</h4>
                    </div>
                </div>

                {{-- <div class="bg-white h-1/2 drop-shadow-md px-4">
                <div class="flex flex-start">
                    <h3 class="">Description</h3>
                </div>
            </div> --}}

        </section>
    </section>
@endsection
