<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pokemons', function (Blueprint $table) {
            $table->id();

            $table->integer('number');
            $table->string('name')->unique();
            $table->string('type_1');
            $table->string('type_2');
            //pokemon stats as protected variables
            $table->integer('hp');
            $table->integer('attack');
            $table->integer('defense');
            $table->integer('spAttack');
            $table->integer('spDefense');
            $table->integer('speed');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pokemons');
    }
};
