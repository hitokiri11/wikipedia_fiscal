<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Yorvin Valencia',
            'email' => 'yorvin@gmail.com',
            'password' => '$2y$10$9JJmIAWJzOpJBeMTJy7lB.bjnSZaZSxVHiXWTyWTeo1LKTZszC5c6'
        ]);
    }
}
