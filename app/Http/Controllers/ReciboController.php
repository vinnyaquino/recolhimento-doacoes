<?php

namespace App\Http\Controllers;

use App\Models\Contribuicao;
use Illuminate\Http\Request;

class ReciboController extends Controller
{
    public function show($id)
    {
        $recibo = Contribuicao::with('contribuinte')->findOrFail($id);

        return view('recibos.show', compact('recibo'));
    }

    public function updateStatus(Request $request, $id)
    {
        $recibo = Contribuicao::findOrFail($id);
        $recibo->status = $request->input('status');
        if ($recibo->status == 'Recebido') {
            $recibo->data_recebimento = now();
        }
        $recibo->save();

        return redirect()->route('recibos.show', $id)->with('success', 'Status atualizado com sucesso!');
    }
}
