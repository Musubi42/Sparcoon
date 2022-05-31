@extends('app.app')

@section('title')
    Mon patrimoine
@endsection

@section('content')
    <section class="container px-4 mx-auto mb-10">
        <div class="text-center">
            <h3
                class="mb-10 mx-auto text-3xl md:text-4xl leading-tight text-coolGray-900 font-bold tracking-tighter max-w-5xl">
                Mon patrimoine</h3>
        </div>

        <div class="flex justify-between items-center flex-shrink-0">
            @can('object.create')
                <div class="w-full md:w-auto py-1 md:py-0 md:mr-6"><a
                        class="inline-block text-base md:text-lg leading-4 font-medium text-center focus:ring-2 border shadow-sm rounded-full py-3 px-3 text-white border-green-700 bg-green-700 hover:bg-green-800 focus:ring-green-600 whitespace-nowrap"
                        href="{{ route('objectEstates.create') }}">+ Ajouter</a></div>
            @endcan

            <input
                style="background: url({{ asset('storage/asset/image/icon/magnifying-glass.svg') }}) no-repeat 7px 7px;"
                class="appearance-none block py-3 px-4 mb-2 md:mb-0 leading-tight text-gray-700 bg-gray-200 focus:bg-white border border-gray-200 focus:border-gray-500 rounded focus:outline-none w-full mx-4"
                type="text" placeholder="Rechercher">
            <select
                class="appearance-none block py-3 px-4 leading-tight text-gray-700 bg-gray-200 focus:bg-white border border-gray-200 focus:border-gray-500 rounded focus:outline-none ml-5">
                <option>Trier</option>
                <option>Product 1</option>
                <option>Product 2</option>
                <option>Product 3</option>
            </select>
        </div>
    </section>

    <table class="border-collapse table-auto w-full text-sm">
        <thead class="bg-green-50">
            <tr>
                <th class="border-b font-medium p-4 pl-8 pb-3 text-center">Photo</th>
                <th class="border-b font-medium p-4 pb-3 text-center">Nom objet</th>
                <th class="border-b font-medium p-4 pb-3 text-center">Catégorie</th>
                <th class="border-b font-medium p-4 pb-3 text-center">Data d'achat</th>
                <th class="border-b font-medium p-4 pb-3 text-center">Consulter / Modifier</th>
                <th class="border-b font-medium p-4 pr-8 pb-3 text-center"><span class="flex justify-center">Supprimer</span></th>
            </tr>
        </thead>
        <tbody class="bg-white">
            @forelse ($objectEstates as $object)
                <tr class="">
                    <td class="w-1/6 p-2"><img src="placeholders/pictures/office.jpg" alt="" class="rounded shadow-md"
                            title="" style=""></td>
                    <td class="border-b p-2 text-center">{{ $object->name }}</td>
                    <td class="border-b p-2 text-center">{{ $object->categorie->name }}</td>
                    <td class="border-b p-2 text-center">{{ $object->date_acquisition }}</td>
                    <td class="border-b p-2 text-center">
                        <span class="flex justify-center">
                            <a href="{{ route('objectEstates.edit', $object) }}">
                                <button class="p-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-10 text-center">
                                        <path
                                            d="M279.6 160.4C282.4 160.1 285.2 160 288 160C341 160 384 202.1 384 256C384 309 341 352 288 352C234.1 352 192 309 192 256C192 253.2 192.1 250.4 192.4 247.6C201.7 252.1 212.5 256 224 256C259.3 256 288 227.3 288 192C288 180.5 284.1 169.7 279.6 160.4zM480.6 112.6C527.4 156 558.7 207.1 573.5 243.7C576.8 251.6 576.8 260.4 573.5 268.3C558.7 304 527.4 355.1 480.6 399.4C433.5 443.2 368.8 480 288 480C207.2 480 142.5 443.2 95.42 399.4C48.62 355.1 17.34 304 2.461 268.3C-.8205 260.4-.8205 251.6 2.461 243.7C17.34 207.1 48.62 156 95.42 112.6C142.5 68.84 207.2 32 288 32C368.8 32 433.5 68.84 480.6 112.6V112.6zM288 112C208.5 112 144 176.5 144 256C144 335.5 208.5 400 288 400C367.5 400 432 335.5 432 256C432 176.5 367.5 112 288 112z">
                                        </path>
                                    </svg>
                                </button>
                            </a>
                        </span>
                    </td>
                    <td class="border-b p-2 text-center">
                        <span class="flex justify-center">
                         
                            <form action="{{ route('objectEstates.destroy', ['objectEstate' => $object])}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="p-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-10 flex align-middle items-center">
                                        <path d="M362.7 19.32C387.7-5.678 428.3-5.678 453.3 19.32L492.7 58.75C517.7 83.74 517.7 124.3 492.7 149.3L444.3 197.7L314.3 67.72L362.7 19.32zM421.7 220.3L188.5 453.4C178.1 463.8 165.2 471.5 151.1 475.6L30.77 511C22.35 513.5 13.24 511.2 7.03 504.1C.8198 498.8-1.502 489.7 .976 481.2L36.37 360.9C40.53 346.8 48.16 333.9 58.57 323.5L291.7 90.34L421.7 220.3z"></path>
                                    </svg>
                                </button>
                            </form>

                        </span>
                    </td>
                </tr>
            @empty
            @endforelse


        </tbody>
    </table>

    {{-- Modal --}}
@endsection
