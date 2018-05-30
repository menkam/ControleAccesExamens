<?php

namespace App\Http\Controllers;

use App\Models\Niveau;
use Illuminate\Http\Request;

class NiveauController extends Controller
{

    public function store(Request $request)
    {
        $object = Niveau::create($request->all());
        return response()->json($object);
    }


    public static function show()
    {
        $objects = Niveau::all();
        return response()->json($objects);
    }


    public function edit(Niveau $semestre)
    {
        //
    }


    public function update(Request $request, Niveau $semestre)
    {
        $object = Niveau::find($id)->update($request->all());
        return response()->json($object);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Niveau  $semestre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Niveau $semestre)
    {
        Niveau::find($id)->delete();
        return response()->json(['done']);
    }
}