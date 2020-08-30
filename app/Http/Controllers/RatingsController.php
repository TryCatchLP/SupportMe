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

    public function show(Ratings $id)
    {
        return $id;
    }

    public function store(Request $request)
    {
        $rating = Ratings::create($request->all());

        return response()->json($rating, 201);
    }

    public function update(Request $request, Ratings $id)
    {
        $id->update($request->all());

        return response()->json($id, 200);
    }

    public function delete(Ratings $id)
    {
        $id->delete();

        return response()->json(null, 204);
    }
}
