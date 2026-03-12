<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\screeningRoom;
use App\Models\screenType;

class screeningRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rooms = screeningRoom::all();
        $screenTypes = ScreenType::all();

        return view('admin.screeningRoom.index', compact('rooms','screenTypes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        screeningRoom::create([
            'roomName' => $request->roomName,
            'capacity' => $request->capacity,
            'screenTypeID' => $request->screenTypeID
        ]);

        return redirect()->back()->with('success','Room added successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $room = screeningRoom::findOrFail($id);
        return response()->json($room);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $room = screeningRoom::findOrFail($id);

        $room->update([
            'roomName' => $request->roomName,
            'capacity' => $request->capacity,
            'screenTypeID' => $request->screenTypeID
        ]);

        return redirect()->back()->with('success','Room updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        screeningRoom::destroy($id);

        return redirect()->back()->with('success','Room deleted successfully');
    }
}