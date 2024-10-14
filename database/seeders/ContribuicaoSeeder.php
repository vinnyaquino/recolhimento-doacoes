<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ContribuicaoSeeder extends Seeder
{
    public function run()
    {
        DB::table('contribuicao')->insert([
            [
                'valor' => 150.00,
                'data_prevista' => Carbon::now()->toDateString(),
                'data_recebimento' => null,
                'status' => 'Pendente',
                'id_contribuinte' => 1,
                'id_tipo_pagamento' => 1,
                'id_mensageiro' => 1,
                'id_movimento_diario' => 1,
            ],
            [
                'valor' => 200.00,
                'data_prevista' => Carbon::now()->toDateString(),
                'data_recebimento' => Carbon::now()->toDateTimeString(),
                'status' => 'Recebido',
                'id_contribuinte' => 2,
                'id_tipo_pagamento' => 2,
                'id_mensageiro' => 1,
                'id_movimento_diario' => 1,
            ],
            [
                'valor' => 350.00,
                'data_prevista' => Carbon::now()->toDateString(),
                'data_recebimento' => Carbon::now()->toDateTimeString(),
                'status' => 'Recebido',
                'id_contribuinte' => 3,
                'id_tipo_pagamento' => 3,
                'id_mensageiro' => 1,
                'id_movimento_diario' => 1,
            ],
            [
                'valor' => 500.00,
                'data_prevista' => Carbon::now()->toDateString(),
                'data_recebimento' => null,
                'status' => 'Pendente',
                'id_contribuinte' => 4,
                'id_tipo_pagamento' => 4,
                'id_mensageiro' => 1,
                'id_movimento_diario' => 2,
            ],
            [
                'valor' => 750.00,
                'data_prevista' => Carbon::now()->subDay(1)->toDateString(),
                'data_recebimento' => Carbon::now()->subDay(1)->toDateTimeString(),
                'status' => 'Recebido',
                'id_contribuinte' => 5,
                'id_tipo_pagamento' => 5,
                'id_mensageiro' => 1,
                'id_movimento_diario' => 3,
            ],
            [
                'valor' => 125.00,
                'data_prevista' => Carbon::now()->subDay(2)->toDateString(),
                'data_recebimento' => null,
                'status' => 'Pendente',
                'id_contribuinte' => 1,
                'id_tipo_pagamento' => 1,
                'id_mensageiro' => 1,
                'id_movimento_diario' => 3,
            ],
            [
                'valor' => 600.00,
                'data_prevista' => Carbon::now()->toDateString(),
                'data_recebimento' => Carbon::now()->toDateTimeString(),
                'status' => 'Cancelado',
                'id_contribuinte' => 3,
                'id_tipo_pagamento' => 2,
                'id_mensageiro' => 1,
                'id_movimento_diario' => 2,
            ],
        ]);
    }
}


