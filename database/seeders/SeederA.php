<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SeederA extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // ==================== Users ====================
        DB::table('users')->insert([
            'username' => 'kjr1',
            'email' => 'pgw1@institusi.id',
            'password' => bcrypt('password'),
            'role' => '1',
        ]);

        DB::table('users')->insert([
            'username' => 'kjr2',
            'email' => 'pgw2@institusi.id',
            'password' => bcrypt('password'),
            'role' => '1',
        ]);

        DB::table('users')->insert([
            'username' => 'apd1-1',
            'email' => 'pgw3@institusi.id',
            'password' => bcrypt('password'),
            'role' => '2',
        ]);

        DB::table('users')->insert([
            'username' => 'apd1-2',
            'email' => 'pgw4@institusi.id',
            'password' => bcrypt('password'),
            'role' => '2',
        ]);

        DB::table('users')->insert([
            'username' => 'ata1',
            'email' => 'pgw5@institusi.id',
            'password' => bcrypt('password'),
            'role' => '3',
        ]);

        DB::table('users')->insert([
            'username' => 'keu',
            'email' => 'pgw6@institusi.id',
            'password' => bcrypt('password'),
            'role' => '4',
        ]);

        DB::table('users')->insert([
            'username' => 'prp',
            'email' => 'pgw7@institusi.id',
            'password' => bcrypt('password'),
            'role' => '5',
        ]);

        DB::table('users')->insert([
            'username' => 'mhs1-1',
            'email' => 'mhs1@institusi.id',
            'password' => bcrypt('password'),
            'role' => '0',
        ]);

        DB::table('users')->insert([
            'username' => 'mhs1-2',
            'email' => 'mhs2@institusi.id',
            'password' => bcrypt('password'),
            'role' => '0',
        ]);

        DB::table('users')->insert([
            'username' => 'ata2',
            'email' => 'pgw8@institusi.id',
            'password' => bcrypt('password'),
            'role' => '3',
        ]);

        DB::table('users')->insert([
            'username' => 'mhs1-3',
            'email' => 'mhs3@institusi.id',
            'password' => bcrypt('password'),
            'role' => '0',
        ]);

        DB::table('users')->insert([
            'username' => 'mhs1-4',
            'email' => 'mhs4@institusi.id',
            'password' => bcrypt('password'),
            'role' => '0',
        ]);

        DB::table('users')->insert([
            'username' => 'mhs1-5',
            'email' => 'mhs5@institusi.id',
            'password' => bcrypt('password'),
            'role' => '0',
        ]);

        DB::table('users')->insert([
            'username' => 'mhs2-1',
            'email' => 'mhs6@institusi.id',
            'password' => bcrypt('password'),
            'role' => '0',
        ]);

        DB::table('users')->insert([
            'username' => 'mhs2-2',
            'email' => 'mhs7@institusi.id',
            'password' => bcrypt('password'),
            'role' => '0',
        ]);

        DB::table('users')->insert([
            'username' => 'mhs2-3',
            'email' => 'mhs8@institusi.id',
            'password' => bcrypt('password'),
            'role' => '0',
        ]);

        DB::table('users')->insert([
            'username' => 'mhs2-4',
            'email' => 'mhs9@institusi.id',
            'password' => bcrypt('password'),
            'role' => '0',
        ]);

        DB::table('users')->insert([
            'username' => 'mhs2-5',
            'email' => 'mhs10@institusi.id',
            'password' => bcrypt('password'),
            'role' => '0',
        ]);
    }
}
