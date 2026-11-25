<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class BlogSeeder extends Seeder
{
    public function run(): void
    {

        $blogs = [
            [
                'judul' => 'Validasi Form Menggunakan Laravel',
                'kategori' => 'Framework',
                'gambar' => 'img/laravel.png',
                'ringkasan' => 'Pelajari cara melakukan validasi input pengguna untuk menjaga keamanan dan kualitas data aplikasi.',
                'link' => 'https://laravel.com/docs/validation',
                'tanggal_terbit' => '2026-11-15',
            ],
            [
                'judul' => 'Mengenal Relasi Database pada Eloquent',
                'kategori' => 'Database',
                'gambar' => 'img/laravel.png',
                'ringkasan' => 'Memahami hubungan antara tabel menggunakan fitur relationship pada Laravel Eloquent.',
                'link' => 'https://laravel.com/docs/eloquent-relationships',
                'tanggal_terbit' => '2026-11-17',
            ],
            [
                'judul' => 'Membuat Komponen Reusable dengan Blade',
                'kategori' => 'Framework',
                'gambar' => 'img/laravel.png',
                'ringkasan' => 'Membangun komponen tampilan yang dapat digunakan kembali untuk membuat kode lebih terstruktur.',
                'link' => 'https://laravel.com/docs/blade',
                'tanggal_terbit' => '2026-11-19',
            ],
            [
                'judul' => 'Mengenal Dasar Version Control Git',
                'kategori' => 'Web Development',
                'gambar' => 'img/tailwind.png',
                'ringkasan' => 'Mempelajari dasar Git untuk mengelola perubahan kode dan bekerja bersama dalam sebuah project.',
                'link' => 'https://git-scm.com/doc',
                'tanggal_terbit' => '2026-11-21',
            ],
            [
                'judul' => 'Membangun Aplikasi Web yang Responsif',
                'kategori' => 'Web Development',
                'gambar' => 'img/tailwind.png',
                'ringkasan' => 'Mengenal teknik pengembangan website agar tampil optimal pada perangkat desktop maupun smartphone.',
                'link' => 'https://tailwindcss.com/docs',
                'tanggal_terbit' => '2026-11-23',
            ],
        ];

        foreach ($blogs as $blog) {

        // Mengambil user secara random
        $user = User::inRandomOrder()->first();

        // Jika belum ada user, buat user baru
        if (!$user) {
            $user = User::factory()->create([
                'name' => 'Admin Blog',
                'email' => 'adminblog@example.com',
            ]);
        }

        DB::table('table_blog')->updateOrInsert(
            ['judul' => $blog['judul']],
            array_merge($blog, [
                'user_id' => $user->id,
                'created_at' => now(),
                'updated_at' => now(),
            ])
        );
        }
    }
}