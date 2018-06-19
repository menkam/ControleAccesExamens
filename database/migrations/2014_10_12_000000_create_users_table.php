<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('prenom')->nullable();
            $table->string('sexe')->nullable();
            $table->date('date_nais')->nullable();
            $table->string('telephone')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->text('info_empreinte')->nullable();
            $table->text('info_codebar')->nullable();
            $table->string('photo')->default('user.png');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
