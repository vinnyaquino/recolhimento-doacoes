<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TiposPagamentoSeeder extends Seeder
{
    public function run()
    {
        DB::table('tipos_pagamento')->insert([
            ['nome' => 'Dinheiro'],
            ['nome' => 'Cartão de Crédito'],
            ['nome' => 'Cartão de Débito'],
            ['nome' => 'Pix'],
            ['nome' => 'Boleto Bancário'],
        ]);
    }
}

