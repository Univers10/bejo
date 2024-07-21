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
        Schema::create('likes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_service');
            $table->unsignedBigInteger('id_utilisateur');
            $table->enum('etat', [0, 1]);
            $table->timestamps();

            $table->foreign('id_service')->references('id')->on('services')->onDelete('cascade');
            $table->foreign('id_utilisateur')->references('id')->on('utilisateurs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('likes');
    }
};
