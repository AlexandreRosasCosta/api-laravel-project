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
        Schema::create('adresses', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->id();
            $table->string('cpf');
            $table->string('city');
            $table->string('state');
            $table->string('number');
            $table->string('district');
            $table->string('cep');
            $table->string('street');
            $table->timestamps();

            $table->foreign('cpf')->references('cpf')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_adresses');
    }
};
