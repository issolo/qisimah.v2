<?php

use Illuminate\Database\Seeder;

class ArtistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Artist::create([
            'full_name' => 'Michael Asante',
            'nick_name' => 'Sarkodie',
            'search_box' => 'sarkodie',
            'qisimah_id' => uniqid()
        ]);

        \App\Artist::create([
            'full_name' => 'Charles Nii Armah',
            'nick_name' => 'Shatta Wale',
            'search_box' => 'shatta wale',
            'qisimah_id' => uniqid()
        ]);

        \App\Artist::create([
            'full_name' => 'Livingston Stone',
            'nick_name' => 'StoneBwoy',
            'search_box' => 'stonebwoy',
            'qisimah_id' => uniqid()
        ]);

        \App\Artist::create([
            'full_name' => 'Yaw Sarpong',
            'nick_name' => 'Yaw Berk',
            'search_box' => 'yaw berk',
            'qisimah_id' => uniqid()
        ]);

        \App\Artist::create([
            'full_name' => 'Kuami Eugene Olege',
            'nick_name' => 'Kuami Eugene',
            'search_box' => 'kuami eugene',
            'qisimah_id' => uniqid()
        ]);

        \App\Artist::create([
            'full_name' => 'Alfred Quaye',
            'nick_name' => 'Smokey Beatz',
            'search_box' => 'smokey beatz',
            'qisimah_id' => uniqid()
        ]);
    }
}
