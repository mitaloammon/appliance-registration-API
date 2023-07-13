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
        Schema::create('eletrodomestico', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->enum('tensao', ['110', '220']);
            $table->text('descricao');
            $table->enum('marca', ['Electrolux', 'Brastemp', 'Fischer', 'Samsung', 'LG']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eletrodomestico');
    }
};
