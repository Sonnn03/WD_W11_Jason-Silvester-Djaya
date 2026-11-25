<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('table_blog', function (Blueprint $table) {
    $table->id();
    $table->string('judul');

    $table->string('kategori');

    $table->foreignId('user_id')
          ->constrained('users')
          ->onDelete('cascade');

    $table->string('gambar');
    $table->text('ringkasan');
    $table->string('link');
    $table->date('tanggal_terbit');
    $table->timestamps();
    });
    }

    public function down(): void
    {
        Schema::dropIfExists('table_blog');
    }
};