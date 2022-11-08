<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('doacoes_dos_pedidos', function (Blueprint $table) {
            //
            $table->id();
            $table->string('nomeDoacao');
            $table->string('nomePedido');
            $table->bigInteger('doacaoId')->unsigned();
            $table->foreign('doacaoId')->references('id')->on('doacoes')->onDelete('cascade');
            $table->bigInteger('pedidoId')->unsigned();
            $table->foreign('pedidoId')->references('id')->on('pedidos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
