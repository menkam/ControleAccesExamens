<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;
use App\Models\Tp;

class TpsController extends Controller{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function accueille()
    {
        //return view('tp.index');
    }

    public function index()
    {
        $objects = Tp::latest()->paginate(1);
        return response()->json($objects);
    }


    public function store(Request $request)
    {
        $object = Tp::create($request->all());
        return response()->json($object);
    }


    public function update(Request $request, $id)
    {
        $object = Tp::find($id)->update($request->all());
        return response()->json($object);
    }


    public function destroy($id)
    {
        Tp::find($id)->delete();
        return response()->json(['done']);
    }
}