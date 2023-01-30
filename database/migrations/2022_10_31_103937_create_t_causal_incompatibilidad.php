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
        Schema::create('t_causal_incompatibilidad', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->BigInteger('estado');
            $table->BigInteger('id_funcionario')->unsigned();
            $table->BigInteger('id_tipo_causal')->unsigned();
            $table->timestamps();
            $table->foreign('id_funcionario')->references('id')->on('t_funcionario')->onDelete('cascade');
            $table->foreign('id_tipo_causal')->references('id')->on('tipo_causales_incompatibilidades')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_causal_incompatibilidad');
    }
};
