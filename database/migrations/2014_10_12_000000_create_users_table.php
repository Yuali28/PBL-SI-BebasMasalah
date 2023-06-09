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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id_user');
            $table->string('username');             // username mahasiswa == NIM, pegawai == NIK
                                                    // if we store same value in both of the respective tables, wouldn't it be redundant?
                                                    // we should choose either security or storage efficiency.
                                                    // we could use fk, but dunno abt the speed.
            $table->string('email')->unique();
            $table->string('password');
            $table->tinyInteger('role')->default(0);    // 0 = Mahasiswa, 1 = Kajur, 2 = Prodi, 3 =  TA, 4 = Keuangan, 5 = Perpus
            //one of the following FKs must be filled, don't fill more than one.
            $table->unsignedInteger('fk_mahasiswa')->nullable();
            $table->unsignedInteger('fk_pegawai')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
