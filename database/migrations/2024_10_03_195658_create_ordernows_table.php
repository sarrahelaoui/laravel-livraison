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
        Schema::create('ordernows', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('email');
            $table->string('category');
            $table->string('product');
            $table->integer('quantity');
            $table->string('adresse_depart'); // Updated field name
            $table->string('adresse_destin'); // Updated field name
            $table->integer('tel');
            $table->string('message')->nullable(); // Optional field
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ordernows');
    }
};
