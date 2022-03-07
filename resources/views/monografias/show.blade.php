<x-monografias>
    <table class="table-auto">
        <thead>
            <th class="px-6 py-2 text-gray-500">
                Titulo
            </th>
            <th class="px-6 py-2 text-gray-500">
                Año
            </th>
            <th class="px-6 py-2 text-gray-500">
                Numero de Paginas
            </th>
        </thead>
        <tbody>
            @foreach ($monografia->articulos as $articulo)
                <tr>
                    <td class="px-6 py-2">{{ $articulo->titulo }}</td>
                    <td class="px-6 py-2">{{ $articulo->anyo }}</td>
                    <td class="px-6 py-2">{{ $articulo->num_paginas }}</td>

                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="bg-purple-300 px-6 py-2 mt-4 rounded">
        <h1>Total de páginas</h1>
        <td class="">{{ $monografia->articulos_sum_num_paginas }}</td>
    </div>
</x-monografias>
