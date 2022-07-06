<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       $admin    =  Role::create(['name' => 'Admin']);
       $egresado =  Role::create(['name' => 'Egresado']);

       Permission::create(['name' => 'lista.admin'])->assignRole($admin);
       Permission::create(['name' => 'store.admin'])->assignRole($admin);
       Permission::create(['name' => 'update.admin'])->assignRole($admin);
       Permission::create(['name' => 'create.admin'])->assignRole($admin);

       Permission::create(['name' => 'lista.egresado'])->assignRole($admin);
       Permission::create(['name' => 'store.egresado'])->assignRole($admin);
       Permission::create(['name' => 'update.egresado'])->assignRole($admin);
       Permission::create(['name' => 'create.egresado'])->assignRole($admin);

       Permission::create(['name' => 'realizadas.encuesta'])->assignRole($admin);
       Permission::create(['name' => 'add.encuesta'])->assignRole($egresado);

       Permission::create(['name' => 'lista.estadistica'])->assignRole($admin);



    }
}
