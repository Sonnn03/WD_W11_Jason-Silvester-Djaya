<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('table_home', function (Blueprint $table) {
            $table->id();
            $table->string('label');          
            $table->string('judul');          
            $table->text('deskripsi');
            $table->string('nama_lengkap');
            $table->string('status');
            $table->string('fokus');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('table_home');
    }
};