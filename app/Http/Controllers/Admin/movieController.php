<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\movie;
use App\Models\Admin\ageRating;
use App\Models\Admin\studio;

class movieController extends Controller
{
    public function index()
    {
        $movies = movie::with(['ageRating','studio'])->get();
        $ageRatings = AgeRating::all();
        $studios = Studio::all();

        return view('movies.index', compact('movies','ageRatings','studios'));
    }

    public function store(Request $request)
    {
        movie::create($request->all());

        return redirect()->route('movies.index');
    }

    public function update(Request $request, $id)
    {
        $movie = Movie::findOrFail($id);
        $movie->update($request->all());

        return redirect()->route('movies.index')->with('success', 'Cập nhật thành công');
    }

    public function destroy($id)
    {
        movie::destroy($id);

        return redirect()->route('movies.index');
    }
}
