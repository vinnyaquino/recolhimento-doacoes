<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contribuicao;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $data = $request->input('data', Carbon::today()->format('Y-m-d'));

        $recibos = Contribuicao::whereDate('data_prevista', $data)
                    ->where('id_mensageiro', auth()->user()->id)
                    ->get();

        if ($recibos->isEmpty()) {
            return view('dashboard.index', compact('recibos', 'data'))->withErrors('Nenhum recibo encontrado para essa data.');
        }

        return view('dashboard.index', compact('recibos', 'data'));
    }

    public function finalizarTrabalho()
    {
        $dataAtual = Carbon::today()->format('Y-m-d');
    
        $recibosRecebidos = Contribuicao::whereDate('data_recebimento', $dataAtual)
                            ->where('status', 'Recebido')
                            ->where('id_mensageiro', auth()->user()->id)
                            ->get();
    
        $valorTotal = $recibosRecebidos->sum('valor');
    
        return view('dashboard.finalizar', compact('recibosRecebidos', 'valorTotal', 'dataAtual'));
    }
}

