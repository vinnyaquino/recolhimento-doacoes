<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiposPagamentoTable extends Migration
{
    public function up()
    {
        Schema::create('tipos_pagamento', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 50);
        });
    }

    public function down()
    {
        Schema::dropIfExists('tipos_pagamento');
    }
}

