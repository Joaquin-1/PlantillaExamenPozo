<x-monografias>
    <table class="table-auto">
        <thead>
            <th class="px-6 py-2 text-gray-500">
                Titulo
            </th>
            <th class="px-6 py-2 text-gray-500">
                Año
            </th>
        </thead>
        <tbody>
            @foreach ($monografia->articulos as $articulo)
                <tr>
                    <td class="px-6 py-2">{{ $articulo->titulo }}</td>
                    <td class="px-6 py-2">{{ $articulo->anyo }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div>
        <h1>Número de páginas</h1>
        <td class="px-6 py-2">{{ $monografia->articulos_sum_num_paginas }}</td>
    </div>
</x-monografias>
