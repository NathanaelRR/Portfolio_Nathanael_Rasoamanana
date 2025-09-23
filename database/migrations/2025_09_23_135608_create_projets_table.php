<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    //Table des projets 
    public function up(): void
    {
        Schema::create('projets', function (Blueprint $table) {
            $table->id();
            $table->string('titre');                        // titre du projet
            $table->text('description');                    // description détaillée
            $table->string('type');                         // académique, professionnel, stage, personnel...
            $table->json('images')->nullable();             // bloc d’images (JSON pour stocker plusieurs chemins)
            $table->text('acquis')->nullable();             // compétences ou acquis
            $table->json('technologies')->nullable();       // liste de techno/langages utilisés (JSON)
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projets');
    }
};
