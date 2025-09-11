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
        Schema::create('paiements', function (Blueprint $table) {
            $table->id('idPaiement');
            $table->foreignId('facture_id')->constrained('factures')->onDelete('cascade');
            $table->float('montant');
            $table->date('datePaiement');
            $table->string('moyenPaiement');
            $table->string('statutPaiement');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paiements');
    }
};
