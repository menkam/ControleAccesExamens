<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examens', function (Blueprint $table) {
            $table->increments('id');            
            $table->integer('id_activite');
            $table->integer('id_ens_chef_dpt');
            $table->integer('id_matiere');
            $table->integer('id_creneau');
            $table->integer('id_surveillant');
            $table->integer('id_session');
            $table->date('date_examen');
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
        Schema::dropIfExists('examens');
    }
}
