<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'username' => 'Sucahya01',
            'name' => 'Ngurah Sucahya',
            'email' => 'sucahya@kraton.com',
            'kelas' => '1',
            'tanggal_lahir' => '1990-05-15',
            'password' => bcrypt('kraton01'),
            'role' => 'Admin',
        ]);

        User::create([
            'username' => 'Sucahya02',
            'name' => 'Ngurah Sucahya Satria',
            'email' => 'sucahya2@kraton.com',
            'kelas' => '1',
            'tanggal_lahir' => '1990-05-15',
            'password' => bcrypt('kraton01'),
            'role' => 'Admin',
        ]);

        User::create([
            'username' => 'Sucahya03',
            'name' => 'Ngurah Sucahya',
            'email' => 'sucahya3@kraton.com',
            'kelas' => '1',
            'tanggal_lahir' => '1990-05-15',
            'password' => bcrypt('kraton01'),
            'role' => 'Siswa',
        ]);

        User::create([
            'username' => 'Sucahya04',
            'name' => 'Ngurah Sucahya',
            'email' => 'sucahya4@kraton.com',
            'kelas' => '1',
            'tanggal_lahir' => '1990-05-15',
            'password' => bcrypt('kraton01'),
            'role' => 'Siswa',
            'email_orang_tua' => 'ngurahsucahya1@kraton.com',
        ]);

        User::create([
            'username' => 'ngurahsucahya01',
            'name' => 'Ngurah Sucahya',
            'email' => 'ngurahsucahya1@kraton.com',
            'kelas' => '1',
            'tanggal_lahir' => '1990-05-15',
            'password' => bcrypt('kraton01'),
            'role' => 'Orang Tua',
        ]);
    }
}
