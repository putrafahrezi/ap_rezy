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
        Schema::create('dataobats', function (Blueprint $table) {
            $table->id();
            $table->string('kdobat');
            $table->string('namaobat');
            $table->string('jenis_obt');
            $table->string('harga');
            $table->string('stok_awl');
            $table->string('stok_sisa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dataobats');
    }
};
