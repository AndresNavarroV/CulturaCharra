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
     */
    public function run(): void
    {
        $role1 = Role::create(['name' => 'Ing_Sonido']);
        $role2 = Role::create(['name' => 'Mariachi']);

        //Permission::create(['name' => 'dashboard']) -> assignRole([$role1]);
        Permission::create(['name' => 'dashboard']) -> syncRoles([$role1, $role2]);

        Permission::create(['name' => 'eventos.index'])-> syncRoles([$role1, $role2]);
        Permission::create(['name' => 'eventos.create'])-> syncRoles([$role1, $role2]);
        Permission::create(['name' => 'eventos.edit'])-> syncRoles([$role1, $role2]);
        Permission::create(['name' => 'eventos.destroy'])-> syncRoles([$role1, $role2]);

        Permission::create(['name' => 'articulos.sonido.index'])-> syncRoles([$role1, $role2]);
        Permission::create(['name' => 'articulos.sonido.create'])-> syncRoles([$role1, $role2]);  
        Permission::create(['name' => 'articulos.sonido.edit'])-> syncRoles([$role1, $role2]);
        Permission::create(['name' => 'articulos.sonido.destroy'])-> syncRoles([$role1, $role2]);
    }
}
