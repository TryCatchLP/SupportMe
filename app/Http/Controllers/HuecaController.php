<?php

namespace App\Http\Controllers;

use App\Huecas;
use Illuminate\Http\Request;
use App\Menuses;
use App\Huecasmenuses;

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

	/*
	'hueca': {
		"name": "",
        "descrip": "descrip",
        "lat": -2.126055,
        "lng": -79.917295,
        "address": "asasd",
        "photo": "C://",
        "phone": 2316545465,
        "stars": 0,
        "ratings": 0
		},
	'menues': [
		{"menu": {title, ingredients},
		 "price": 4677.566},
		{''menu": {title, ingredients},
		 "price": 4677.566}
		]
    */
        $url = $request->file('photo')->store('huecas', 'public');
        $request->hueca["photo"] = "storage/".$url;
        $hueca = Huecas::create($request->hueca);
        $menues = $request->menues;
        foreach($menues as $menu){
            $data = Menuses::create($menu["menu"]);
            Huecasmenuses::create([
                'menu_id' => $data->id,
                'hueca_id' => $hueca->id,
                'price' => $menu["price"]
            ]);
        }

        return $hueca;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Huecas  $huecas
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hueca = Huecas::find($id);
        return $hueca;
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
