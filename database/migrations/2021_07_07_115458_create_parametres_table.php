<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParametresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parametres', function (Blueprint $table) {
            $table->id();
            $table->string('noms');
            $table->string('logo')->nullable();
            $table->string('tel1');
            $table->string('tel2')->nullable();
            $table->string('email');
            $table->string('fax')->nullable();
            $table->string('ville')->nullable();
            $table->string('quartier');
            $table->string('bp')->nullable();
            $table->string('pays');
            $table->string('barreau');
            $table->string('agrement');
            $table->string('site_url');
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
        Schema::dropIfExists('parametres');
    }
}
