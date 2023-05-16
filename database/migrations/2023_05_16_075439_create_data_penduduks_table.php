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
        Schema::create('data_penduduk', function (Blueprint $table) {
            $table->id();
            $table->integer('NIK');
            $table->unique('NIK');
            $table->string('Nama');
            $table->string('Jenis Kelamin');
            $table->date('Tanggal Lahir');
            $table->string('Provinsi');
            $table->string('Kota');
            $table->text('Alamat');
            $table->integer('RT');
            $table->integer('RW');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_penduduk');
    }
};
