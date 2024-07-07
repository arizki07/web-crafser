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
        Schema::create('tb_project', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_klien');
            $table->string('nama_project');
            $table->string('deskripsi');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->string('harga');
            $table->string('status')->default('pending');
            $table->timestamps();

            $table->foreign('id_klien')->references('id')->on('tb_klien');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_project');
    }
};
