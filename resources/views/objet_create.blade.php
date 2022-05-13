@extends('component.app')

@section('title')
    Créer objet
@endsection

@section('content')
    <section class="container px-4 mx-auto">
        <div class="text-center">
            <h1
                class="mb-10 mx-auto text-3xl md:text-4xl leading-tight text-coolGray-900 font-bold tracking-tighter max-w-5xl">
                Modifier objet</h1>
        </div>
        <div class="container px-4 mx-auto">
            <div
                class="flex flex-wrap p-8 text-center md:text-left hover:bg-white rounded-md hover:shadow-xl transition duration-200">
                <div class="w-full md:w-auto mb-6 md:mb-0 md:pr-6">
                    <div class="inline-flex h-14 w-14 mx-auto items-center justify-center text-white bg-red-500 rounded-lg">
                        <svg width="21" height="21" viewBox="0 0 640 512" fill="white" xmlns="http://www.w3.org/2000/svg">
                            {{-- Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --}}
                            <path
                                d="M192 160C192 177.7 177.7 192 160 192C142.3 192 128 177.7 128 160V128C128 74.98 170.1 32 224 32C277 32 320 74.98 320 128V135.8C320 156.6 318.8 177.4 316.4 198.1L438.8 161.3C450.2 157.9 462.6 161.1 470.1 169.7C479.3 178.3 482.1 190.8 478.4 202.1L460.4 255.1H544C561.7 255.1 576 270.3 576 287.1C576 305.7 561.7 319.1 544 319.1H416C405.7 319.1 396.1 315.1 390 306.7C384 298.4 382.4 287.6 385.6 277.9L398.1 240.4L303.7 268.7C291.9 321.5 272.2 372.2 245.3 419.2L231.4 443.5C218.5 466.1 194.5 480 168.5 480C128.5 480 95.1 447.5 95.1 407.5V335.6C95.1 293.2 123.8 255.8 164.4 243.7L248.8 218.3C253.6 191.1 255.1 163.5 255.1 135.8V128C255.1 110.3 241.7 96 223.1 96C206.3 96 191.1 110.3 191.1 128L192 160zM160 335.6V407.5C160 412.2 163.8 416 168.5 416C171.5 416 174.4 414.4 175.9 411.7L189.8 387.4C207.3 356.6 221.4 324.1 231.8 290.3L182.8 304.1C169.3 309 160 321.5 160 335.6V335.6zM24 368H64V407.5C64 410.4 64.11 413.2 64.34 416H24C10.75 416 0 405.3 0 392C0 378.7 10.75 368 24 368zM616 416H283.5C291.7 400.3 299.2 384.3 305.9 368H616C629.3 368 640 378.7 640 392C640 405.3 629.3 416 616 416z" />
                        </svg>
                    </div>
                </div>
                <div class="w-full md:flex-1 md:pt-3">
                    <h3 class="mb-4 text-xl md:text-2xl leading-tight text-coolGray-900 font-bold">Nom de l'objet</h3>
                    <label class="block mb-2 text-xs text-gray-700 uppercase tracking-wide font-bold"></label>
                    <input
                        class="appearance-none block w-full py-3 px-4 mb-2 md:mb-0 leading-tight text-gray-700 bg-gray-200 focus:bg-white border border-gray-200 focus:border-gray-500 rounded focus:outline-none"
                        type="text" placeholder="Nom de l'objet" required="">
                </div>
            </div>

            <div
                class="flex flex-wrap p-8 text-center md:text-left hover:bg-white rounded-md hover:shadow-xl transition duration-200">
                <div class="w-full md:w-auto mb-6 md:mb-0 md:pr-6">
                    <div class="inline-flex h-14 w-14 mx-auto items-center justify-center text-white bg-red-500 rounded-lg">
                        <svg width="21" height="21" viewBox="0 0 384 512" fill="white" xmlns="http://www.w3.org/2000/svg">
                            {{-- ! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --}}
                            <path d="M384 48V512l-192-112L0 512V48C0 21.5 21.5 0 48 0h288C362.5 0 384 21.5 384 48z" />
                        </svg>
                    </div>
                </div>
                <div class="w-full md:flex-1 md:pt-3">
                    <h3 class="mb-4 text-xl md:text-2xl leading-tight text-coolGray-900 font-bold">Catégorie</h3>
                    <label class="block mb-2 text-xs text-gray-700 uppercase tracking-wide font-bold"></label>
                    <select
                        class="appearance-none block py-3 px-4 leading-tight text-gray-700 bg-gray-200 focus:bg-white border border-gray-200 focus:border-gray-500 rounded focus:outline-none">
                        <option>Sélectionner une catégorie</option>
                        <option>Catégorie 1</option>
                        <option>Catégorie 2</option>
                        <option>Catégorie 3</option>
                    </select>
                </div>
            </div>

            <div
                class="flex flex-wrap p-8 text-center md:text-left hover:bg-white rounded-md hover:shadow-xl transition duration-200">
                <div class="w-full md:w-auto mb-6 md:mb-0 md:pr-6">
                    <div class="inline-flex h-14 w-14 mx-auto items-center justify-center text-white bg-red-500 rounded-lg">
                        <svg width="21" height="21" viewBox="0 0 448 512" fill="white" xmlns="http://www.w3.org/2000/svg">
                            {{-- Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --}}
                            <path
                                d="M96 32C96 14.33 110.3 0 128 0C145.7 0 160 14.33 160 32V64H288V32C288 14.33 302.3 0 320 0C337.7 0 352 14.33 352 32V64H400C426.5 64 448 85.49 448 112V160H0V112C0 85.49 21.49 64 48 64H96V32zM448 464C448 490.5 426.5 512 400 512H48C21.49 512 0 490.5 0 464V192H448V464z" />
                        </svg>
                    </div>
                </div>
                <div class="w-full md:flex-1 md:pt-3">
                    <h3 class="mb-4 text-xl md:text-2xl leading-tight text-coolGray-900 font-bold">Date d'achat</h3>
                    <input
                        class="appearance-none block w-full py-3 px-4 mb-2 md:mb-0 leading-tight text-gray-700 bg-gray-200 focus:bg-white border border-gray-200 focus:border-gray-500 rounded focus:outline-none"
                        type="date" id="buyDate" name="date d'achat">
                </div>
            </div>
            <div
                class="flex flex-wrap p-8 text-center md:text-left hover:bg-white rounded-md hover:shadow-xl transition duration-200">
                <div class="w-full md:w-auto mb-6 md:mb-0 md:pr-6">
                    <div class="inline-flex h-14 w-14 mx-auto items-center justify-center text-white bg-red-500 rounded-lg">
                        <svg width="21" height="21" viewBox="0 0 384 512" fill="white" xmlns="http://www.w3.org/2000/svg">
                            {{-- ! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --}}
                            <path
                                d="M64 240C46.33 240 32 225.7 32 208C32 190.3 46.33 176 64 176H92.29C121.9 92.11 201.1 32 296 32H320C337.7 32 352 46.33 352 64C352 81.67 337.7 96 320 96H296C238.1 96 187.8 128.4 162.1 176H288C305.7 176 320 190.3 320 208C320 225.7 305.7 240 288 240H144.2C144.1 242.6 144 245.3 144 248V264C144 266.7 144.1 269.4 144.2 272H288C305.7 272 320 286.3 320 304C320 321.7 305.7 336 288 336H162.1C187.8 383.6 238.1 416 296 416H320C337.7 416 352 430.3 352 448C352 465.7 337.7 480 320 480H296C201.1 480 121.9 419.9 92.29 336H64C46.33 336 32 321.7 32 304C32 286.3 46.33 272 64 272H80.15C80.05 269.3 80 266.7 80 264V248C80 245.3 80.05 242.7 80.15 240H64z" />
                        </svg>
                    </div>
                </div>
                <div class="w-full md:flex-1 md:pt-3">
                    <h3 class="mb-4 text-xl md:text-2xl leading-tight text-coolGray-900 font-bold">Valeur</h3>
                    <label class="block mb-2 text-xs text-gray-700 uppercase tracking-wide font-bold"></label>
                    <input
                        class="appearance-none block w-full py-3 px-4 mb-2 md:mb-0 leading-tight text-gray-700 bg-gray-200 focus:bg-white border border-gray-200 focus:border-gray-500 rounded focus:outline-none"
                        type="number" placeholder="Prix de l'objet">
                </div>
            </div>

            <div
                class="flex flex-wrap p-8 text-center md:text-left hover:bg-white rounded-md hover:shadow-xl transition duration-200">
                <div class="w-full md:w-auto mb-6 md:mb-0 md:pr-6">
                    <div class="inline-flex h-14 w-14 mx-auto items-center justify-center text-white bg-red-500 rounded-lg">
                        <svg width="21" height="21" viewBox="0 0 448 512" fill="white" xmlns="http://www.w3.org/2000/svg">
                            {{-- ! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --}}
                            <path
                                d="M256 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H256C273.7 32 288 46.33 288 64C288 81.67 273.7 96 256 96zM256 352H32C14.33 352 0 337.7 0 320C0 302.3 14.33 288 32 288H256C273.7 288 288 302.3 288 320C288 337.7 273.7 352 256 352zM0 192C0 174.3 14.33 160 32 160H416C433.7 160 448 174.3 448 192C448 209.7 433.7 224 416 224H32C14.33 224 0 209.7 0 192zM416 480H32C14.33 480 0 465.7 0 448C0 430.3 14.33 416 32 416H416C433.7 416 448 430.3 448 448C448 465.7 433.7 480 416 480z" />
                        </svg>
                    </div>
                </div>
                <div class="w-full md:flex-1 md:pt-3">
                    <h3 class="mb-4 text-xl md:text-2xl leading-tight text-coolGray-900 font-bold">Description</h3>
                    <label class="block mb-2 text-xs text-gray-700 uppercase tracking-wide font-bold"></label>
                    <textarea class="appearance-none block w-full py-3 px-4 leading-tight text-gray-700 bg-gray-200 focus:bg-white border border-gray-200 focus:border-gray-500 rounded focus:outline-none"
                        placeholder="Description de l'objet" rows="5"></textarea>
                </div>
            </div>

            <div class="my-12"></div>
            <hr>

            <div class="w-full md:flex-1 md:pt-3">
                <h3 class="mb-4 text-xl md:text-2xl leading-tight text-coolGray-900 font-bold">Photos</h3>
            </div>
            <div class="flex flex-wrap -mx-4">
                <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-12">
                    <div class="max-w-max mx-auto">
                        <h4 class="mb-2 text-3xl md:text-4xl leading-tight font-semibold">Macauley Herring</h4>
                        <img class="block mb-8" src="flex-ui-assets/images/teams/photo-employee1.png" alt="">
                        <span class="text-lg font-medium text-gray-500 line-clamp-2">CEO &amp; Founder CEO &amp; Founder CEO
                            &amp; FounderCEO &amp; Founder CEO &amp; Founder CEO &amp; CEO &amp; Founder Founder </span>
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-12">
                    <div class="max-w-max mx-auto">
                        <h4 class="mb-2 text-3xl md:text-4xl leading-tight font-semibold">Macauley Herring</h4>
                        <img class="block mb-8" src="flex-ui-assets/images/teams/photo-employee1.png" alt="">
                        <span class="text-lg font-medium text-gray-500 line-clamp-2">CEO &amp; Founder CEO &amp; Founder CEO
                            &amp; FounderCEO &amp; Founder CEO &amp; Founder CEO &amp; CEO &amp; Founder Founder </span>
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-12">
                    <div class="max-w-max mx-auto">
                        <h4 class="mb-2 text-3xl md:text-4xl leading-tight font-semibold">Macauley Herring</h4>
                        <img class="block mb-8" src="flex-ui-assets/images/teams/photo-employee1.png" alt="">
                        <span class="text-lg font-medium text-gray-500 line-clamp-2">CEO &amp; Founder CEO &amp; Founder CEO
                            &amp; FounderCEO &amp; Founder CEO &amp; Founder CEO &amp; CEO &amp; Founder Founder </span>
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-12">
                    <div class="max-w-max mx-auto">
                        <h4 class="mb-2 text-3xl md:text-4xl leading-tight font-semibold">Macauley Herring</h4>
                        <img class="block mb-8" src="flex-ui-assets/images/teams/photo-employee1.png" alt="">
                        <span class="text-lg font-medium text-gray-500 line-clamp-2">CEO &amp; Founder CEO &amp; Founder CEO
                            &amp; FounderCEO &amp; Founder CEO &amp; Founder CEO &amp; CEO &amp; Founder Founder </span>
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-12">
                    <div class="max-w-max mx-auto">
                        <h4 class="mb-2 text-3xl md:text-4xl leading-tight font-semibold">Macauley Herring</h4>
                        <img class="block mb-8" src="flex-ui-assets/images/teams/photo-employee1.png" alt="">
                        <span class="text-lg font-medium text-gray-500 line-clamp-2">CEO &amp; Founder CEO &amp; Founder CEO
                            &amp; FounderCEO &amp; Founder CEO &amp; Founder CEO &amp; CEO &amp; Founder Founder </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
