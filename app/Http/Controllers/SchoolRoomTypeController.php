<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSchoolRoomTypeRequest;
use App\Http\Requests\UpdateSchoolRoomTypeRequest;
use App\Models\SchoolRoom;
use App\Models\SchoolRoomType;

class SchoolRoomTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('school.room-types.index', [
            'roomTypes' => SchoolRoomType::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('school.room-types.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSchoolRoomTypeRequest $request)
    {
        $school = new SchoolRoomType($request->validated());
        $school->save();
        return redirect()->route('room-types.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(SchoolRoomType $schoolRoomType)
    {
        return view('school.room-types.show', [
            'roomTypes' => $schoolRoomType
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($schoolRoomType)
    {

        $schoolRoomType = SchoolRoomType::find($schoolRoomType);
        return view('school.room-types.edit', [
            'roomType' => $schoolRoomType,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSchoolRoomTypeRequest $request, SchoolRoomType $schoolRoomType)
    {
        $schoolRoomType->fill($request->validated());
        $schoolRoomType->save();
        return redirect()->route('room-types.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SchoolRoomType $schoolRoomType)
    {
        $schoolRoomType->delete();
        return redirect()->route('room-types.index');
    }
}
