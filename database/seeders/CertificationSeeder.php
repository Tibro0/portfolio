<?php

namespace Database\Seeders;

use App\Models\Certification;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CertificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Certification::insert([
            [
                'title' => 'Laravel Developer',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'PHP Developer',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Web Developer',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Web Designer',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
