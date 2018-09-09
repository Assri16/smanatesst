<?php

use Illuminate\Database\Seeder;

class KemampuansiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\KemampuanSiswa::insert([
            [
              'kemampuan_siswa'  => 'Tinggi',
             
            ],
             [
              'kemampuan_siswa'  => 'Sedang',
            ],
              [
              'kemampuan_siswa'  => 'Rendah',
             
            ],
        ]);
    }
}
