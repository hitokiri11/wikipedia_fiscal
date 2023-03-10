<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersSeeder::class);
        $this->call(UsersClientsSeeder::class);
        $this->call(WikiSeeeder::class);
        $this->call(SeederTablaPermisos::class);
    }
}
