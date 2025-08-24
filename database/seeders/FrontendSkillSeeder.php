<?php

namespace Database\Seeders;

use App\Models\FrontendSkill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FrontendSkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FrontendSkill::insert([
            [
                'title' => 'HTML/CSS',
                'percentage' => '98',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'BOOTSTRAP5',
                'percentage' => '98',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'JavaScript',
                'percentage' => '95',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
