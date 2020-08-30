<?php

namespace App\Http\Controllers;

Use App\Ratings;
use Illuminate\Http\Request;

class RatingsController extends Controller
{
    public function index()
    {
        return Ratings::all();
    }

    public function show($id)
    {
        return Ratings::find($id);
    }

    public function store(Request $request)
    {
        $rating = Ratings::create($request->all());

        return response()->json($rating, 201);
    }

    public function update(Request $request, $id)
    {
        $rating = Huecas::findOrFail($id);
        $rating->update($request->all());

        return response()->json($$rating, 200);
    }

    public function delete($id)
    {
        $rating = Huecas::findOrFail($id);
        $rating->delete();

        return response()->json(null, 204);
    }
}
