<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentRegulateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agent_regulateurs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('adress');
            $table->string('phone');
            $table->string('genre');
            $table->integer('regulateur_entreprise_id')->index()->unsigned();
            $table->integer('user_id')->index()->unsigned();
            $table->integer('permission_id')->index()->unsigned();
            $table->string('image');
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
        Schema::dropIfExists('agent_regulateurs');
    }
}
