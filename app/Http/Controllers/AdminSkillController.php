<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;

class AdminSkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skill = Skill::all();
        return view('admin.skill.index', compact('skill'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.skill.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        Skill::create($request->all());

        return redirect()->route('skill.index')->with('success', 'Form has been submited successfuly!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Skill $skill) // Model Binding
    {
        return view('admin.skill.show', compact('skill'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Skill $skill) // Model Binding
    {
        return view('admin.skill.edit', compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Skill $skill) // Model Binding
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $skill->update($request->all());

        return redirect()->route('skill.index')->with('success', 'Data has been updated successfuly!');;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skill $skill) // Model Binding
    {
        $skill->delete();

        return redirect()->route('skill.index')->with('delete', true);;
    }
}
