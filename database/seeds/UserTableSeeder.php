<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::insert([
            [
              'name'  => 'Ahmad',
              'email' => 'ahmad@mail.com',
              'password' => bcrypt('123456'),
            ],
        ]);
        \App\UserRole::insert([
            [
              'user_id'  => '1',
              'role_id' => '1',
            ],
        ]);
    }
}
