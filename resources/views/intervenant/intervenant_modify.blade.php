@extends('app.app')

@section('title')
    Mes intervenants
@endsection

@section('content')
    <section class="container px-4 mx-auto mb-10">
        <div class="text-center">
            <h3
                class="mb-10 mx-auto text-3xl md:text-4xl leading-tight text-coolGray-900 font-bold tracking-tighter max-w-5xl">
                Mes intervenants</h3>
        </div>

        <div class="flex justify-between items-center flex-shrink-0">
            <input
                style="background: url({{ asset('storage/asset/image/icon/magnifying-glass.svg') }}) no-repeat; background-size: 24px 24px; background-position: left center; background-position-x: 10px; padding-left: 42px; "
                class="appearance-none block py-3 px-4 mb-2 md:mb-0 leading-tight text-gray-700 bg-gray-200 focus:bg-white border border-gray-200 focus:border-gray-500 rounded focus:outline-none w-full mx-4"
                type="text" placeholder="Rechercher un intervenant">
        </div>
    </section>

    <table class="border-collapse table-auto w-full text-sm">
        <thead class="bg-green-50">
            <tr>
                <th class="border-b font-medium p-4 pl-8 pb-3 text-center">Nom</th>
                <th class="border-b font-medium p-4 pb-3 text-center">Prénom</th>
                <th class="border-b font-medium p-4 pb-3 text-center">Rôle</th>
                <th class="border-b font-medium p-4 pb-3 text-center">Description</th>
                <th class="border-b font-medium p-4 pb-3 text-center">Consulter</th>
            </tr>
        </thead>
        <tbody class="bg-white">
            <tr class="">
                <td class="w-1/6 p-2 text-center">Jean</td>
                <td class="border-b p-2 text-center">Luc</td>
                <td class="border-b p-2 text-center">Kiné</td>
                <td class="border-b p-2 text-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, quae
                    facilis labore ullam consequuntur natus temporibus recusandae quisquam esse est? Lorem ipsum dolor sit
                    amet, consectetur adipisicing elit. Veniam, nemo.</td>
                <td class="border-b p-2 text-center"><span class="flex justify-center"><button class="p-2"
                            onclick="window.location.href='{{ route('objet_show') }}'"><svg
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-10 text-center">
                                <path
                                    d="M279.6 160.4C282.4 160.1 285.2 160 288 160C341 160 384 202.1 384 256C384 309 341 352 288 352C234.1 352 192 309 192 256C192 253.2 192.1 250.4 192.4 247.6C201.7 252.1 212.5 256 224 256C259.3 256 288 227.3 288 192C288 180.5 284.1 169.7 279.6 160.4zM480.6 112.6C527.4 156 558.7 207.1 573.5 243.7C576.8 251.6 576.8 260.4 573.5 268.3C558.7 304 527.4 355.1 480.6 399.4C433.5 443.2 368.8 480 288 480C207.2 480 142.5 443.2 95.42 399.4C48.62 355.1 17.34 304 2.461 268.3C-.8205 260.4-.8205 251.6 2.461 243.7C17.34 207.1 48.62 156 95.42 112.6C142.5 68.84 207.2 32 288 32C368.8 32 433.5 68.84 480.6 112.6V112.6zM288 112C208.5 112 144 176.5 144 256C144 335.5 208.5 400 288 400C367.5 400 432 335.5 432 256C432 176.5 367.5 112 288 112z">
                                </path>
                            </svg></button></span></td>

            </tr>
        </tbody>
    </table>

    {{-- Modal --}}
    <div id="modal-delete" tabindex="-1"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full justify-center items-center"
        aria-hidden="true">
        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button"
                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                    data-modal-toggle="popup-modal">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div class="p-6 text-center">
                    <svg class="mx-auto mb-4 w-14 h-14 text-gray-400 dark:text-gray-200" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Voulez-vous supprimer cet objet ?
                    </h3>
                    <button data-modal-toggle="popup-modal" type="button"
                        class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                        Oui, j'en suis sûr
                    </button>
                    <button data-modal-toggle="popup-modal" type="button"
                        class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Non,
                        annuler</button>
                </div>
            </div>
        </div>
    </div>
@endsection
