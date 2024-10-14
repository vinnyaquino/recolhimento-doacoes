<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContribuicaoTable extends Migration
{
    public function up()
    {
        Schema::create('contribuicao', function (Blueprint $table) {
            $table->id('recibo');
            $table->decimal('valor', 10, 2);
            $table->date('data_prevista');
            $table->timestamp('data_recebimento')->nullable();
            $table->enum('status', ['Pendente', 'Recebido', 'Cancelado'])->default('Pendente');
            
            $table->foreignId('id_contribuinte')->constrained('contribuinte')->onDelete('cascade');
            $table->foreignId('id_tipo_pagamento')->constrained('tipos_pagamento')->onDelete('restrict');
            $table->foreignId('id_mensageiro')->constrained('mensageiros')->onDelete('cascade');
            $table->foreignId('id_movimento_diario')->constrained('movimento_diario')->onDelete('cascade');
        
            $table->timestamps();
        });
        
    }

    public function down()
    {
        Schema::dropIfExists('contribuicao');
    }
}
