<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin users
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
            'username' => 'Satria01',
            'name' => 'Dwi Satria',
            'email' => 'dwisatria@kraton.com',
            'kelas' => '1',
            'tanggal_lahir' => '1990-05-15',
            'password' => bcrypt('kraton01'),
            'role' => 'Admin',
        ]);
<<<<<<< HEAD
=======

        // Siswa users
        User::create([
            'username' => 'Baga011',
            'name' => 'Bagas Kara Sanjaya',
            'email' => 'bagas@kraton.com',
            'kelas' => '1',
            'tanggal_lahir' => '2008-03-14',
            'password' => bcrypt('kraton01'),
            'role' => 'Siswa',
        ]);

        User::create([
            'username' => 'Keisya',
            'name' => 'Ayu Keisya',
            'email' => 'keisya@kraton.com',
            'kelas' => '1',
            'tanggal_lahir' => '2009-06-19',
            'password' => bcrypt('kraton01'),
            'role' => 'Siswa',
            'email_orang_tua' => 'ngurahsucahya1@kraton.com',
        ]);

        User::create([
            'username' => 'Rama01',
            'name' => 'Rama Wijaya',
            'email' => 'rama@kraton.com',
            'kelas' => '2',
            'tanggal_lahir' => '2007-02-20',
            'password' => bcrypt('kraton01'),
            'role' => 'Siswa',
            'email_orang_tua' => 'widya@kraton.com',
        ]);

        User::create([
            'username' => 'Putri01',
            'name' => 'Putri Ananda',
            'email' => 'putri@kraton.com',
            'kelas' => '3',
            'tanggal_lahir' => '2006-11-25',
            'password' => bcrypt('kraton01'),
            'role' => 'Siswa',
            'email_orang_tua' => 'ari@kraton.com',
        ]);

        // Orang Tua users
        User::create([
            'username' => 'ngurahsucahya01',
            'name' => 'Ngurah Sucahya',
            'email' => 'ngurahsucahya1@kraton.com',
            'kelas' => '1',
            'tanggal_lahir' => '1990-05-15',
            'password' => bcrypt('kraton01'),
            'role' => 'Orang Tua',
        ]);

        User::create([
            'username' => 'widya01',
            'name' => 'Widya Sari',
            'email' => 'widya@kraton.com',
            'kelas' => '1',
            'tanggal_lahir' => '1985-08-30',
            'password' => bcrypt('kraton01'),
            'role' => 'Orang Tua',
        ]);

        User::create([
            'username' => 'ari01',
            'name' => 'Ari Pratama',
            'email' => 'ari@kraton.com',
            'kelas' => '1',
            'tanggal_lahir' => '1982-04-12',
            'password' => bcrypt('kraton01'),
            'role' => 'Orang Tua',
        ]);

        User::create([
            'username' => 'Admin03',
            'name' => 'Rina Pratiwi',
            'email' => 'rina@kraton.com',
            'kelas' => '1',
            'tanggal_lahir' => '1985-02-12',
            'password' => bcrypt('kraton03'),
            'role' => 'Admin',
        ]);

        User::create([
            'username' => 'Admin04',
            'name' => 'Andi Wijaya',
            'email' => 'andi@kraton.com',
            'kelas' => '1',
            'tanggal_lahir' => '1987-06-23',
            'password' => bcrypt('kraton04'),
            'role' => 'Admin',
        ]);

        // Siswa users
        User::create([
            'username' => 'Siswa03',
            'name' => 'Siti Aisyah',
            'email' => 'siti@kraton.com',
            'kelas' => '2',
            'tanggal_lahir' => '2010-08-14',
            'password' => bcrypt('kraton03'),
            'role' => 'Siswa',
            'email_orang_tua' => 'orangtua_siti@kraton.com',
        ]);

        User::create([
            'username' => 'Siswa04',
            'name' => 'Budi Santoso',
            'email' => 'budi@kraton.com',
            'kelas' => '3',
            'tanggal_lahir' => '2009-11-30',
            'password' => bcrypt('kraton04'),
            'role' => 'Siswa',
            'email_orang_tua' => 'orangtua_budi@kraton.com',
        ]);

        // Orang Tua users
        User::create([
            'username' => 'Orangtua_Siti',
            'name' => 'Wahyu Pratama',
            'email' => 'orangtua_siti@kraton.com',
            'kelas' => '1',
            'tanggal_lahir' => '1980-04-05',
            'password' => bcrypt('kraton03'),
            'role' => 'Orang Tua',
        ]);

        User::create([
            'username' => 'Orangtua_Budi',
            'name' => 'Asep Sunandar',
            'email' => 'orangtua_budi@kraton.com',
            'kelas' => '1',
            'tanggal_lahir' => '1982-10-20',
            'password' => bcrypt('kraton04'),
            'role' => 'Orang Tua',
        ]);
>>>>>>> 86f9beee26fca756625136e95ecb18c90cc43baf
    }
}
