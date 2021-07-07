<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvocatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avocats', function (Blueprint $table) {
            $table->id();
            $table->string('noms');
            $table->enum('civilite', ['M', 'Mme', 'Mlle', 'Maitre']);
            $table->string('tel');
            $table->string('domaine')->nullable();
            $table->date('prestation_serment')->nullable();
            $table->string('email')->nullable();
            $table->string('ville')->nullable();
            $table->string('quartier')->nullable();
            $table->string('photo')->nullable();
            $table->string('bp')->nullable();
            $table->text('politique_honoraire')->nullable();
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
        Schema::dropIfExists('avocats');
    }
}
