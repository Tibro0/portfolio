<?php

namespace Database\Seeders;

use App\Models\SectionTitle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectionTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SectionTitle::insert([
            [
                'key'=> 'professional_expertise_title',
                'value'=> 'Professional Expertise',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'key'=> 'professional_expertise_description',
                'value'=> 'Strategic leader driving tech innovation & growth. Expert in scaling startups to enterprises. Transformative results through agile execution & cross-functional team leadership.',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'key'=> 'professional_journey_title',
                'value'=> 'Professional Journey',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'key'=> 'professional_journey_description',
                'value'=> 'I transform complex challenges into innovative digital solutions. Leading agile teams from startup ventures to corporate strategy, I bridge the gap between vision and execution to drive measurable growth.',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'key'=> 'academic_excellences_title',
                'value'=> 'Academic Excellence',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'key'=> 'academic_excellences_description',
                'value'=> 'Distinguished by rigorous research, high-impact publications, and a relentless pursuit of knowledge. Proven ability to synthesize complex concepts into innovative, field-advancing contributions.',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'key'=> 'about_main_title',
                'value'=> 'About',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'key'=> 'about_sub_title',
                'value'=> 'Tech leader driving growth through innovative solutions and transformative execution.',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
        ]);
    }
}
