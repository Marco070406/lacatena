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
        Schema::create('statistiques', function (Blueprint $table) {
            $table->id('idStat');
            $table->date('periode');
            $table->decimal('ventesTotales', 10, 2)->default(0);
            $table->text('articlesPlusVendus')->nullable();
            $table->decimal('chiffreAffaire', 10, 2)->default(0);
            $table->decimal('benefices', 10, 2)->default(0);
            $table->integer('clientsActifs')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('statistiques');
    }
};
