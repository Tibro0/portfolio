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
        Tag::insert([
            [
                'icon' => 'bi bi-database',
                'name' => 'Laravel Developer',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'icon' => 'bi bi-code-slash',
                'name' => 'Web Development',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'icon' => 'bi bi-pc-display-horizontal',
                'name' => 'Web Design',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
