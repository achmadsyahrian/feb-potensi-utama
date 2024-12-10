<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Menambahkan Kategori Default
        Category::create([
            'name' => 'Ekonomi Syariah',
            'slug' => 'ekonomi-syariah',
        ]);

        Category::create([
            'name' => 'Perbankan Syariah',
            'slug' => 'perbankan-syariah',
        ]);

        Category::create([
            'name' => 'Akuntansi',
            'slug' => 'akuntansi',
        ]);

        Category::create([
            'name' => 'Manajemen',
            'slug' => 'manajemen',
        ]);
        
        Category::create([
            'name' => 'Akademik',
            'slug' => 'akademik',
        ]);
        
        Category::create([
            'name' => 'Mahasiswa',
            'slug' => 'mahasiswa',
        ]);

        Category::create([
            'name' => 'Pengembangan Karir',
            'slug' => 'pengembangan-karir',
        ]);

        Category::create([
            'name' => 'Kegiatan Ekstrakurikuler',
            'slug' => 'kegiatan-ekstrakurikuler',
        ]);

        Category::create([
            'name' => 'Skripsi',
            'slug' => 'skripsi',
        ]);

        Category::create([
            'name' => 'PKL',
            'slug' => 'pkl',
        ]);

        Category::create([
            'name' => 'Perwalian',
            'slug' => 'perwalian',
        ]);

        Category::create([
            'name' => 'Krs',
            'slug' => 'krs',
        ]);

        Category::create([
            'name' => 'Ujian',
            'slug' => 'ujian',
        ]);
    }
}
