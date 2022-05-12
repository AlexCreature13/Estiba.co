<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'SuperAdmin']);
        $role2 = Role::create(['name' => 'Admin']);
        $role3 = Role::create(['name' => 'Emprendedor']);
        $role4 = Role::create(['name' => 'Cliente']);

        Permission::create(['name'=>'productos.index'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'productos.create'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'productos.edit'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'productos.destroy'])->syncRoles([$role1,$role2]);

        Permission::create(['name'=>'categorias.index'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'categorias.create'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'categorias.edit'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'categorias.destroy'])->syncRoles([$role1,$role2]);

        Permission::create(['name'=>'idTypes.index'])->assignRole($role1);
        Permission::create(['name'=>'idTypes.create'])->assignRole($role1);
        Permission::create(['name'=>'idTypes.edit'])->assignRole($role1);
        Permission::create(['name'=>'idTypes.destroy'])->assignRole($role1);

        Permission::create(['name'=>'users.index'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'users.create'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'users.edit'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'users.destroy'])->syncRoles([$role1,$role2]);

        Permission::create(['name'=>'userTypes.index'])->assignRole($role1);
        Permission::create(['name'=>'userTypes.create'])->assignRole($role1);
        Permission::create(['name'=>'userTypes.edit'])->assignRole($role1);
        Permission::create(['name'=>'userTypes.destroy'])->assignRole($role1);

        Permission::create(['name'=>'portal.index'])->syncRoles([$role1,$role2,$role3,$role4]);
        Permission::create(['name'=>'portal.show'])->syncRoles([$role1,$role2,$role3,$role4]);
        Permission::create(['name'=>'portal.edit'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'portal.cretae'])->syncRoles([$role1,$role2]);
    }
}
