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
        Schema::table('comments', function (Blueprint $table) {
            // Rimuovi prima la vecchia chiave esterna
            $table->dropForeign(['user_id']);

            // Aggiungi nuovamente la colonna con la nuova chiave esterna con onDelete('cascade')
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('comments', function (Blueprint $table) {
            // Rimuovi la nuova chiave esterna
            $table->dropForeign(['user_id']);

            // Riaggiungi la vecchia chiave esterna senza onDelete('cascade')
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
        });
    }
};
