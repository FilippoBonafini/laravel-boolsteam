<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //CREIAMO UNA TABELLA 'games' ALL'INTERNO DEL DB
        Schema::create('games', function (Blueprint $table) {

            // CREIAMO I VARI CAMPI DELLA TABELLA
            $table->id();
            $table->string('title', 100);
            // $table->string('genres');
            $table->date('release_date');
            $table->text('description');
            // $table->string('developer', 100);
            // $table->string('platforms');
            $table->boolean('crossplay')->default(false);
            // $table->string('languages', 100);
            $table->boolean('online')->default(false);
            $table->float('price', 6, 2);
            $table->integer('sconto')->nullable();
            $table->float('discounted_price')->nullable();
            $table->string('cover')->nullable();
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
        Schema::dropIfExists('games');
    }
};
