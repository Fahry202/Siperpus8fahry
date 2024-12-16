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
        Book::create([
            "title" => "Pemrograman Modern",
            "author" => "John Doe",
            "year" => 2024,
            "publisher" => "Tech Publisher",
            "city" => "Bandung",
            "cover" => "public/new_cover.jpg",
            "bookshelf_id" => 1
        ]);

        Book::create([
            "title" => "Teknologi Masa Depan",
            "author" => "Jane Smith",
            "year" => 2023,
            "publisher" => "Future Books",
            "city" => "Jakarta",
            "cover" => "public/future_cover.jpg",
            "bookshelf_id" => 2
        ]);

        Book::create([
            "title" => "Belajar AI",
            "author" => "Alan Turing",
            "year" => 2022,
            "publisher" => "AI Press",
            "city" => "Surabaya",
            "cover" => "public/ai_cover.jpg",
            "bookshelf_id" => 3
        ]);
    }
}
