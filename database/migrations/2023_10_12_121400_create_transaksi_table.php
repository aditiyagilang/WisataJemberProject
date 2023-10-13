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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pembeli');
            $table->string('nama_paket');
            $table->string('alamat');
            $table->integer('total_harga');
            $table->foreignId('users_id')->constrained('users')->restrictOnDelete()->cascadeOnUpdate();
            $table->foreignId('id_dataharga')->constrained('dataharga')->restrictOnDelete()->cascadeOnUpdate();
            $table->char('nohp');
            $table->integer('total');
            $table->enum('status', ['Belum','Selesai']);
            $table->integer('jumlah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};
