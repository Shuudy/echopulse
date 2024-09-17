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
        Schema::create('musiques', function (Blueprint $table) {
            $table->id();
            $table->string("titre");
            $table->string("nom_artiste");
            $table->string("album");
            $table->date("date_sortie");
            $table->string("chemin_fichier_audio");
            $table->string("chemin_fichier_image");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('musiques');
    }
};
