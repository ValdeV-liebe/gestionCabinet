<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('information', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->longText('contenu');
            $table->foreignId('affaire_id')->constrained()->cascadeOnDelete();
            $table->string('users')->comment('ceci fait reference aux users qui recevront la notif ex: #1#2# et #0# fait reference a tous');
            $table->string('user_read')->nullable()->comment('ceci fait reference aux users qui recevront la notif ex: #1#2#');
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
        Schema::dropIfExists('information');
    }
}
