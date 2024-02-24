<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('adminadmin'),
            'role' => 'admin',
            'nis' => 002011211
        ]);

        User::create([
            'name' => 'user',
            'email' => 'user@user.com',
            'password' => bcrypt('user123'),
            'role' => 'user',
            'nis' => 539211222,
            'kelas' => 'XII Tel 12'
        ]);

        User::create([
            'name' => 'Kgswahyu',
            'email' => 'kgs@gmail.com',
            'password' => bcrypt('kgs'),
            'role' => 'user',
            'nis' => 539211223,
            'kelas' => 'XII Tel 13',
        ]);
    }
}
