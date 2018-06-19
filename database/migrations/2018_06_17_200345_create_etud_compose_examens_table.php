<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEtudComposeExamensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etud_compose_examens', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_examen');
            $table->integer('id_etud_ins_mat');
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
        Schema::dropIfExists('etud_compose_examens');
    }
}
