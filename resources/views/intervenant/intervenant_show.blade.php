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

                    <div class="w-full mb-6">
                        <div class="mb-4">
                            <h4 class="text-3xl mt-2 mb-6 leading-tight font-medium">Contact</h4>
                            <div class="flex flex-row mb-2">
                                <div
                                    class="inline-flex h-14 w-14 mx-auto items-center justify-center text-white bg-green-700 rounded-lg mr-6">
                                    <svg height="21" width="21" xmlns="http://www.w3.org/2000/svg" fill="white"
                                        viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M511.2 387l-23.25 100.8c-3.266 14.25-15.79 24.22-30.46 24.22C205.2 512 0 306.8 0 54.5c0-14.66 9.969-27.2 24.22-30.45l100.8-23.25C139.7-2.602 154.7 5.018 160.8 18.92l46.52 108.5c5.438 12.78 1.77 27.67-8.98 36.45L144.5 207.1c33.98 69.22 90.26 125.5 159.5 159.5l44.08-53.8c8.688-10.78 23.69-14.51 36.47-8.975l108.5 46.51C506.1 357.2 514.6 372.4 511.2 387z" />
                                    </svg>
                                </div>
                                <div class="w-full flex place-content-between">
                                    <div class="flex flex-row items-center">
                                        <h3 class="text-xl md:text-2xl leading-tight text-coolGray-900 font-bold mr-4">
                                            Numéro de téléphone :
                                        </h3>
                                        <span class="">00.00.00.00.00</span>
                                    </div>
                                    <button>
                                        <svg width="42" height="42" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512">
                                            {{-- ! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --}}
                                            <path
                                                d="M362.7 19.32C387.7-5.678 428.3-5.678 453.3 19.32L492.7 58.75C517.7 83.74 517.7 124.3 492.7 149.3L444.3 197.7L314.3 67.72L362.7 19.32zM421.7 220.3L188.5 453.4C178.1 463.8 165.2 471.5 151.1 475.6L30.77 511C22.35 513.5 13.24 511.2 7.03 504.1C.8198 498.8-1.502 489.7 .976 481.2L36.37 360.9C40.53 346.8 48.16 333.9 58.57 323.5L291.7 90.34L421.7 220.3z" />
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            <div class="flex flex-row mb-2">
                                <div
                                    class="inline-flex h-14 w-14 mx-auto items-center justify-center text-white bg-green-700 rounded-lg mr-6">
                                    <svg height="21" width="21" xmlns="http://www.w3.org/2000/svg" fill="white"
                                        viewBox="0 0 512 512">
                                        {{-- ! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --}}
                                        <path
                                            d="M464 64C490.5 64 512 85.49 512 112C512 127.1 504.9 141.3 492.8 150.4L275.2 313.6C263.8 322.1 248.2 322.1 236.8 313.6L19.2 150.4C7.113 141.3 0 127.1 0 112C0 85.49 21.49 64 48 64H464zM217.6 339.2C240.4 356.3 271.6 356.3 294.4 339.2L512 176V384C512 419.3 483.3 448 448 448H64C28.65 448 0 419.3 0 384V176L217.6 339.2z" />
                                    </svg>
                                </div>
                                <div class="w-full flex place-content-between">
                                    <div class="flex flex-row items-center">
                                        <h3 class="text-xl md:text-2xl leading-tight text-coolGray-900 font-bold mr-4">
                                            Adresse mail :
                                        </h3>
                                        <span class="">je.suis@un.mail</span>
                                    </div>
                                    <button>
                                        <svg width="42" height="42" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512">
                                            {{-- ! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --}}
                                            <path
                                                d="M362.7 19.32C387.7-5.678 428.3-5.678 453.3 19.32L492.7 58.75C517.7 83.74 517.7 124.3 492.7 149.3L444.3 197.7L314.3 67.72L362.7 19.32zM421.7 220.3L188.5 453.4C178.1 463.8 165.2 471.5 151.1 475.6L30.77 511C22.35 513.5 13.24 511.2 7.03 504.1C.8198 498.8-1.502 489.7 .976 481.2L36.37 360.9C40.53 346.8 48.16 333.9 58.57 323.5L291.7 90.34L421.7 220.3z" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <h4 class="text-3xl mt-2 mb-6 leading-tight font-medium">Adresse</h4>
                            <div class="flex flex-row mb-2">
                                <div
                                    class="inline-flex h-14 w-14 mx-auto items-center justify-center text-white bg-green-700 rounded-lg mr-6">
                                    <svg height="21" width="21" xmlns="http://www.w3.org/2000/svg" fill="white"
                                        viewBox="0 0 512 512">
                                        {{-- ! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --}}
                                        <path
                                            d="M464 64C490.5 64 512 85.49 512 112C512 127.1 504.9 141.3 492.8 150.4L275.2 313.6C263.8 322.1 248.2 322.1 236.8 313.6L19.2 150.4C7.113 141.3 0 127.1 0 112C0 85.49 21.49 64 48 64H464zM217.6 339.2C240.4 356.3 271.6 356.3 294.4 339.2L512 176V384C512 419.3 483.3 448 448 448H64C28.65 448 0 419.3 0 384V176L217.6 339.2z" />
                                    </svg>
                                </div>
                                <div class="w-full flex place-content-between">
                                    <div class="flex flex-row items-center">
                                        <h3 class="text-xl md:text-2xl leading-tight text-coolGray-900 font-bold mr-4">
                                            Rue :
                                        </h3>
                                        <span class="">42 rue de la fin du monde</span>
                                    </div>
                                    <button>
                                        <svg width="42" height="42" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512">
                                            {{-- ! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --}}
                                            <path
                                                d="M362.7 19.32C387.7-5.678 428.3-5.678 453.3 19.32L492.7 58.75C517.7 83.74 517.7 124.3 492.7 149.3L444.3 197.7L314.3 67.72L362.7 19.32zM421.7 220.3L188.5 453.4C178.1 463.8 165.2 471.5 151.1 475.6L30.77 511C22.35 513.5 13.24 511.2 7.03 504.1C.8198 498.8-1.502 489.7 .976 481.2L36.37 360.9C40.53 346.8 48.16 333.9 58.57 323.5L291.7 90.34L421.7 220.3z" />
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            {{-- Voir à mettre le code postal et la ville sur la même ligne en media query grand et ou si non à la ligne --}}
                            <div class="flex flex-row mb-2">
                                <div
                                    class="inline-flex h-14 w-14 mx-auto items-center justify-center text-white bg-green-700 rounded-lg mr-6">
                                    <svg height="21" width="21" xmlns="http://www.w3.org/2000/svg" fill="white"
                                        viewBox="0 0 576 512">
                                        <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M256 96C256 113.7 270.3 128 288 128C305.7 128 320 113.7 320 96V32H394.8C421.9 32 446 49.08 455.1 74.63L572.9 407.2C574.9 413 576 419.2 576 425.4C576 455.5 551.5 480 521.4 480H320V416C320 398.3 305.7 384 288 384C270.3 384 256 398.3 256 416V480H54.61C24.45 480 0 455.5 0 425.4C0 419.2 1.06 413 3.133 407.2L120.9 74.63C129.1 49.08 154.1 32 181.2 32H255.1L256 96zM320 224C320 206.3 305.7 192 288 192C270.3 192 256 206.3 256 224V288C256 305.7 270.3 320 288 320C305.7 320 320 305.7 320 288V224z" />
                                    </svg>
                                </div>
                                <div class="w-full flex place-content-between">
                                    <div class="flex flex-row items-center">
                                        <h3 class="text-xl md:text-2xl leading-tight text-coolGray-900 font-bold mr-4">
                                            Code postal :
                                        </h3>
                                        <span class="">42000</span>
                                    </div>
                                    <button>
                                        <svg width="42" height="42" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512">
                                            {{-- ! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --}}
                                            <path
                                                d="M362.7 19.32C387.7-5.678 428.3-5.678 453.3 19.32L492.7 58.75C517.7 83.74 517.7 124.3 492.7 149.3L444.3 197.7L314.3 67.72L362.7 19.32zM421.7 220.3L188.5 453.4C178.1 463.8 165.2 471.5 151.1 475.6L30.77 511C22.35 513.5 13.24 511.2 7.03 504.1C.8198 498.8-1.502 489.7 .976 481.2L36.37 360.9C40.53 346.8 48.16 333.9 58.57 323.5L291.7 90.34L421.7 220.3z" />
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            <div class="flex flex-row mb-2">
                                <div
                                    class="inline-flex h-14 w-14 mx-auto items-center justify-center text-white bg-green-700 rounded-lg mr-6">
                                    <svg height="21" width="21" xmlns="http://www.w3.org/2000/svg" fill="white"
                                        viewBox="0 0 640 512">
                                        <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M288 48C288 21.49 309.5 0 336 0H432C458.5 0 480 21.49 480 48V192H520V120C520 106.7 530.7 96 544 96C557.3 96 568 106.7 568 120V192H592C618.5 192 640 213.5 640 240V464C640 490.5 618.5 512 592 512H336C309.5 512 288 490.5 288 464V48zM352 112C352 120.8 359.2 128 368 128H400C408.8 128 416 120.8 416 112V80C416 71.16 408.8 64 400 64H368C359.2 64 352 71.16 352 80V112zM368 160C359.2 160 352 167.2 352 176V208C352 216.8 359.2 224 368 224H400C408.8 224 416 216.8 416 208V176C416 167.2 408.8 160 400 160H368zM352 304C352 312.8 359.2 320 368 320H400C408.8 320 416 312.8 416 304V272C416 263.2 408.8 256 400 256H368C359.2 256 352 263.2 352 272V304zM528 256C519.2 256 512 263.2 512 272V304C512 312.8 519.2 320 528 320H560C568.8 320 576 312.8 576 304V272C576 263.2 568.8 256 560 256H528zM512 400C512 408.8 519.2 416 528 416H560C568.8 416 576 408.8 576 400V368C576 359.2 568.8 352 560 352H528C519.2 352 512 359.2 512 368V400zM224 160C224 166 223 171 222 176C242 190 256 214 256 240C256 285 220 320 176 320H160V480C160 498 145 512 128 512C110 512 96 498 96 480V320H80C35 320 0 285 0 240C0 214 13 190 33 176C32 171 32 166 32 160C32 107 74 64 128 64C181 64 224 107 224 160z" />
                                    </svg>
                                </div>
                                <div class="w-full flex place-content-between">
                                    <div class="flex flex-row items-center">
                                        <h3 class="text-xl md:text-2xl leading-tight text-coolGray-900 font-bold mr-4">
                                            Ville :
                                        </h3>
                                        <span class="">Le dernier restaurant avant la fin du monde</span>
                                    </div>
                                    <button>
                                        <svg width="42" height="42" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512">
                                            {{-- ! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --}}
                                            <path
                                                d="M362.7 19.32C387.7-5.678 428.3-5.678 453.3 19.32L492.7 58.75C517.7 83.74 517.7 124.3 492.7 149.3L444.3 197.7L314.3 67.72L362.7 19.32zM421.7 220.3L188.5 453.4C178.1 463.8 165.2 471.5 151.1 475.6L30.77 511C22.35 513.5 13.24 511.2 7.03 504.1C.8198 498.8-1.502 489.7 .976 481.2L36.37 360.9C40.53 346.8 48.16 333.9 58.57 323.5L291.7 90.34L421.7 220.3z" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="bg-white drop-shadow-md px-4 mb-4 flex">
                <div class="flex flex-col w-full h-full">
                    <h3 class="text-5xl mt-2 mb-6 leading-tight font-heading">Description</h3>
                    <hr>

                    <label class="block mb-2 text-xs text-gray-700 uppercase tracking-wide font-bold">Example
                        textarea</label>
                    <textarea class="appearance-none block w-full py-3 px-4 leading-tight text-gray-700 bg-gray-200 focus:bg-white border border-gray-200 focus:border-gray-500 rounded focus:outline-none"
                        placeholder="Write something..." rows="5"></textarea>
                </div>
            </div>
        </section>
    </section>
@endsection
