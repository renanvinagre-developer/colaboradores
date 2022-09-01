<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColaboradores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colaboradores', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome_completo');
            $table->string('cpf')->unique();
            $table->string('email')->unique();
            $table->string('rg');
            $table->date('data_nascimento');
            $table->string('cep');
            $table->string('endereco');
            $table->string('numero');
            $table->string('cidade');
            $table->string('estado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
