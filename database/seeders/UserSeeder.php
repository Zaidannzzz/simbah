<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@simbah.com',
            'password' => bcrypt('qwertyuiop'),
        ]);

        $admin->assignRole('admin');
        
        $user = User::create([
            'name' => 'User',
            'email' => 'user@simbah.com',
            'password' => bcrypt('asdfghjkl'),
        ]);

        $user->assignRole('user');
    }
}
