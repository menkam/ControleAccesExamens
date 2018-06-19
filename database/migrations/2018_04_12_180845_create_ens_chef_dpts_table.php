<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnsChefDptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ens_chef_dpts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_enseignant');
            $table->integer('id_departement');
            $table->date('date_debut_diriedpt');
            $table->date('date_fin_diriedpt')->nullable();
            $table->string('statut')->default('1');
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
        Schema::dropIfExists('ens_chef_dpts');
    }
}
