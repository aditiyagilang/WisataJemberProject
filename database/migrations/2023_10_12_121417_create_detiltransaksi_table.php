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
        Schema::create('detiltransaksi', function (Blueprint $table) {
            $table->foreignId('id_transaksi')->constrained('transaksi')->restrictOnDelete()->cascadeOnUpdate();
            $table->foreignId('id_dataharga')->constrained('dataharga')->restrictOnDelete()->cascadeOnUpdate();
            $table->integer('jumlah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detiltransaksi');
    }
};
