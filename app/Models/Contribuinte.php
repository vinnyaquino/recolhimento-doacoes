<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contribuinte extends Model
{
    protected $table = 'contribuinte';

    protected $fillable = [
        'nome',
        'endereco',
        'telefone'
    ];

}
