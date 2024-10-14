<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovimentoDiarioTable extends Migration
{
    public function up()
    {
        Schema::create('movimento_diario', function (Blueprint $table) {
            $table->id();
            $table->date('data_movimento');
            $table->foreignId('id_mensageiro')->constrained('mensageiros')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('movimento_diario');
    }
}
