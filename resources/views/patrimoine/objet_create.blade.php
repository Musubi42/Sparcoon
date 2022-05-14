@extends('app.app')

@section('title')
    Créer objet
@endsection

@section('content')
    <section class="container px-4 mx-auto">
        <div class="text-center">
            <h1 class="mb-10 mx-auto text-3xl md:text-4xl leading-tight text-coolGray-900 font-bold tracking-tighter max-w-5xl">
                Créer objet
            </h1>
        </div>
        <div class="container px-4 mx-auto">
            <form action="{{ route('objectEstates.store') }}" method="post">
                @csrf
            <div class="flex flex-wrap p-8 text-center md:text-left hover:bg-white rounded-md hover:shadow-xl transition duration-200">
                <div class="w-full md:w-auto mb-6 md:mb-0 md:pr-6">
                    <div class="inline-flex h-14 w-14 mx-auto items-center justify-center text-white bg-green-700 rounded-lg">
                        <svg width="21" height="21" viewBox="0 0 640 512" fill="white" xmlns="http://www.w3.org/2000/svg">
                            {{-- Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --}}
                            <path d="M192 160C192 177.7 177.7 192 160 192C142.3 192 128 177.7 128 160V128C128 74.98 170.1 32 224 32C277 32 320 74.98 320 128V135.8C320 156.6 318.8 177.4 316.4 198.1L438.8 161.3C450.2 157.9 462.6 161.1 470.1 169.7C479.3 178.3 482.1 190.8 478.4 202.1L460.4 255.1H544C561.7 255.1 576 270.3 576 287.1C576 305.7 561.7 319.1 544 319.1H416C405.7 319.1 396.1 315.1 390 306.7C384 298.4 382.4 287.6 385.6 277.9L398.1 240.4L303.7 268.7C291.9 321.5 272.2 372.2 245.3 419.2L231.4 443.5C218.5 466.1 194.5 480 168.5 480C128.5 480 95.1 447.5 95.1 407.5V335.6C95.1 293.2 123.8 255.8 164.4 243.7L248.8 218.3C253.6 191.1 255.1 163.5 255.1 135.8V128C255.1 110.3 241.7 96 223.1 96C206.3 96 191.1 110.3 191.1 128L192 160zM160 335.6V407.5C160 412.2 163.8 416 168.5 416C171.5 416 174.4 414.4 175.9 411.7L189.8 387.4C207.3 356.6 221.4 324.1 231.8 290.3L182.8 304.1C169.3 309 160 321.5 160 335.6V335.6zM24 368H64V407.5C64 410.4 64.11 413.2 64.34 416H24C10.75 416 0 405.3 0 392C0 378.7 10.75 368 24 368zM616 416H283.5C291.7 400.3 299.2 384.3 305.9 368H616C629.3 368 640 378.7 640 392C640 405.3 629.3 416 616 416z" />
                        </svg>
                    </div>
                </div>
                <div class="w-full md:flex-1 md:pt-3">
                    <h3 class="mb-4 text-xl md:text-2xl leading-tight text-coolGray-900 font-bold">Nom de l'objet</h3>
                    <label class="block mb-2 text-xs text-gray-700 uppercase tracking-wide font-bold"></label>
                    <input name="name" class="appearance-none block w-full py-3 px-4 mb-2 md:mb-0 leading-tight text-gray-700 bg-gray-200 focus:bg-white border border-gray-200 focus:border-gray-500 rounded focus:outline-none" type="text" placeholder="Nom de l'objet" required="">
                </div>
            </div>
            <input type="hidden" name="patrimoine_id" value="{{ auth()->user()->patrimoine->id }}">
            <div
                class="flex flex-wrap p-8 text-center md:text-left hover:bg-white rounded-md hover:shadow-xl transition duration-200">
                <div class="w-full md:w-auto mb-6 md:mb-0 md:pr-6">
                    <div
                        class="inline-flex h-14 w-14 mx-auto items-center justify-center text-white bg-green-700 rounded-lg">
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
                        class="appearance-none block py-3 px-4 leading-tight text-gray-700 bg-gray-200 focus:bg-white border border-gray-200 focus:border-gray-500 rounded focus:outline-none" name='categorie_id'>
                        
                        @forelse ($categories as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                        @empty
                        <option>Sélectionner une catégorie</option>
                        @endforelse
                    </select>
                </div>
            </div>

            <div
                class="flex flex-wrap p-8 text-center md:text-left hover:bg-white rounded-md hover:shadow-xl transition duration-200">
                <div class="w-full md:w-auto mb-6 md:mb-0 md:pr-6">
                    <div
                        class="inline-flex h-14 w-14 mx-auto items-center justify-center text-white bg-green-700 rounded-lg">
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
                        type="date" id="buyDate" name="date_acquisition">
                </div>
            </div>
            <div
                class="flex flex-wrap p-8 text-center md:text-left hover:bg-white rounded-md hover:shadow-xl transition duration-200">
                <div class="w-full md:w-auto mb-6 md:mb-0 md:pr-6">
                    <div
                        class="inline-flex h-14 w-14 mx-auto items-center justify-center text-white bg-green-700 rounded-lg">
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
                        name="value" step="0.01"
                        class="appearance-none block w-full py-3 px-4 mb-2 md:mb-0 leading-tight text-gray-700 bg-gray-200 focus:bg-white border border-gray-200 focus:border-gray-500 rounded focus:outline-none"
                        type="number" placeholder="Prix de l'objet">
                </div>
            </div>

            <div
                class="flex flex-wrap p-8 text-center md:text-left hover:bg-white rounded-md hover:shadow-xl transition duration-200">
                <div class="w-full md:w-auto mb-6 md:mb-0 md:pr-6">
                    <div
                        class="inline-flex h-14 w-14 mx-auto items-center justify-center text-white bg-green-700 rounded-lg">
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
                    <textarea name="description"class="appearance-none block w-full py-3 px-4 leading-tight text-gray-700 bg-gray-200 focus:bg-white border border-gray-200 focus:border-gray-500 rounded focus:outline-none" placeholder="Description de l'objet" rows="5"></textarea>
                </div>
            </div>

            <button type="submit">Enregistrer</button>
        </form>
            <div class="my-12"></div>
            <hr>

            <section>
                <div class="w-full md:flex-1 md:pt-3">
                    <h3 class="mb-4 text-xl md:text-2xl leading-tight text-coolGray-900 font-bold">Photos</h3>
                </div>

                <div class="flex flex-row">
                    <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-12">
                        <div class="max-w-max mx-auto">
                            <h4 class="mb-2 text-3xl md:text-4xl leading-tight font-semibold">Macauley Herring</h4>
                            <img class="block mb-8" src="flex-ui-assets/images/teams/photo-employee1.png" alt="">
                            <span class="text-lg font-medium text-gray-500 line-clamp-2">CEO &amp; Founder CEO &amp; Founder
                                CEO
                                &amp; FounderCEO &amp; Founder CEO &amp; Founder CEO &amp; CEO &amp; Founder Founder </span>
                        </div>
                    </div>

                    <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-12">
                        <div class="max-w-max mx-auto">
                            <h4 class="mb-2 text-3xl md:text-4xl leading-tight font-semibold">Macauley Herring</h4>
                            <img class="block mb-8" src="flex-ui-assets/images/teams/photo-employee1.png" alt="">
                            <p class="text-lg font-medium text-gray-500 line-clamp-2">CEO &amp; Founder CEO &amp; Founder
                                CEO
                                &amp; FounderCEO &amp; Founder CEO &amp; Founder CEO &amp; CEO &amp; Founder FounderCEO
                                &amp;
                                Founder CEO &amp; Founder CEO
                                &amp; FounderCEO &amp; Founder CEO &amp; Founder CEO &amp; CEO &amp; Founder Founder </p>
                        </div>
                    </div>

                    <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-12">
                        <div
                            class="flex p-6 items-center justify-center border-dashed border-2 border-coolGray-200 rounded-lg text-coolGray-300 h-full">
                            <div class="max-w-max text-center">
                                <button type="button" data-modal-toggle="defaultModal">
                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                        class="inline-block mb-4 text-red-500 hover:text-red-600"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.6127 10.28L14.666 7.21336V20C14.666 20.3536 14.8065 20.6928 15.0565 20.9428C15.3066 21.1929 15.6457 21.3334 15.9993 21.3334C16.353 21.3334 16.6921 21.1929 16.9422 20.9428C17.1922 20.6928 17.3327 20.3536 17.3327 20V7.21336L20.386 10.28C20.51 10.405 20.6574 10.5042 20.8199 10.5719C20.9824 10.6396 21.1567 10.6744 21.3327 10.6744C21.5087 10.6744 21.683 10.6396 21.8455 10.5719C22.0079 10.5042 22.1554 10.405 22.2793 10.28C22.4043 10.1561 22.5035 10.0086 22.5712 9.84613C22.6389 9.68365 22.6737 9.50937 22.6737 9.33336C22.6737 9.15734 22.6389 8.98307 22.5712 8.82059C22.5035 8.65811 22.4043 8.51064 22.2793 8.38669L16.946 3.05336C16.8192 2.93197 16.6697 2.83682 16.506 2.77336C16.1814 2.64 15.8173 2.64 15.4927 2.77336C15.329 2.83682 15.1795 2.93197 15.0527 3.05336L9.71935 8.38669C9.59503 8.51101 9.49642 8.6586 9.42914 8.82103C9.36186 8.98346 9.32723 9.15755 9.32723 9.33336C9.32723 9.50917 9.36186 9.68326 9.42914 9.84569C9.49642 10.0081 9.59503 10.1557 9.71935 10.28C9.84367 10.4043 9.99125 10.503 10.1537 10.5702C10.3161 10.6375 10.4902 10.6721 10.666 10.6721C10.8418 10.6721 11.0159 10.6375 11.1783 10.5702C11.3408 10.503 11.4884 10.4043 11.6127 10.28ZM27.9993 16C27.6457 16 27.3066 16.1405 27.0565 16.3905C26.8065 16.6406 26.666 16.9797 26.666 17.3334V25.3334C26.666 25.687 26.5255 26.0261 26.2755 26.2762C26.0254 26.5262 25.6863 26.6667 25.3327 26.6667H6.66602C6.31239 26.6667 5.97326 26.5262 5.72321 26.2762C5.47316 26.0261 5.33268 25.687 5.33268 25.3334V17.3334C5.33268 16.9797 5.19221 16.6406 4.94216 16.3905C4.69211 16.1405 4.35297 16 3.99935 16C3.64573 16 3.30659 16.1405 3.05654 16.3905C2.80649 16.6406 2.66602 16.9797 2.66602 17.3334V25.3334C2.66602 26.3942 3.08744 27.4116 3.83759 28.1618C4.58773 28.9119 5.60515 29.3334 6.66602 29.3334H25.3327C26.3935 29.3334 27.411 28.9119 28.1611 28.1618C28.9113 27.4116 29.3327 26.3942 29.3327 25.3334V17.3334C29.3327 16.9797 29.1922 16.6406 28.9422 16.3905C28.6921 16.1405 28.353 16 27.9993 16Z"
                                            fill="currentColor"></path>
                                    </svg>
                                    <p class="mb-2 text-green-400 hover:text-green-500">Ajouter une nouvelle
                                        photo
                                    </p>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div id="defaultModal" tabindex="-1" aria-hidden="true"
                    class="hidden overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
                    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">

                        <div class="relative max-w-4xl p-6 sm:p-10 mx-auto bg-white rounded-lg shadow dark:bg-gray-700">
                            <form action="">
                                <div class="mb-8">
                                    <label class="block mb-2 text-coolGray-800 font-medium leading-6" for="">Nom de la
                                        photo</label>
                                    <input
                                        class="block h-12 w-full py-2 px-3 appearance-none border border-coolGray-200 rounded-lg shadow-md text-coolGray-300 leading-6 placeholder-coolGray-300 focus:outline-none focus:shadow-outline focus:ring-2 focus:ring-red-500 focus:ring-opacity-50"
                                        type="text" placeholder="Product Name">
                                </div>
                                <div class="mb-8">
                                    <label class="block mb-2 text-coolGray-800 font-medium leading-6"
                                        for="">Description</label>
                                    <textarea class="block h-40 w-full py-2 px-3 appearance-none border border-coolGray-200 rounded-lg shadow-md text-coolGray-300 leading-6 placeholder-coolGray-300 focus:outline-none focus:shadow-outline focus:ring-2 focus:ring-red-500 focus:ring-opacity-50 resize-none"
                                        type="text" placeholder="Product description"></textarea>
                                </div>
                                <div class="mb-8">
                                    <label class="block mb-2 text-coolGray-800 font-medium leading-6" for="">Faites glisser
                                        la
                                        photo</label>
                                    <div
                                        class="flex p-6 items-center justify-center border-dashed border-2 h-52 border-coolGray-200 rounded-lg text-coolGray-300">
                                        <div class="max-w-max text-center">
                                            <a class="inline-block mb-4 text-red-500 hover:text-red-600" href="#">
                                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.6127 10.28L14.666 7.21336V20C14.666 20.3536 14.8065 20.6928 15.0565 20.9428C15.3066 21.1929 15.6457 21.3334 15.9993 21.3334C16.353 21.3334 16.6921 21.1929 16.9422 20.9428C17.1922 20.6928 17.3327 20.3536 17.3327 20V7.21336L20.386 10.28C20.51 10.405 20.6574 10.5042 20.8199 10.5719C20.9824 10.6396 21.1567 10.6744 21.3327 10.6744C21.5087 10.6744 21.683 10.6396 21.8455 10.5719C22.0079 10.5042 22.1554 10.405 22.2793 10.28C22.4043 10.1561 22.5035 10.0086 22.5712 9.84613C22.6389 9.68365 22.6737 9.50937 22.6737 9.33336C22.6737 9.15734 22.6389 8.98307 22.5712 8.82059C22.5035 8.65811 22.4043 8.51064 22.2793 8.38669L16.946 3.05336C16.8192 2.93197 16.6697 2.83682 16.506 2.77336C16.1814 2.64 15.8173 2.64 15.4927 2.77336C15.329 2.83682 15.1795 2.93197 15.0527 3.05336L9.71935 8.38669C9.59503 8.51101 9.49642 8.6586 9.42914 8.82103C9.36186 8.98346 9.32723 9.15755 9.32723 9.33336C9.32723 9.50917 9.36186 9.68326 9.42914 9.84569C9.49642 10.0081 9.59503 10.1557 9.71935 10.28C9.84367 10.4043 9.99125 10.503 10.1537 10.5702C10.3161 10.6375 10.4902 10.6721 10.666 10.6721C10.8418 10.6721 11.0159 10.6375 11.1783 10.5702C11.3408 10.503 11.4884 10.4043 11.6127 10.28ZM27.9993 16C27.6457 16 27.3066 16.1405 27.0565 16.3905C26.8065 16.6406 26.666 16.9797 26.666 17.3334V25.3334C26.666 25.687 26.5255 26.0261 26.2755 26.2762C26.0254 26.5262 25.6863 26.6667 25.3327 26.6667H6.66602C6.31239 26.6667 5.97326 26.5262 5.72321 26.2762C5.47316 26.0261 5.33268 25.687 5.33268 25.3334V17.3334C5.33268 16.9797 5.19221 16.6406 4.94216 16.3905C4.69211 16.1405 4.35297 16 3.99935 16C3.64573 16 3.30659 16.1405 3.05654 16.3905C2.80649 16.6406 2.66602 16.9797 2.66602 17.3334V25.3334C2.66602 26.3942 3.08744 27.4116 3.83759 28.1618C4.58773 28.9119 5.60515 29.3334 6.66602 29.3334H25.3327C26.3935 29.3334 27.411 28.9119 28.1611 28.1618C28.9113 27.4116 29.3327 26.3942 29.3327 25.3334V17.3334C29.3327 16.9797 29.1922 16.6406 28.9422 16.3905C28.6921 16.1405 28.353 16 27.9993 16Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </a>
                                            <p class="mb-2">
                                                <span class="text-coolGray-500">Glissez et déposez une photo, ou</span>
                                                <a class="text-red-500 hover:text-red-600" href="#">Naviguer</a>
                                            </p>
                                            <span class="text-sm text-coolGray-300 font-medium">Format de photo accepté
                                                (png, jpg,
                                                gif)</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-8">
                                    <label class="block mb-2 text-coolGray-800 font-medium leading-6" for="">Téléchargement
                                        de la
                                        photo</label>
                                    <div class="p-6 mb-6 bg-white border border-coolGray-200 rounded-md shadow-md">
                                        <div class="flex mb-3 flex-wrap items-center justify-between">
                                            <p class="flex w-full sm:w-auto mb-1 sm:mb-0 items-center">
                                                <svg class="text-red-500" width="16" height="20" viewBox="0 0 16 20"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M16 6.94C15.9896 6.84813 15.9695 6.75763 15.94 6.67V6.58C15.8919 6.47718 15.8278 6.38267 15.75 6.3V6.3L9.75 0.3C9.66734 0.222216 9.57282 0.158081 9.47 0.11H9.38C9.27841 0.0517412 9.16622 0.0143442 9.05 0H3C2.20435 0 1.44129 0.316071 0.87868 0.87868C0.316071 1.44129 0 2.20435 0 3V17C0 17.7956 0.316071 18.5587 0.87868 19.1213C1.44129 19.6839 2.20435 20 3 20H13C13.7956 20 14.5587 19.6839 15.1213 19.1213C15.6839 18.5587 16 17.7956 16 17V7C16 7 16 7 16 6.94ZM10 3.41L12.59 6H11C10.7348 6 10.4804 5.89464 10.2929 5.70711C10.1054 5.51957 10 5.26522 10 5V3.41ZM14 17C14 17.2652 13.8946 17.5196 13.7071 17.7071C13.5196 17.8946 13.2652 18 13 18H3C2.73478 18 2.48043 17.8946 2.29289 17.7071C2.10536 17.5196 2 17.2652 2 17V3C2 2.73478 2.10536 2.48043 2.29289 2.29289C2.48043 2.10536 2.73478 2 3 2H8V5C8 5.79565 8.31607 6.55871 8.87868 7.12132C9.44129 7.68393 10.2044 8 11 8H14V17Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                                <span class="ml-2 text-coolGray-800 font-medium">Photo.jpg</span>
                                            </p>
                                            <span class="text-coolGray-300">1.5 MB of 3.6 MB</span>
                                        </div>
                                        <div class="relative w-full h-2 bg-darkCoolGray-100 rounded-full overflow-hidden">
                                            <div class="absolute top-0 bottom-0 left-0 w-3/12 bg-red-500 rounded-full">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <a class="inline-block py-3 px-7 w-full text-base text-red-50 font-medium text-center leading-6 bg-red-500 hover:bg-red-600 focus:ring-2 focus:ring-red-500 focus:ring-opacity-50 rounded-md shadow-sm"
                                    href="#">Ajouter la photo</a>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        @endsection
