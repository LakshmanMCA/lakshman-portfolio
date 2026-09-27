<?php

namespace Database\Seeders;

use App\Models\AdminUser;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * CHANGE the email/password below before running in anything but local dev.
     */
    public function run(): void
    {
        AdminUser::updateOrCreate(
            ['email' => 'lakshman@developer.com'],
            [
                'name'              => 'Lakshman Pal',
                'username'          => 'lakshmanpal',
                'password'          => Hash::make('developer@lakshman'),
                'role'              => 'superadmin',
            ]
        );
    }
}