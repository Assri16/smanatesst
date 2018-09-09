<?php

use Illuminate\Database\Seeder;

class NamaujianTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         \App\namaujian::insert([
            [
              'namaujian'  => 'Ulangan Harian',
             
            ],
             [
              'Nama Ujian'  => 'Ujian Tengah Semester',
            ],
              [
              'Nama Ujian'  => 'Ujian Akhir Semester',
             
            ],
        ]);
    }
}
