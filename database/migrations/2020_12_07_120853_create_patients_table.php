<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('profession'); 
            $table->integer('age');
            $table->string('localisation');
            $table->boolean('etat')->default(false)->nullable();
            $table->string('durée')->nullable();
            $table->string('photo')->default('default.jpg')->nullable();
            $table->integer('users_id')->unsigned();
          
            $table->timestamps();

            $table->foreign('users_id')
            ->references('id')
            ->on('users')
            ->onDelete('restrict')
            ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
