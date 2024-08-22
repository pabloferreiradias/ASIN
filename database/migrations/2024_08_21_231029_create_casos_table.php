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
        Schema::create('casos', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('cidade_crime_id');
            $table->foreign('cidade_crime_id')->references('id')->on('cidades');

            $table->unsignedBigInteger('cidade_destino_1_id');
            $table->foreign('cidade_destino_1_id')->references('id')->on('cidades');

            $table->unsignedBigInteger('cidade_destino_2_id');
            $table->foreign('cidade_destino_2_id')->references('id')->on('cidades');

            $table->unsignedBigInteger('cidade_destino_3_id');
            $table->foreign('cidade_destino_3_id')->references('id')->on('cidades');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('casos');
    }
};
