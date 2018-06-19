<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Requests\ArticleRequest;
use App\Models\Annee_academique;

class Annee_academiquesController extends Controller{


    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function show()
    {
        $objects = Annee_academique::all();
        return response()->json($objects);
    }


    public function store(Request $request)
    {
        $object = Annee_academique::create($request->all());
        return response()->json($object);
    }


    public function update(Request $request, $id)
    {
        $object = Annee_academique::find($id)->update($request->all());
        return response()->json($object);
    }


    public function destroy($id)
    {
        Annee_academique::find($id)->delete();
        return response()->json(['done']);
    }
}