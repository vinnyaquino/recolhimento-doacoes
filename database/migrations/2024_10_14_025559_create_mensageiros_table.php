<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMensageirosTable extends Migration
{
    public function up()
    {
        Schema::create('mensageiros', function (Blueprint $table) {
            $table->id();
            $table->string('user')->unique();
            $table->string('nome');
            $table->string('password');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mensageiros');
    }
}
