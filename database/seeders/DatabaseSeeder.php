<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Akun Guru (Tetap ada di sini sebagai master data)
        User::updateOrCreate(
            ['username' => 'quadralearn'], // Cek berdasarkan username biar tidak duplikat
            [
                'name' => 'Teacher',
                'email' => 'teacher@quadralearn.com',
                'password' => bcrypt('guru12345'),
                'role' => \App\Enum\Role::TEACHER->value,
                'nis' => null,
            ]
        );

        // 2. Akun Pribadi Anda (Opsional: Masukkan di sini agar selalu aman)
        User::updateOrCreate(
            ['username' => '010202'], // Ganti dengan username akun Anda saat ini
            [
                'name' => 'Fitri', // Ganti dengan nama Anda
                'email' => 'nurfitriy0201@gmail.com', // Ganti dengan email Anda
                'password' => bcrypt('171422'), // Ganti dengan password Anda
                'role' => \App\Enum\Role::STUDENT->value, 
                'nis' => '12345', // Ganti dengan NIS Anda
            ]
        );

        // 3. Otomatis Membuat atau Memperbarui 20 Akun Siswa Tambahan
        for ($i = 1; $i <= 20; $i++) {
            User::updateOrCreate(
                ['username' => 'siswa' . $i], 
                [
                    'name' => 'Siswa ' . $i,
                    'email' => 'siswa' . $i . '@quadralearn.com',
                    'password' => bcrypt('siswa123'), 
                    'role' => \App\Enum\Role::STUDENT->value, 
                    'nis' => '260' . str_pad($i, 2, '0', STR_PAD_LEFT), // Hasil NIS: 26001, 26002, dst.
                ]
            );
        }
    }
}