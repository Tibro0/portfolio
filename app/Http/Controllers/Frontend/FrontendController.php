<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\AcademicExcellence;
use App\Models\AnimationText;
use App\Models\BackendSkill;
use App\Models\Certification;
use App\Models\CloudSkill;
use App\Models\Counter;
use App\Models\DesignSkill;
use App\Models\FrontendSkill;
use App\Models\ProfessionalJourney;
use App\Models\SkillCardTitle;
use App\Models\SocialIcon;
use App\Models\Tag;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $animationTexts = AnimationText::all();
        $tags = Tag::all();
        $socialIcons = SocialIcon::all();
        $counters = Counter::all();
        $about = About::first();
        $skillCardTitleOne = SkillCardTitle::where('id', 1)->first();
        $skillCardTitleTwo = SkillCardTitle::where('id', 2)->first();
        $skillCardTitleThree = SkillCardTitle::where('id', 3)->first();
        $skillCardTitleFour = SkillCardTitle::where('id', 4)->first();
        $frontendSkills = FrontendSkill::all();
        $backendSkills = BackendSkill::all();
        $designSkills = DesignSkill::all();
        $cloudSkills = CloudSkill::all();
        $certifications = Certification::all();
        $professionalJourneys = ProfessionalJourney::all();
        $academicExcellences = AcademicExcellence::all();
        return view('frontend.home.index', compact('animationTexts', 'tags', 'socialIcons', 'counters', 'about','skillCardTitleOne', 'skillCardTitleTwo', 'skillCardTitleThree', 'skillCardTitleFour', 'frontendSkills', 'backendSkills', 'designSkills', 'cloudSkills', 'certifications', 'professionalJourneys', 'academicExcellences'));
    }
}
