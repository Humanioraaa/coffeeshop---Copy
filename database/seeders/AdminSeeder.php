<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {

        $admin = User::firstOrCreate(
            ['email' => 'admin@example'],
            [
                'name' => 'Admin User',
                'password' => bcrypt('password'),
            ]
        );

        $admin->assignRole('admin');
    }
}
