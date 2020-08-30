<?php

namespace App\Http\Controllers;

use App\Huecas;
use Illuminate\Http\Request;

class HuecaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Huecas::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Huecas::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Huecas  $huecas
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Huecas::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Huecas  $huecas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $hueca = Huecas::findOrFail($id);
        $hueca->update($request->all());

        return $hueca;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Huecas  $huecas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hueca = Huecas::findOrFail($id);
        $hueca->delete();

        return 204;
    }
}
