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
        Schema::create('produits', function (Blueprint $table) {
            $table->id('idProduit');
            $table->string('nom');
            $table->text('description');
            $table->float('prixUnitaire');
            $table->string('couleur');
            $table->string('taille');
            $table->json('images'); // Liste d'images
            $table->integer('stockDisponible');
            $table->foreignId('categorie_id')->constrained('categories');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produits');
    }
};
