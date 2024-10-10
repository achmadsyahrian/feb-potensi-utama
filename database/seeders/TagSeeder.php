<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tag::create([
            'name' => 'Ekonomi Syariah',
            'slug' => 'ekonomi-syariah',
        ]);

        Tag::create([
            'name' => 'Perbankan Syariah',
            'slug' => 'perbankan-syariah',
        ]);

        Tag::create([
            'name' => 'Akuntansi',
            'slug' => 'akuntansi',
        ]);

        Tag::create([
            'name' => 'Manajemen',
            'slug' => 'manajemen',
        ]);

        Tag::create([
            'name' => 'Kegiatan Mahasiswa',
            'slug' => 'kegiatan-mahasiswa',
        ]);

        Tag::create([
            'name' => 'Akademik',
            'slug' => 'akademik',
        ]);

        Tag::create([
            'name' => 'Fakultas',
            'slug' => 'fakultas',
        ]);

        Tag::create([
            'name' => 'Prodi',
            'slug' => 'prodi',
        ]);
    }
}
