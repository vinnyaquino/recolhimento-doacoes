<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MovimentoDiarioSeeder extends Seeder
{
    public function run()
    {
        DB::table('movimento_diario')->insert([
            ['data_movimento' => Carbon::now()->toDateString(), 'id_mensageiro' => 1],
            ['data_movimento' => Carbon::now()->subDay(1)->toDateString(), 'id_mensageiro' => 1],
            ['data_movimento' => Carbon::now()->subDay(2)->toDateString(), 'id_mensageiro' => 1],
        ]);
    }
}

