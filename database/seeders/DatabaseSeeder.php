<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call(SeederA::class);
        $this->call(SeederB::class);
        $this->call(SeederC::class);
        $this->call(SeederD::class);
        $this->call(SeederE::class);
        $this->call(SeederF::class);
    }
}
