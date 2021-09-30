<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('rccm');
            $table->string('assurance');
            $table->string('adress');
            $table->string('image');
            $table->string('secteur_activity');
            $table->float('prime');
            $table->string('province');
            $table->integer('branche_assurance_id')->index()->unsigned();
            $table->integer('entreprise_assurance_id')->index()->unsigned();
            $table->integer('user_id')->index()->unsigned();
            $table->integer('permission_id')->index()->unsigned();
            $table->integer('agent_commercial_id')->index()->unsigned();
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
        Schema::dropIfExists('clients');
    }
}
