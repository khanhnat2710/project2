<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\ageRating;

class ageRatingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ageRatings = ageRating::all();
        return view('ageRating.index', ['ageRatings' => $ageRatings]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ageRating.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required',
            'description' => 'required'
        ]);

        $ageRatings = new ageRating();
        $ageRatings->code = $request->input('code');
        $ageRatings->description = $request->input('description');
        $ageRatings->save();

        return redirect()->route('ageRating.index')->with('success', 'Tạo thành công');
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
