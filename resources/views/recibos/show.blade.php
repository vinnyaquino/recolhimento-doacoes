@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-8">
        <h1 class="text-2xl font-bold mb-4">Recibo #{{ $recibo->recibo }}</h1>

        <div class="bg-white rounded shadow p-6">
            <p><strong>Contribuinte:</strong> {{ $recibo->contribuinte->nome }}</p>
            <p><strong>Endereço:</strong> {{ $recibo->contribuinte->endereco }}</p>
            <p><strong>Valor:</strong> R$ {{ number_format($recibo->valor, 2, ',', '.') }}</p>
            <p><strong>Status:</strong> {{ $recibo->status }}</p>
            <p><strong>Data de Recebimento:</strong> 
                {{ $recibo->data_recebimento ? $recibo->data_recebimento->format('d/m/Y H:i') : 'Pendente' }}
        </div>

        <form method="POST" action="{{ route('recibos.updateStatus', $recibo->recibo) }}" class="mt-4">
            @csrf
            <label for="status" class="block mb-2">Alterar Status:</label>
            <select name="status" id="status" class="border rounded px-2 py-1">
                <option value="Recebido">Recebido</option>
                <option value="Cancelado">Cancelado</option>
                <option value="Cancelado">Pendente</option>
            </select>
            <button type="submit" class="ml-2 bg-sky-600 text-white px-4 py-1 rounded">
                Atualizar
            </button>
        </form>
        <a href="{{ route('dashboard') }}" class="mt-6 inline-block bg-sky-600 text-white px-4 py-2 rounded">Voltar ao Dashboard</a>
    </div>
@endsection
