<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class UsersClientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_clients')->insert([
            'name'                  => 'Carlos Amaro',
            'email'                 => 'carlos@gmail.com',
            'password'              => '$2y$10$9JJmIAWJzOpJBeMTJy7lB.bjnSZaZSxVHiXWTyWTeo1LKTZszC5c6',
            'status'                => false,
            'cliente_confirmado'    => false,
            'created_at'            => Carbon::now(),
        ]);
    }
}
