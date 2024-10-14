<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContribuinteTable extends Migration
{
    public function up()
    {
        Schema::create('contribuinte', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 100);
            $table->string('endereco');
            $table->string('telefone', 20)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('contribuinte');
    }
}

