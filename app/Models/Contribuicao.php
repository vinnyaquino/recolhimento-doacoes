<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contribuicao extends Model
{
    protected $table = 'contribuicao';

    protected $primaryKey = 'recibo';

    protected $fillable = [
        'valor',
        'data_prevista',
        'data_recebimento',
        'status',
        'id_contribuinte',
        'id_tipo_pagamento',
        'id_mensageiro',
        'id_movimento_diario'
    ];

    protected $casts = [
        'data_recebimento' => 'datetime',
        'data_prevista' => 'date'
    ];

    public function contribuinte()
    {
        return $this->belongsTo(Contribuinte::class, 'id_contribuinte');
    }
}
