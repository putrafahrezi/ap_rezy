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
            $table->string('namaobat')->unique();;
            $table->string('tanggal');
            $table->string('jumlah');
            $table->string('jenis_obt');
            $table->string('ed');
            $table->string('keterangan');
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
