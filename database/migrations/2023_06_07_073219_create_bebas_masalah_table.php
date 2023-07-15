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
        Schema::create('bebas_masalah', function (Blueprint $table) {   // This table could be merged with mahasiswa
            $table->increments('id_bm');
            $table->year('tahun_lulus');

            // perpus
            $table->boolean('status_perpus')->default(0);
            $table->char('note_perpus', 100)->default('-');
            $table->dateTimeTz('update_note_perpus')->default(now());

            // keuangan
            $table->boolean('status_keuangan')->default(0);
            $table->char('note_keuangan', 100)->default('-');
            $table->dateTimeTz('update_note_keuangan')->default(now());

            // TA
            $table->boolean('status_ta')->default(0);
            $table->char('lembar_persetujuan', 100)->nullable();
            $table->char('lembar_pengesahan', 100)->nullable();
            $table->char('lembar_konsultasi_dospem_1', 100)->nullable();
            $table->char('lembar_konsultasi_dospem_2', 100)->nullable();
            $table->char('lembar_revisi', 100)->nullable();
            $table->char('note_ta', 100)->default('-');
            $table->dateTimeTz('update_note_ta')->default(now());

            $table->unsignedInteger('fk_mahasiswa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bebas_masalah');
    }
};
