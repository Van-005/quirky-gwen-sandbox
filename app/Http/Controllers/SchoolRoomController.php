<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSchoolRoomRequest;
use App\Http\Requests\UpdateSchoolRoomRequest;
use App\Models\SchoolRoom;
use App\Models\SchoolRoomType;
use App\Models\Student;

class SchoolRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('school.school-rooms.index', [
            'schoolRooms' => SchoolRoom::all()
        ]);
    }

    // 'views/school-rooms/index';
    // 'views/school/school-rooms/index';
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('school.school-rooms.create',[
            'room_types' => SchoolRoomType::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSchoolRoomRequest $request)
    {
        $school = new SchoolRoom($request->validated());
        $school->save();
        return redirect()->route('school-rooms.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(SchoolRoom $room)
    {
        return view('school-rooms.show', [
            'schoolRooms' => $room
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SchoolRoom $room)
    {
        $schoolRoom = SchoolRoom::find($room);
        return view('school.school-rooms.edit', [
            'schoolRoom' => $schoolRoom,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSchoolRoomRequest $request, SchoolRoom $room)
    {
        $room->fill($request->validated());
        $room->save();
        return redirect()->route('school-rooms.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SchoolRoom $room)
    {
        //
    }
}
