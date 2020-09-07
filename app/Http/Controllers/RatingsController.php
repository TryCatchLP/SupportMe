<?php

namespace App\Http\Controllers;

use App\Huecas;
use App\Ratings;
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
        $hueca = Huecas::find($request->hueca_id);
        $rating = Ratings::create($request->all());
        $hueca->stars += $rating->stars;
        $hueca-> ratings += 1;
        $hueca->save();
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
