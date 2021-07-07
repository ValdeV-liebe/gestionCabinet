<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePointagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pointages', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->date('debut');
            $table->integer('duree')->unsigned()->comment('la duree est definit en jour');
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('affaire_id')->constrained()->cascadeOnDelete();
            $table->string('resultat')->nullable();
            $table->string('fichier_resultat')->nullable();
            $table->text('observation')->nullable();
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
        Schema::dropIfExists('pointages');
    }
}
