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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->text('description');
            $table->string('type');
            $table->integer('duree'); // Nouvelle colonne duree            $table->decimal('budget');
            $table->json('taches')->nullable();
            $table->json('equipe')->nullable();
            $table->string('owner')->nullable();
            $table->string('manager')->nullable();
            $table->boolean('managed')->default(false);
            $table->decimal('budget')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
