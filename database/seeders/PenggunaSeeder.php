<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('penggunas')->insert([
            'nama' => 'Munzir',
            'ic' => '950206115495',
            'alamat' => 'Nilai, Negeri Sembilan',
            'telefon' => '0109099276',
            'jantina' => 'Lelaki',
            'emel' => 'munzir@map2u.com.my',
            'jawatan' => 'Programmer',
            'kementerian' => 'Map2u Sdn. Bhd.',
            'status' => 'Aktif'
        ]);
    }
}
