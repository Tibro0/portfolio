<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProfessionalJourney;
use Illuminate\Http\Request;

class ProfessionalJourneyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $professionalJourneys = ProfessionalJourney::all();
        return view('admin.resume.professional-journey.index', compact('professionalJourneys'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.resume.professional-journey.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'year'=> ['required', 'max:255'],
            'title'=> ['required', 'max:255'],
            'sub_title'=> ['required', 'max:255'],
            'description'=> ['required', 'max:255'],
        ]);

        $professionalJourney = new ProfessionalJourney();
        $professionalJourney->year = $request->year;
        $professionalJourney->title = $request->title;
        $professionalJourney->sub_title = $request->sub_title;
        $professionalJourney->description = $request->description;
        $professionalJourney->save();

        return redirect()->route('admin.professional-journey.index')->with('toast', [
            'type' => 'success',
            'message' => 'Created Successfully!'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $professionalJourney = ProfessionalJourney::findOrFail($id);
        return view('admin.resume.professional-journey.edit', compact('professionalJourney'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'year'=> ['required', 'max:255'],
            'title'=> ['required', 'max:255'],
            'sub_title'=> ['required', 'max:255'],
            'description'=> ['required', 'max:255'],
        ]);

        $professionalJourney = ProfessionalJourney::findOrFail($id);
        $professionalJourney->year = $request->year;
        $professionalJourney->title = $request->title;
        $professionalJourney->sub_title = $request->sub_title;
        $professionalJourney->description = $request->description;
        $professionalJourney->save();

        return redirect()->route('admin.professional-journey.index')->with('toast', [
            'type' => 'success',
            'message' => 'Update Successfully!'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ProfessionalJourney::findOrFail($id)->delete();

        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
}
