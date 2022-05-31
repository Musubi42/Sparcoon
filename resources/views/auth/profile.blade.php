
@extends('app.app')

@section('title')
    {{ $profile->user->firstname.' '.$profile->user->lastname }}

   
@endsection

@section('content')
    <section class="container px-4 mx-auto">

        <div class="container px-4 mx-auto">
            <div
                class="flex flex-wrap p-8 text-center md:text-left hover:bg-white rounded-md hover:shadow-xl transition duration-200">
                <div class="w-full md:w-auto mb-6 md:mb-0 md:pr-6">
                    <div class="inline-flex h-14 w-14 mx-auto items-center justify-center text-white bg-red-500 rounded-lg">
                        <svg width="21" height="21" viewBox="0 0 24 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17 18.63H5C4.20435 18.63 3.44129 18.3139 2.87868 17.7513C2.31607 17.1887 2 16.4257 2 15.63V7.63C2 7.36479 1.89464 7.11043 1.70711 6.9229C1.51957 6.73536 1.26522 6.63 1 6.63C0.734784 6.63 0.48043 6.73536 0.292893 6.9229C0.105357 7.11043 0 7.36479 0 7.63L0 15.63C0 16.9561 0.526784 18.2279 1.46447 19.1655C2.40215 20.1032 3.67392 20.63 5 20.63H17C17.2652 20.63 17.5196 20.5246 17.7071 20.3371C17.8946 20.1496 18 19.8952 18 19.63C18 19.3648 17.8946 19.1104 17.7071 18.9229C17.5196 18.7354 17.2652 18.63 17 18.63ZM21 0.630005H7C6.20435 0.630005 5.44129 0.946075 4.87868 1.50868C4.31607 2.07129 4 2.83436 4 3.63V13.63C4 14.4257 4.31607 15.1887 4.87868 15.7513C5.44129 16.3139 6.20435 16.63 7 16.63H21C21.7956 16.63 22.5587 16.3139 23.1213 15.7513C23.6839 15.1887 24 14.4257 24 13.63V3.63C24 2.83436 23.6839 2.07129 23.1213 1.50868C22.5587 0.946075 21.7956 0.630005 21 0.630005ZM20.59 2.63L14.71 8.51C14.617 8.60373 14.5064 8.67813 14.3846 8.7289C14.2627 8.77966 14.132 8.8058 14 8.8058C13.868 8.8058 13.7373 8.77966 13.6154 8.7289C13.4936 8.67813 13.383 8.60373 13.29 8.51L7.41 2.63H20.59ZM22 13.63C22 13.8952 21.8946 14.1496 21.7071 14.3371C21.5196 14.5246 21.2652 14.63 21 14.63H7C6.73478 14.63 6.48043 14.5246 6.29289 14.3371C6.10536 14.1496 6 13.8952 6 13.63V4L11.88 9.88C12.4425 10.4418 13.205 10.7574 14 10.7574C14.795 10.7574 15.5575 10.4418 16.12 9.88L22 4V13.63Z"
                                fill="currentColor"></path>
                        </svg>
                    </div>
                </div>
                <div class="w-full md:flex-1 md:pt-3">
                    <h3 class="mb-4 text-xl md:text-2xl leading-tight text-coolGray-900 font-bold">Nom</h3>
                    <label class="block mb-2 text-xs text-gray-700 uppercase tracking-wide font-bold"></label>
                    <span class="appearance-none block w-full py-3 px-4 mb-2 md:mb-0 leading-tight text-gray-700"
                        id="firstName">{{ $profile->user->firstname }}</span>
                </div>
            </div>

            <div
                class="flex flex-wrap p-8 text-center md:text-left hover:bg-white rounded-md hover:shadow-xl transition duration-200">
                <div class="w-full md:w-auto mb-6 md:mb-0 md:pr-6">
                    <div class="inline-flex h-14 w-14 mx-auto items-center justify-center text-white bg-red-500 rounded-lg">
                        <svg width="21" height="21" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M5 18H9.24C9.37161 18.0008 9.50207 17.9755 9.62391 17.9258C9.74574 17.876 9.85656 17.8027 9.95 17.71L16.87 10.78L19.71 8C19.8037 7.90704 19.8781 7.79644 19.9289 7.67458C19.9797 7.55272 20.0058 7.42201 20.0058 7.29C20.0058 7.15799 19.9797 7.02728 19.9289 6.90542C19.8781 6.78356 19.8037 6.67296 19.71 6.58L15.47 2.29C15.377 2.19627 15.2664 2.12188 15.1446 2.07111C15.0227 2.02034 14.892 1.9942 14.76 1.9942C14.628 1.9942 14.4973 2.02034 14.3754 2.07111C14.2536 2.12188 14.143 2.19627 14.05 2.29L11.23 5.12L4.29 12.05C4.19732 12.1434 4.12399 12.2543 4.07423 12.3761C4.02446 12.4979 3.99924 12.6284 4 12.76V17C4 17.2652 4.10536 17.5196 4.29289 17.7071C4.48043 17.8946 4.73478 18 5 18ZM14.76 4.41L17.59 7.24L16.17 8.66L13.34 5.83L14.76 4.41ZM6 13.17L11.93 7.24L14.76 10.07L8.83 16H6V13.17ZM21 20H3C2.73478 20 2.48043 20.1054 2.29289 20.2929C2.10536 20.4804 2 20.7348 2 21C2 21.2652 2.10536 21.5196 2.29289 21.7071C2.48043 21.8946 2.73478 22 3 22H21C21.2652 22 21.5196 21.8946 21.7071 21.7071C21.8946 21.5196 22 21.2652 22 21C22 20.7348 21.8946 20.4804 21.7071 20.2929C21.5196 20.1054 21.2652 20 21 20Z"
                                fill="currentColor"></path>
                        </svg>
                    </div>
                </div>
                <div class="w-full md:flex-1 md:pt-3">
                    <h3 class="mb-4 text-xl md:text-2xl leading-tight text-coolGray-900 font-bold">Prénom</h3>
                    <span class="appearance-none block w-full py-3 px-4 mb-2 md:mb-0 leading-tight text-gray-700"
                        id="lastName">{{ $profile->user->lastname }}</span>
                </div>
            </div>

            <div
                class="flex flex-wrap p-8 text-center md:text-left hover:bg-white rounded-md hover:shadow-xl transition duration-200">
                <div class="w-full md:w-auto mb-6 md:mb-0 md:pr-6">
                    <div class="inline-flex h-14 w-14 mx-auto items-center justify-center text-white bg-red-500 rounded-lg">
                        <svg width="21" height="21" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10 13H3C2.73478 13 2.48043 13.1054 2.29289 13.2929C2.10536 13.4804 2 13.7348 2 14V21C2 21.2652 2.10536 21.5196 2.29289 21.7071C2.48043 21.8946 2.73478 22 3 22H10C10.2652 22 10.5196 21.8946 10.7071 21.7071C10.8946 21.5196 11 21.2652 11 21V14C11 13.7348 10.8946 13.4804 10.7071 13.2929C10.5196 13.1054 10.2652 13 10 13ZM9 20H4V15H9V20ZM21 2H14C13.7348 2 13.4804 2.10536 13.2929 2.29289C13.1054 2.48043 13 2.73478 13 3V10C13 10.2652 13.1054 10.5196 13.2929 10.7071C13.4804 10.8946 13.7348 11 14 11H21C21.2652 11 21.5196 10.8946 21.7071 10.7071C21.8946 10.5196 22 10.2652 22 10V3C22 2.73478 21.8946 2.48043 21.7071 2.29289C21.5196 2.10536 21.2652 2 21 2V2ZM20 9H15V4H20V9ZM21 13H14C13.7348 13 13.4804 13.1054 13.2929 13.2929C13.1054 13.4804 13 13.7348 13 14V21C13 21.2652 13.1054 21.5196 13.2929 21.7071C13.4804 21.8946 13.7348 22 14 22H21C21.2652 22 21.5196 21.8946 21.7071 21.7071C21.8946 21.5196 22 21.2652 22 21V14C22 13.7348 21.8946 13.4804 21.7071 13.2929C21.5196 13.1054 21.2652 13 21 13ZM20 20H15V15H20V20ZM10 2H3C2.73478 2 2.48043 2.10536 2.29289 2.29289C2.10536 2.48043 2 2.73478 2 3V10C2 10.2652 2.10536 10.5196 2.29289 10.7071C2.48043 10.8946 2.73478 11 3 11H10C10.2652 11 10.5196 10.8946 10.7071 10.7071C10.8946 10.5196 11 10.2652 11 10V3C11 2.73478 10.8946 2.48043 10.7071 2.29289C10.5196 2.10536 10.2652 2 10 2V2ZM9 9H4V4H9V9Z"
                                fill="currentColor"></path>
                        </svg>
                    </div>
                </div>
                <form action="{{ route('profile.update', ["userId" => auth()->user()->id]) }}" method="post">
                    @method("PUT")
                    @csrf
                    <div class="w-full md:flex-1 md:pt-3">
                        <h3 class="mb-4 text-xl md:text-2xl leading-tight text-coolGray-900 font-bold">Description</h3>
                        <label class="block mb-2 text-xs text-gray-700 uppercase tracking-wide font-bold"></label>
                        <textarea class="appearance-none block w-full py-3 px-4 leading-tight text-gray-700 bg-gray-200 focus:bg-white border border-gray-200 focus:border-gray-500 rounded focus:outline-none"
                        rows="5">  {{ $profile->bio }}</textarea>
                    </div>
                    <button> Modifier la Description</button>
                </form>
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
                        <img class="block mb-8" src="{{ $profile->avatar }}" alt="Photo de {{ $profile->user->firstname.' '.$profile->user->lastname  }}">
                        <span class="text-lg font-medium text-gray-500 line-clamp-2">CEO &amp; Founder CEO &amp; Founder CEO
                            &amp; FounderCEO &amp; Founder CEO &amp; Founder CEO &amp; CEO &amp; Founder Founder </span>
                    </div>
                </div>

                <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-12">
                    <div
                        class="flex p-6 items-center justify-center border-dashed border-2 border-coolGray-200 rounded-lg text-coolGray-300 h-full">
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
                                <a class="text-green-400 hover:text-green-500" href="#">Ajouter une nouvelle photo</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <form action="{{ route('logout') }}" method="post">
        @csrf
        <button class="bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 border-b-4 border-red-700 hover:border-red-500 rounded">
            Déconnexion
          </button>
    </form>
@endsection
