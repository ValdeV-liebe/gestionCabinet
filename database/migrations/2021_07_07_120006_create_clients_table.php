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
            $table->string('noms')->comment('ceci fait reference au nom de la societe si une societé');
            $table->enum('civilite', ['M', 'Mme', 'Mlle', 'Maitre']);
            $table->string('nom_jeune_fille')->nullable();
            $table->string('tel1')->comment('ceci fait reference au telephone de la societe si une societé');
            $table->string('tel2')->nullable()->comment('ceci fait reference au telephone de la societe si une societé');
            $table->string('email')->nullable()->comment('ceci fait reference u mail de la societe si une societé');
            $table->string('ville')->comment('ceci fait reference a la ville de la societe si une societé');
            $table->string('quartier')->nullable()->comment('ceci fait reference au quartier de la societe si une societé');
            $table->date('date_naiss')->nullable();
            $table->string('lieu')->nullable();
            $table->string('pays_naiss')->nullable();
            $table->string('nationalite')->nullable();
            $table->string('cni')->nullable();
            $table->string('profession');
            $table->double('revenu')->nullable();
            $table->string('photo')->nullable();
            $table->string('photo_cni')->nullable();
            $table->string('bp')->nullable()->comment('attribut propre a la societe');
            $table->date('creation_date')->nullable()->comment('attribut propre a la societe');
            $table->string('secteur_activite')->nullable()->comment('attribut propre a la societe');
            $table->double('chiffre_affaire')->nullable()->comment('attribut propre a la societe');
            $table->string('pca-pdg-gerant')->comment('attribut propre a la societe');
            $table->enum('type', ['societe', 'particulier'])->default('particulier');
            $table->timestamps();
            $table->softDeletes();
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
