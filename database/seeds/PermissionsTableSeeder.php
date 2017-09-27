<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions  = ['view', 'delete', 'create', 'edit'];

        foreach($permissions as $perm) {
            $permission = Permission::create(['name' => $perm . '_role']);
            $permission->save();
        }

        foreach($permissions as $perm) {
            $permission = Permission::create(['name' => $perm . '_permission']);
            $permission->save();
        }

        foreach($permissions as $perm) {
            $permission = Permission::create(['name' => $perm . '_tag']);
            $permission->save();
        }

    }
}
