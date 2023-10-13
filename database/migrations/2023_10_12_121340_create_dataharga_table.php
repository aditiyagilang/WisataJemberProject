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
        Schema::create('dataharga', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_jenis')->constrained('jenis')->restrictOnDelete()->cascadeOnUpdate();
            $table->string('nama');
            $table->integer('durasi');
            $table->text('deskripsi');
            $table->string('gambar');
            $table->int('harga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dataharga');
    }
};
