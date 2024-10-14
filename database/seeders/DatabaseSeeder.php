<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            MensageiroSeeder::class,
            ContribuinteSeeder::class,
            TiposPagamentoSeeder::class,
            MovimentoDiarioSeeder::class,
            ContribuicaoSeeder::class,
        ]);
    }
}
