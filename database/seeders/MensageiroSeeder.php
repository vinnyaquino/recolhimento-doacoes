<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mensageiro;

class MensageiroSeeder extends Seeder
{
    public function run()
    {
        Mensageiro::create([
            'user' => 'johndoe',
            'nome' => 'John Doe',
            'password' => 'senha123',
        ]);
        
        Mensageiro::create([
            'user' => 'vinicius',
            'nome' => 'Vinicius Aquino',
            'password' => 'minhasenha',
        ]);
    }
}

