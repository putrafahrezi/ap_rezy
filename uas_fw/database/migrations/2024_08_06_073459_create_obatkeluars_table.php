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
        Schema::create('obatkeluars', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('dataobats_id');
            $table->string('jenis_obt');
            $table->string('tgl_bayar');
            $table->string('jumlah');
            $table->string('status');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('obatkeluars');
    }
};
