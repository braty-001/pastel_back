<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nome',100);
            $table->string('email',100)->unique();;
            $table->string('telefone',12);
            $table->date('data_de_nascimento');
            $table->string('endereco',200);
            $table->string('complemento',100);
            $table->string('bairro',50);
            $table->string('cep',9);
            $table->date('data_de_cadastro');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}