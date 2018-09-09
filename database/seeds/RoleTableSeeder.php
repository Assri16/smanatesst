<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Role::insert([
            [
              'role_name'  => 'Bg.Akademik',
             
            ],
             [
              'role_name'  => 'Guru',
            ],
              [
              'role_name'  => 'Siswa',
             
            ],
        ]);
    }
}
