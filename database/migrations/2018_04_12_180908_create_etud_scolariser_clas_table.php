<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEtudScolariserClasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etud_scolariser_clas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_etudiant');
            $table->integer('id_classe');
            $table->integer('id_annee');
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
        Schema::dropIfExists('etud_scolariser_clas');
    }
}
