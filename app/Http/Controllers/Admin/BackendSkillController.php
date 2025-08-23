<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SkillCardTitle;
use Illuminate\Http\Request;

class BackendSkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skillCardTitleOne = SkillCardTitle::where('id', 1)->first();
        return view('admin.skill.backend.index', compact('skillCardTitleOne'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function backendSkillCardTitleUpdate(Request $request, string $id)
    {
        $request->validate([
            'icon'=> ['required', 'max:255'],
            'title'=>['required', 'max:255']
        ]);

        $skillCardTitleOne = SkillCardTitle::findOrFail($id);
        $skillCardTitleOne->icon = $request->icon;
        $skillCardTitleOne->title = $request->title;
        $skillCardTitleOne->save();

        return redirect()->back()->with('toast', [
            'type' => 'success',
            'message' => 'Updated Successfully!'
        ]);
    }
}
