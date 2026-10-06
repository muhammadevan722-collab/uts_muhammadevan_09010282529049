<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Book;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin Perpustakaan',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password123'),
        ]);

        $fiksi = Category::create(['name' => 'Fiksi', 'description' => 'Buku novel dan cerita rekaan']);
        $nonFiksi = Category::create(['name' => 'Non-Fiksi', 'description' => 'Buku pengetahuan dan sejarah']);
        $teknologi = Category::create(['name' => 'Teknologi', 'description' => 'Buku pemograman dan komputer']);

        Book::create([
            'category_id' => $fiksi->id,
            'title' => 'Laskar Pelangi',
            'author' => 'Andrea Hirata',
            'publisher' => 'Bentang Pustaka',
            'year' => 2005,
            'stock' => 12
        ]);

        Book::create([
            'category_id' => $fiksi->id,
            'title' => 'Bumi Manusia',
            'author' => 'Pramoedya Ananta Toer',
            'publisher' => 'Hasta Mitra',
            'year' => 1980,
            'stock' => 8
        ]);

        Book::create([
            'category_id' => $teknologi->id,
            'title' => 'Mastering Laravel',
            'author' => 'Taylor Otwell',
            'publisher' => 'O\'Reilly Media',
            'year' => 2022,
            'stock' => 15
        ]);

        Book::create([
            'category_id' => $teknologi->id,
            'title' => 'Clean Code',
            'author' => 'Robert C. Martin',
            'publisher' => 'Prentice Hall',
            'year' => 2008,
            'stock' => 5
        ]);

        Book::create([
            'category_id' => $nonFiksi->id,
            'title' => 'Sapiens',
            'author' => 'Yuval Noah Harari',
            'publisher' => 'Harvill Secker',
            'year' => 2014,
            'stock' => 20
        ]);
    }
}