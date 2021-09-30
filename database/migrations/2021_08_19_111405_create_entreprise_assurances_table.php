<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntrepriseAssurancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entreprise_assurances', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('rccm');
            $table->string('image');
            $table->string('adresse');
            $table->integer('abonnement_id')->index()->unsigned();
            $table->integer('user_id')->index()->unsigned();
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
        Schema::dropIfExists('entreprise_assurances');
    }
}
