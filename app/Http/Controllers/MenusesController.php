<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Menuses;

class MenusesController extends Controller
{
    public function index()
    {
        return Menuses::all();
    }

    public function show(Menuses $id)
    {
        $menuses = Menuses::find($id);
        return $menuses;
    }

    public function store(Request $request)
    {
        $menuses = Menuses::create($request->all());

        return response()->json($menuses, 201);
    }

    public function update(Request $request, Menuses $id)
    {
        $menuses= Menuses::findOrFail($id);
        $menuses->update($request->all());

        return $menuses;
    }

    public function delete(Menuses $id)
    {
        $id->delete();

        return response()->json(null, 204);
    }

    
}
