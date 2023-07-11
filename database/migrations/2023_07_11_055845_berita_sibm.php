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
        Schema::create('berita', function (Blueprint $table) {
            $table->increments('id_berita');
            $table->char('judul_berita',100);
            $table->char('konten_berita',100);
            $table->char('thumbnail_berita',20);
            $table->tinyInteger('berita_utama',1);
            $table->tinyInteger('status_berita',1);           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berita');
    }
};
