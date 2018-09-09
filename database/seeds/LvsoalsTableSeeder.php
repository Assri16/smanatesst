<?php

use Illuminate\Database\Seeder;

class LvsoalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\lvsoal::insert([
            [
              'lvsoal'  => 'Sulit',
             
            ],
             [
              'lvsoal'  => 'Sedang',
            ],
              [
              'lvsoal'  => 'Mudah',
             
            ],
        ]);
    }
}
