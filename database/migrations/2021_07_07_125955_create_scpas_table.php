<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScpasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scpas', function (Blueprint $table) {
            $table->id();
            $table->text('Membres');
            $table->string('denomination');
            $table->string('ville')->nullable();
            $table->string('bp')->nullable();
            $table->string('tel')->nullable();
            $table->string('email')->nullable();
            $table->string('fax')->nullable();
            $table->text('specialite')->nullable();
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
        Schema::dropIfExists('scpas');
    }
}
