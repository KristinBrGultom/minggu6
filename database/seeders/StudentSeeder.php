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
            'nim' => '2031710042',
            'name' => 'Sarindah Karina Br Sitepu',
            'class' => 'MI2F',
            'department' => 'Teknologi Informasi',
            'phone_number' => '082267550842',
        ]);
        DB::table('students')->insert([
            'nim' => '2031710160',
            'name' => 'Achmad Nova Ardiansyah',
            'class' => 'MI2F',
            'department' => 'Teknologi Informasi',
            'phone_number' => '081997122673',
        ]);
        DB::table('students')->insert([
            'nim' => '2031710026',
            'name' => 'Aisyah Ulil Maulina',
            'class' => 'MI2F',
            'department' => 'Teknologi Informasi',
            'phone_number' => '980571729',
        ]);
    }
}

