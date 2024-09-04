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
        Schema::create('creneaus', function (Blueprint $table) {
            $table->id();
            $table->string('type')->default('Consultation');
            $table->date('date');
            $table->time('debut')->default('09:00');
            $table->time('fin')->default('16:00');
            $table->integer('prix')->default('10000');
            $table->enum('statut',['oui','non']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('creneaus');
    }
};
