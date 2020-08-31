<?php

namespace App\Http\Controllers;

use App\Huecasmenuses;
use App\Huecas;
use App\Menuses;
use Illuminate\Http\Request;

class HuecaMenuController extends Controller
{

    public function showall(Huecas $id)
    {
        $menues = Huecasmenuses::where("hueca_id", $id->id)->get();
        $res = array();
        foreach($menues as $menu){
            $m = array("menu" => Menuses::find($menu->menu_id), "price" => $menu->price);
            array_push($res, $m);
        }
        return $res;
    }

    public function update(Request $request, Huecasmenuses $id)
    {
        $id->update($request->all());
        return response()->json($id, 200);
    }

}
