<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(LvsoalsTableSeeder::class);
        $this->call(NamaujianTableSeeder::class);
        $this->call(KemampuansiswaTableSeeder::class);
        $this->call(RoleTableSeeder::class);
    }
}
