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
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('panier_id')->constrained('paniers')->onDelete('cascade')->onUpdate('cascade');
            $table->string('numero_depot');
            $table->string('numero_transaction');
            $table->string('ville');
            $table->string('adresse');
            $table->string('montant');
            $table->string('methode_paiement')->default('Orange Money');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commandes');
    }
};
