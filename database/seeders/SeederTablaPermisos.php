<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

//spatie
use Spatie\Permission\Models\Permission;

class SeederTablaPermisos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permisos  = [ 
            //tablaroles
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            //tabla blogs
            'blog-list',
            'blog-create',
            'blog-edit',
            'blog-delete',
            //tabla bots
            'bot-list',
            'bot-create',
            'bot-edit',
            'bot-delete'
        ];

        foreach($permisos as $permiso) {
            Permission::create(['name'=>$permiso]);
        }
    }

}
