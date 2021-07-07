<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpposantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opposants', function (Blueprint $table) {
            $table->id();
            $table->string('noms')->comment('ceci peu faire office de nom dune structure');
            $table->enum('civilite', ['M', 'Mme', 'Mlle', 'Maitre'])->nullable();
            $table->string('tel1')->comment('ceci fait reference au telephone de la societe si une societé');
            $table->string('tel2')->nullable()->comment('ceci fait reference au telephone de la societe si une societé');
            $table->string('email')->nullable()->comment('ceci fait reference u mail de la societe si une societé');
            $table->string('ville')->comment('ceci fait reference a la ville de la societe si une societé');
            $table->string('quartier')->nullable()->comment('ceci fait reference au quartier de la societe si une societé');
            $table->string('photo')->nullable()->comment('fait aussi reference au logo de la societe');
            $table->string('bp')->nullable();
            $table->string('qualite')->nullable();
            $table->string('Fax')->nullable();
            $table->foreignId('client_id')->constrained()->cascadeOnDelete();
            $table->enum('type',['particulier','societe'])->default('particulier');
            $table->softDeletes();
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
        Schema::dropIfExists('opposants');
    }
}
