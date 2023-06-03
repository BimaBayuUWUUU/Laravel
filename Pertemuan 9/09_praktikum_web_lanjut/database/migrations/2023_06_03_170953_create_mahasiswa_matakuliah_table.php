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
        Schema::create('mahasiswa_matakuliah', function (Blueprint $table) {
            $table->id();
            $table->integer('mahasiswa_nim')->unsigned();
            $table->foreign('mahasiswa_nim')->references('nim')->on('mahasiswas')->onDelete('cascade');
            $table->unsignedBigInteger('matakuliah_id')->nullable();
            $table->foreign('matakuliah_id')->references('id')->on('matakuliah')->onDelete('cascade');
            $table->string('nilai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa_matakuliah');
    }
};
