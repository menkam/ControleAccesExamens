<?php

namespace App\Http\Controllers;

use App\Models\Session;
use Illuminate\Http\Request;

class SessionsController extends Controller
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
        //
    }


    public function show(Session $session)
    {
        $objects = Session::all();
        return response()->json($objects);
    }


    public function edit(Session $session)
    {
        //
    }


    public function update(Request $request, Session $session)
    {
        //
    }


    public function destroy(Session $session)
    {
        //
    }
}
