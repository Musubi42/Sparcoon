@extends('app.app')

@section('content')
<section class="py-24 bg-white" style="background-image: url('flex-ui-assets/elements/pattern-white.svg'); background-position: center;">
  <div class="container px-4 mx-auto">
    <div class="max-w-4xl mx-auto mb-12 text-center">
      <span class="inline-block py-px px-2 mb-4 text-xs leading-5 text-red-500 bg-red-100 font-medium uppercase rounded-full shadow-sm">Vous êtes engagés !</span>
      <h3 class="mb-4 text-3xl md:text-4xl leading-tight text-coolGray-900 font-bold tracking-tighter">{{ auth()->user()->firstname }} voici vos lieux de travail</h3>
      <p class="text-lg md:text-xl text-coolGray-500 font-medium">Voici ci dessous la liste des vos lieux de travail. Merci de cliquer dessus afin d'accéder à la modification et suppression de ceux-ci</p>
    </div>
    <div class="max-w-3xl mx-auto">
      @forelse ($lieux as $lieu)
      <a class="group block mb-6" href="{{ route('lieux.edit', ['lieux' => $lieu]) }}">
        <div class="flex items-center justify-between flex-wrap p-10 bg-coolGray-50 group-hover:bg-coolGray-100 rounded-md shadow-md transition duration-200">
          <div class="w-full md:w-1/2 mb-2 md:mb-0">
            <h3 class="text-lg md:text-xl text-coolGray-800 group-hover:text-coolGray-900 font-semibold">{{ $lieu->name }}</h3>
          </div>
          <div class="w-full md:w-1/2 md:text-right">
            <div class="inline-flex items-center leading-6 text-red-500 group-hover:text-red-600 font-medium transition duration-200">
              <span class="mr-2">Éditer le lieu</span>
              <svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.71 10.71C13.801 10.6149 13.8724 10.5028 13.92 10.38C14.02 10.1365 14.02 9.86346 13.92 9.62C13.8724 9.49725 13.801 9.3851 13.71 9.29L10.71 6.29C10.5217 6.1017 10.2663 5.99591 10 5.99591C9.7337 5.99591 9.47831 6.1017 9.29 6.29C9.1017 6.4783 8.99591 6.7337 8.99591 7C8.99591 7.2663 9.1017 7.5217 9.29 7.71L10.59 9L7 9C6.73479 9 6.48043 9.10536 6.2929 9.29289C6.10536 9.48043 6 9.73478 6 10C6 10.2652 6.10536 10.5196 6.2929 10.7071C6.48043 10.8946 6.73479 11 7 11L10.59 11L9.29 12.29C9.19628 12.383 9.12188 12.4936 9.07111 12.6154C9.02034 12.7373 8.99421 12.868 8.99421 13C8.99421 13.132 9.02034 13.2627 9.07111 13.3846C9.12188 13.5064 9.19628 13.617 9.29 13.71C9.38297 13.8037 9.49357 13.8781 9.61543 13.9289C9.73729 13.9797 9.86799 14.0058 10 14.0058C10.132 14.0058 10.2627 13.9797 10.3846 13.9289C10.5064 13.8781 10.617 13.8037 10.71 13.71L13.71 10.71ZM20 10C20 8.02219 19.4135 6.08879 18.3147 4.4443C17.2159 2.79981 15.6541 1.51808 13.8268 0.761204C11.9996 0.00432792 9.98891 -0.193706 8.0491 0.192146C6.10929 0.577999 4.32746 1.53041 2.92894 2.92893C1.53041 4.32746 0.578004 6.10929 0.192152 8.0491C-0.1937 9.98891 0.00433294 11.9996 0.761209 13.8268C1.51809 15.6541 2.79981 17.2159 4.4443 18.3147C6.08879 19.4135 8.02219 20 10 20C12.6522 20 15.1957 18.9464 17.0711 17.0711C17.9997 16.1425 18.7363 15.0401 19.2388 13.8268C19.7413 12.6136 20 11.3132 20 10ZM2 10C2 8.41775 2.4692 6.87103 3.34825 5.55544C4.2273 4.23985 5.47673 3.21446 6.93854 2.60896C8.40035 2.00346 10.0089 1.84504 11.5607 2.15372C13.1126 2.4624 14.538 3.22433 15.6569 4.34315C16.7757 5.46197 17.5376 6.88743 17.8463 8.43928C18.155 9.99113 17.9965 11.5997 17.391 13.0615C16.7855 14.5233 15.7602 15.7727 14.4446 16.6518C13.129 17.5308 11.5823 18 10 18C7.87827 18 5.84344 17.1571 4.34315 15.6569C2.84286 14.1566 2 12.1217 2 10Z" fill="currentColor"></path>
              </svg>
            </div>
          </div>
        </div>
      </a>
      @empty
      <a class="group block mb-6" href="{{ route('lieux.create') }}">
        <div class="flex items-center justify-between flex-wrap p-10 bg-coolGray-50 group-hover:bg-coolGray-100 rounded-md shadow-md transition duration-200">
          <div class="w-full md:w-1/2 mb-2 md:mb-0">
            <h3 class="text-lg md:text-xl text-coolGray-800 group-hover:text-coolGray-900 font-semibold">Aucun lieux !</h3>
          </div>
          <div class="w-full md:w-1/2 md:text-right">
            <div class="inline-flex items-center leading-6 text-red-500 group-hover:text-red-600 font-medium transition duration-200">
              <span class="mr-2">Créer votre premier lieux</span>
              <svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.71 10.71C13.801 10.6149 13.8724 10.5028 13.92 10.38C14.02 10.1365 14.02 9.86346 13.92 9.62C13.8724 9.49725 13.801 9.3851 13.71 9.29L10.71 6.29C10.5217 6.1017 10.2663 5.99591 10 5.99591C9.7337 5.99591 9.47831 6.1017 9.29 6.29C9.1017 6.4783 8.99591 6.7337 8.99591 7C8.99591 7.2663 9.1017 7.5217 9.29 7.71L10.59 9L7 9C6.73479 9 6.48043 9.10536 6.2929 9.29289C6.10536 9.48043 6 9.73478 6 10C6 10.2652 6.10536 10.5196 6.2929 10.7071C6.48043 10.8946 6.73479 11 7 11L10.59 11L9.29 12.29C9.19628 12.383 9.12188 12.4936 9.07111 12.6154C9.02034 12.7373 8.99421 12.868 8.99421 13C8.99421 13.132 9.02034 13.2627 9.07111 13.3846C9.12188 13.5064 9.19628 13.617 9.29 13.71C9.38297 13.8037 9.49357 13.8781 9.61543 13.9289C9.73729 13.9797 9.86799 14.0058 10 14.0058C10.132 14.0058 10.2627 13.9797 10.3846 13.9289C10.5064 13.8781 10.617 13.8037 10.71 13.71L13.71 10.71ZM20 10C20 8.02219 19.4135 6.08879 18.3147 4.4443C17.2159 2.79981 15.6541 1.51808 13.8268 0.761204C11.9996 0.00432792 9.98891 -0.193706 8.0491 0.192146C6.10929 0.577999 4.32746 1.53041 2.92894 2.92893C1.53041 4.32746 0.578004 6.10929 0.192152 8.0491C-0.1937 9.98891 0.00433294 11.9996 0.761209 13.8268C1.51809 15.6541 2.79981 17.2159 4.4443 18.3147C6.08879 19.4135 8.02219 20 10 20C12.6522 20 15.1957 18.9464 17.0711 17.0711C17.9997 16.1425 18.7363 15.0401 19.2388 13.8268C19.7413 12.6136 20 11.3132 20 10ZM2 10C2 8.41775 2.4692 6.87103 3.34825 5.55544C4.2273 4.23985 5.47673 3.21446 6.93854 2.60896C8.40035 2.00346 10.0089 1.84504 11.5607 2.15372C13.1126 2.4624 14.538 3.22433 15.6569 4.34315C16.7757 5.46197 17.5376 6.88743 17.8463 8.43928C18.155 9.99113 17.9965 11.5997 17.391 13.0615C16.7855 14.5233 15.7602 15.7727 14.4446 16.6518C13.129 17.5308 11.5823 18 10 18C7.87827 18 5.84344 17.1571 4.34315 15.6569C2.84286 14.1566 2 12.1217 2 10Z" fill="currentColor"></path>
              </svg>
            </div>
          </div>
        </div>
      </a>
      @endforelse
    </div>
  </div>
  <a href="{{ route('lieux.create') }}" class="inline-block py-3 px-6 leading-none text-white hover:bg-indigo-600 rounded shadow bg-red-400 rounded-7xl items-center">Ajouter une entreprise</a>
</section> 
@endsection
