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
        Schema::create('doacoes', function (Blueprint $table) {
            //
            $table->id();
            $table->string('infoDoacao', 500)->nullable();
            $table->date('dataDoacao');
            $table->bigInteger('userId')->unsigned();
            $table->foreign('userId')->references('id')->on('users')->onDelete('cascade');
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
        Schema::table('doacoes', function (Blueprint $table) {
            //
            Schema::dropIfExists('doacoes');
        });
    }
};
