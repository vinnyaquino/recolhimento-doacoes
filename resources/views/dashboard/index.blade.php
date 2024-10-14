@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-10">
        <h1 class="text-2xl font-bold mb-6">Dashboard - Lista de Recibos</h1>
        
        <form action="{{ route('dashboard') }}" method="GET" class="mb-6">
            <label for="data" class="block text-sm font-medium">Selecione a Data:</label>
            <input type="date" name="data" id="data" value="{{ $data }}" class="mt-1 block w-full">
            <button type="submit" class="mt-2 bg-sky-600 text-white px-4 py-2 rounded">Buscar</button>
        </form>

        <table class="w-full table-auto bg-white shadow-lg rounded">
            <thead>
                <tr>
                    <th class="px-4 py-2">Recibo</th>
                    <th class="px-4 py-2">Contribuinte</th>
                    <th class="px-4 py-2">Valor</th>
                    <th class="px-4 py-2">Status</th>
                    <th class="px-4 py-2">Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($recibos as $recibo)
                <tr class="text-center">
                    <td class="px-4 py-2">{{ $recibo->recibo }}</td>
                    <td class="px-4 py-2">{{ $recibo->contribuinte->nome }}</td>
                    <td class="px-4 py-2">R$ {{ number_format($recibo->valor, 2, ',', '.') }}</td>
                    <td class="px-4 py-2">
                        @if ($recibo->status == 'Pendente')
                            <span class="text-gray-500">Pendente</span>
                        @elseif ($recibo->status == 'Recebido')
                            <span class="text-green-500">Recebido</span>
                        @else
                            <span class="text-red-500">Cancelado</span>
                        @endif
                    </td>
                    <td class="px-4 py-2">
                        <a href="{{ route('recibos.show', $recibo->recibo) }}" class="text-indigo-500">Visualizar</a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="px-4 py-2 text-center text-red-500">Nenhum recibo encontrado para essa data.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
@endsection