<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\Matiere;

class MatieresController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $object = Matiere::create($request->all());
        return response()->json($object);
    }


    public function show(Request $request)
    {
        $objects = Matiere::all();
        return response()->json($objects);
    }


    public function edit(Matiere $semestre)
    {
        //
    }


    public function update(Request $request, Matiere $semestre)
    {
        $object = Matiere::find($id)->update($request->all());
        return response()->json($object);
    }


    public function destroy(Matiere $semestre)
    {
        Matiere::find($id)->delete();
        return response()->json(['done']);
    }
}