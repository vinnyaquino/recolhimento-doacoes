<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContribuinteSeeder extends Seeder
{
    public function run()
    {
        DB::table('contribuinte')->insert([
            ['nome' => 'João Silva', 'endereco' => 'Rua das Flores, 123', 'telefone' => '11999999999'],
            ['nome' => 'Maria Souza', 'endereco' => 'Av. Paulista, 456', 'telefone' => '11988888888'],
            ['nome' => 'Carlos Pereira', 'endereco' => 'Rua dos Pinheiros, 789', 'telefone' => '11977777777'],
            ['nome' => 'Ana Lima', 'endereco' => 'Rua Augusta, 321', 'telefone' => '11966666666'],
            ['nome' => 'Pedro Alves', 'endereco' => 'Av. Brasil, 123', 'telefone' => '11955555555'],
        ]);
    }
}
