<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\Tp;

class TpsController extends Controller{

    public function store(Request $request)
    {
        $object = Tp::create($request->all());
        return response()->json($object);
    }


    public function update(Request $request)
    {
        /*$object = Tp::find($id)->update($request->all());
        return response()->json($object);*/
    }


    public function destroy($id)
    {
        Tp::find($id)->delete();
        return response()->json(['done']);
    }
}