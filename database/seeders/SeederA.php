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
            'username' => 'ata',
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
    }
}
