<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAffairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('affaires', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->constrained()->cascadeOnDelete();
            $table->foreignId('opposant_id')->constrained()->cascadeOnDelete();
            $table->foreignId('prestation_id')->constrained()->cascadeOnDelete();
            $table->foreignId('juridiction_id')->constrained()->cascadeOnDelete();
            $table->text('objet');
            $table->text('description')->nullable();
            $table->string('numero_dossier')->unique();
            $table->json('client')->comment('ceci contien le client sous forme de json');
            $table->boolean('active')->default(true);
            $table->integer('cota')->unsigned();
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
        Schema::dropIfExists('affaires');
    }
}
