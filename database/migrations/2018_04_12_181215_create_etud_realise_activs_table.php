<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEtudRealiseActivsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etud_realise_activs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_activite');
            $table->integer('id_etud_ins_mat');
            $table->date('fin_realisation')->nullable();
            $table->string('statut')->default('0');
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
        Schema::dropIfExists('etud_realise_activs');
    }
}
