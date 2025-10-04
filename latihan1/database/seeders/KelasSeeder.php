<?php

namespace Database\Seeders;

use App\Models\Clas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Clas::create(['nama_kelas' => 'Kelas A']);
        Clas::create(['nama_kelas' => 'Kelas B']);
        Clas::create(['nama_kelas' => 'Kelas C']);
    }
}

