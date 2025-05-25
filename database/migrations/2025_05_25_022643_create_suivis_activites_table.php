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
        Schema::create('suivis_activites', function (Blueprint $table) {
            $table->id();
            $table->foreignId('activite_id')->constrained('activites')->onDelete('cascade');
            $table->enum('statut', ['Réalisé', 'Annulé', 'En cours']);
            $table->date('date_suivi');
            $table->text('resultat')->nullable();
            $table->string('indicateur_mesure')->nullable(); // or relation if needed
            $table->foreignId('user_id')->constrained('personnes_ressources')->onDelete('set null')->nullable();
            $table->text('note')->nullable();
            $table->text('difficultes')->nullable();
            $table->text('solutions')->nullable();
            $table->integer('pourcentage_realisation')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suivis_activites');
    }
};
