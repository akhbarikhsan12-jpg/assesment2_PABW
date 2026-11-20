<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::firstOrCreate(
            ['email' => 'admin@smartfacility.test'],
            [
                'name' => 'Administrator Kampus',
                'password' => Hash::make('password'),
                'role' => 'admin',
            ]
        );

        $pemohon1 = User::firstOrCreate(
            ['email' => 'pemohon@gmail.test'],
            [
                'name' => 'Budi Santoso',
                'password' => Hash::make('password'),
                'role' => 'pemohon',
            ]
        );

        $pemohon2 = User::firstOrCreate(
            ['email' => 'siti@gmail.test'],
            [
                'name' => 'Siti Rahma',
                'password' => Hash::make('password'),
                'role' => 'pemohon',
            ]
        );
    }
}
