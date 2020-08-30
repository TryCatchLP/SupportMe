<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenusesController extends Controller
{
    public function index()
    {
        return Menuses::all();
    }

    public function show(Menuses $id)
    {
        return $id;
    }

    public function store(Request $request)
    {
        $menuses = Menuses::create($request->all());

        return response()->json($menuses, 201);
    }

    public function update(Request $request, Menuses $id)
    {
        $id->update($request->all());

        return response()->json($id, 200);
    }

    public function delete(Menuses $id)
    {
        $id->delete();

        return response()->json(null, 204);
    }

    
}
