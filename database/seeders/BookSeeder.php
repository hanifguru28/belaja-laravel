<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 100; $i++) {
        Book::create([
            'judul' => 'Kumpulan Sajak',
            'tanggal_terbit' => date('Y-m-d'),
            'jumlah_halaman' => 65,
            'cover' => 'cover.jpg'
        ]);
        }
    }
}
