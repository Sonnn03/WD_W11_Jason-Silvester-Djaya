<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('table_about', function (Blueprint $table) {
            $table->id();
            $table->string('jenis');                
            $table->string('judul');                
            $table->string('subjudul')->nullable(); 
            $table->string('periode');              
            $table->text('deskripsi')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('table_about');
    }
};