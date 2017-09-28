<?php

use Illuminate\Database\Seeder;
use App\User;

class CreateAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User();

        $admin->name = 'Admin';
        $admin->email = 'mp@example.com';
        $admin->password = bcrypt('admin');
        $admin->confirmed = 1;
        $admin->status = 1;
        $admin->save();
        $admin->assignRole('Admin'); 
    }
}
