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
        Schema::create('games', function (Blueprint $table) {
            $table->id();

            $table->string('title',100);
            $table->json('genres');
            $table->integer('release_year');
            $table->text('description');
            $table->string('developer',100);
            $table->json('platforms');
            $table->boolean('crossplay')->default(false);
            $table->json('languages',100);
            $table->boolean('online')->default(false);
            $table->float('price',6, 2);
            $table->text('cover');

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
