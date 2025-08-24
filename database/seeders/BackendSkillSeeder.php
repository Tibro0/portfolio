<?php

namespace Database\Seeders;

use App\Models\BackendSkill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BackendSkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BackendSkill::insert([
            [
                'title' => 'PHP',
                'percentage' => '95',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Laravel',
                'percentage' => '95',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'MySQL',
                'percentage' => '94',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
