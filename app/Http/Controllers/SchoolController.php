<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSchoolRequest;
use App\Http\Requests\UpdateSchoolRequest;
use App\Models\School;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('school.index', [
         'schools' => School::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('school.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSchoolRequest $request)
    {   
        $school = new School($request->validated());
        $school->save();
        return redirect()->route('schools.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(School $school)
    {
        return view('school.show', [
            'school' => $school
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(School $school)
    {
        return view('school.edit', [
            'school' => $school,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSchoolRequest $request, School $school)
    {
        $school->fill($request->validated());
        $school->save();
        return redirect()->route('schools.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(School $school)
    {
        $school->delete();
        return redirect()->route('schools.index');
    }
}
