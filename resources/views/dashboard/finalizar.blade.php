@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-10">
        <h1 class="text-2xl font-bold mb-6">Trabalho Finalizado - {{ \Carbon\Carbon::parse($dataAtual)->format('d/m/Y') }}</h1>

        <table class="w-full table-auto bg-white shadow-lg rounded">
            <thead>
                <tr>
                    <th class="px-4 py-2">Recibo</th>
                    <th class="px-4 py-2">Contribuinte</th>
                    <th class="px-4 py-2">Valor</th>
                    <th class="px-4 py-2">Última Atualização</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($recibosRecebidos as $recibo)
                <tr class="text-center">
                    <td class="px-4 py-2">{{ $recibo->recibo }}</td>
                    <td class="px-4 py-2">{{ $recibo->contribuinte->nome }}</td>
                    <td class="px-4 py-2">R$ {{ number_format($recibo->valor, 2, ',', '.') }}</td>
                    <td class="px-4 py-2">{{ \Carbon\Carbon::parse($recibo->updated_at)->format('d/m/Y H:i') }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="px-4 py-2 text-center text-red-500">Nenhum recibo recebido encontrado.</td>
                </tr>
                @endforelse
            </tbody>
        </table>

        <div class="bg-white p-6 mt-6 rounded shadow">
            <p class="text-xl"><strong>Valor Total Recebido no Dia:</strong> R$ {{ number_format($valorTotal, 2, ',', '.') }}</p>
        </div>

        <a href="{{ route('dashboard') }}" class="mt-6 inline-block bg-sky-600 text-white px-4 py-2 rounded">Voltar ao Dashboard</a>
    </div>
</body>
</html>
@endsection