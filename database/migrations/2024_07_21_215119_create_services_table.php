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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->string('libelle');
            $table->unsignedBigInteger('id_categorie');
            $table->decimal('prix', 10, 2);
            $table->unsignedBigInteger('id_profession');
            $table->timestamps();

            $table->foreign('id_categorie')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('id_profession')->references('id')->on('professions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
