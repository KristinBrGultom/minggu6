<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'nim' => '2031710107',
            'name' => 'Kristin Br Gultom',
            'class' => 'MI2F',
            'department' => 'Teknologi Informasi',
            'phone_number' => '081264336858',
        ]);
        DB::table('students')->insert([
            'nim' => '2031710094',
            'name' => 'Lailatul Mufida',
            'class' => 'MI2F',
            'department' => 'Teknologi Informasi',
            'phone_number' => '085784739251',
        ]);
        DB::table('students')->insert([
            'nim' => '2031710168',
            'name' => 'M.Afada Nur Saiva Syahira',
            'class' => 'MI2F',
            'department' => 'Teknologi Informasi',
            'phone_number' => '089622388293',
        ]);
    }
}

