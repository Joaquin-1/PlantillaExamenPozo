<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-monografias>
                        <table class="table-auto">
                            <thead>
                                <th class="px-6 py-2 text-gray-500">
                                    Titulo
                                </th>
                                <th class="px-6 py-2 text-gray-500">
                                    Anyo
                                </th>
                                <th class="px-6 py-2 text-gray-500">
                                    autor
                                </th>

                            </thead>
                            <tbody>
                                {{-- {{ dd($monografia)}} --}}
                                        {{ $pruebas = $monografia->articulos[1]->with(['autores'])->get()}}
                                        @foreach ($pruebas as $prueba)
                                            {{$margaritas = $prueba->autores}}
                                            @foreach ($margaritas as $margarita)
                                                <tr>
                                                    <td class="px-6 py-2">{{ $monografia->titulo}}</td>
                                                    <td class="px-6 py-2">{{ $monografia->anyo}}</td>
                                                    {{-- {{dd($margarita)}} --}}
                                                    <td class="px-6 py-2">{{ $margarita->nombre}}</td>
                                                </tr>
                                            @endforeach
                                            {{-- <td class="px-6 py-2">{{ $pruebas->autores}}</td> --}}

                                        @endforeach
                                        {{-- <td class="px-6 py-2">{{ }}</td> --}}

                            </tbody>
                        </table>
                    </x-monografias>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
