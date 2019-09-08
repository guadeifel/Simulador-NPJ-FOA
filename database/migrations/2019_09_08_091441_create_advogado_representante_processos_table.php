<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvogadoRepresentanteProcessosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        
        Schema::create('advogado_representante_processos', function (Blueprint $table) {
            $table->integer('p_ar_id')->unsigned();
            $table->foreign('p_ar_id')->references('id')->on('tb_advogado_representante')->onDelete('cascade');
            $table->integer('ar_p_id')->unsigned();
            $table->foreign('ar_p_id')->references('id')->on('tb_processos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('advogado_representante_processos');
    }
}
