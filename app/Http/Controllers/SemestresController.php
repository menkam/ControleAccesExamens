<?php

namespace App\Http\Controllers;

use App\Models\Semestre;
use Illuminate\Http\Request;

class SemestresController extends Controller
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
        $object = Semestre::create($request->all());
        return response()->json($object);
    }


    public function show(Request $request)
    {
        $objects = Semestre::all();
        return response()->json($objects);
    }


    public function edit(Semestre $semestre)
    {
        //
    }


    public function update(Request $request, Semestre $semestre)
    {
        $object = Semestre::find($id)->update($request->all());
        return response()->json($object);
    }


    public function destroy(Semestre $semestre)
    {
        Semestre::find($id)->delete();
        return response()->json(['done']);
    }
}
