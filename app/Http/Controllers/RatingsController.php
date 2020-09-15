<?php

namespace App\Http\Controllers;

use App\Huecas;
use App\Ratings;
use App\User;
use Illuminate\Http\Request;

class RatingsController extends Controller
{
    public function index(Request $request)
    {
        $ratings =  Ratings::where("user_id", $request->user()->id)->get();
        foreach($ratings as $rating){
            $rating["huecaname"] = Huecas::find($rating->hueca_id)->name;
        }
        return $ratings;
    }

    public function show(Request $request, $id)
    {
        $user = $request->user();
        $rating = Ratings::whereRaw("user_id = ? and hueca_id = ?", [$user->id, $id])->first();
        return $rating;
    }

    public function store(Request $request)
    {
        $user = $request->user();
        $hueca = Huecas::find($request->hueca_id);
        $rating = Ratings::create([
                        "stars" => $request->stars,
                        "user_id"=> $user->id,
                        "hueca_id"=> $hueca->id,
                        "comentario"=> $request->comentario]);
        $hueca->stars += $rating->stars;
        $hueca->ratings += 1;
        $hueca->save();
        return response()->json($rating, 201);
    }

    public function update(Request $request, Ratings $id)
    {
        $hueca = Huecas::find($request->hueca_id);
        $hueca->stars -= $id->stars;
        $id->update([
            "stars" => $request->stars,
            "user_id"=> $request->user()->id,
            "hueca_id"=> $hueca->id,
            "comentario"=> $request->comentario]
        );
        $hueca->stars += $id->stars;
        $hueca->save();
        return response()->json($id, 200);
    }

    public function delete(Ratings $id)
    {
        $id->delete();

        return response()->json(null, 204);
    }

    public function showRatingsByMenu(Huecas $id)
    {
        $ratings = Ratings::where("hueca_id", $id->id)->get();
        foreach($ratings as $rating){
            $rating["username"] = User::find($rating->user_id)->username;
        }
        return $ratings;
    }
}
