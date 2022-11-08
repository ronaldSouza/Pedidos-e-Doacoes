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
        Schema::create('pedidos', function (Blueprint $table) {
            //
            $table->id();
            $table->date('dataPedido');
            $table->string('infoPedido', 500);
            $table->string('status');
            $table->bigInteger('pedidoUserId')->unsigned();
            $table->foreign('pedidoUserId')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pedidos', function (Blueprint $table) {
            //
            Schema::dropIfExists('pedidos');
        });
    }
};
