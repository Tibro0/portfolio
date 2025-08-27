<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Testimonial::insert([
            [
                'image' => 'frontend/assets/img/person/person-f-1.webp',
                'name' => 'Jane Smith',
                'designation' => 'Book Enthusiast',
                'description' => 'Proin eget tortor risus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Nulla quis lorem ut libero malesuada feugiat.',
                'ratting' => '5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => 'frontend/assets/img/person/person-m-2.webp',
                'name' => 'Michael Johnson',
                'designation' => 'Sci-Fi Blogger',
                'description' => 'Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Cras ultricies ligula sed magna dictum porta. Vestibulum ante ipsum primis in faucibus orci luctus.',
                'ratting' => '5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => 'frontend/assets/img/person/person-f-3.webp',
                'name' => 'Emily Davis',
                'designation' => 'Book Club President',
                'description' => 'Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta. Donec sollicitudin molestie malesuada.',
                'ratting' => '5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => 'frontend/assets/img/person/person-m-4.webp',
                'name' => 'Robert Wilson',
                'designation' => 'Literary Reviewer',
                'description' => 'Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam id dui posuere blandit. Lorem ipsum dolor sit amet, consectetur.',
                'ratting' => '5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
