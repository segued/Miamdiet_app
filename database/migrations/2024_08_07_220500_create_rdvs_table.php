<?php

use App\Models\Creneau;
use App\Models\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rdvs', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->string('ville');
            $table->time('heure');
            $table->date('date');
            $table->string('adress');
            $table->string('numero_depot');
            $table->string('numero_transaction');
            $table->string('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rdvs');
    }
};
