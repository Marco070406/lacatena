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
        Schema::create('factures', function (Blueprint $table) {
            $table->id('idFacture');
            $table->foreignId('commande_id')->constrained('commandes')->onDelete('cascade');
            $table->date('dateFacture');
            $table->float('montantHT');
            $table->float('montantTaxes');
            $table->float('montantTTC');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('factures');
    }
};
