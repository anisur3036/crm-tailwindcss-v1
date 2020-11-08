<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = 'Samuel Jackson';
        $user->email = 'samueljackson@jackson.com';
        $user->password = bcrypt('password');
        $user->save();
        $user->roles()->attach(Role::where('name', 'user')->first());

        $admin = new User;
        $admin->name = 'Neo Ighodaro';
        $admin->email = 'neo@creativitykills.co';
        $admin->password = bcrypt('password');
        $admin->save();
        $admin->roles()->attach(Role::where('name', 'admin')->first());
    }
}
