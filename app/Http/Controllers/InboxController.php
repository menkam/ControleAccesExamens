<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Inbox;

class InboxController extends Controller
{
    public function index()
    {
        return view('inbox');
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $object = Inbox::create($request->all());
        return response()->json($object);
    }

    
    public function show($id)
    {
        return DB::select("select * from inboxs where id_user_to = $id");
    }

    
    public function edit($id)
    {
        //
    }

    public function lectureMail(Request $request, $id)
    {
        //DB::u
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function verifierMail(Request $request)
    {
        return DB::select("select id from users where email ='$request->email'");
    }

    
    public function destroy($id)
    {
        //
    }
}
