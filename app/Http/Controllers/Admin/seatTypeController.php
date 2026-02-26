<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\seatType;
use Illuminate\Http\Request;
use App\Models\Admin\screenType;

class seatTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $seatTypes = seatType::all();
        return view('seatType.index', ['seatTypes' => $seatTypes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('seatType.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'seatTypeName' => 'required'
        ]);

        $seatTypes = new seatType();
        $seatTypes->seatTypeName = request('seatTypeName');
        $seatTypes->save();

        return redirect()->route('seatType.index')->with('success', 'Tạo thành công');
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
}
