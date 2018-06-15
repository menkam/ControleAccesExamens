<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Mail;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function index()
    {
        return view('inbox');
    }

    
    public function create()
    {
        return 1;
    }

    
    public function store(Request $request)
    {
        $object = Mail::create($request->all());
        return response()->json($object);

    }

    
    public function show(Request $request)
    {
        return DB::select("
            SELECT 
              users.name, 
              users.prenom, 
              users.sexe, 
              users.telephone, 
              users.email, 
              users.photo, 
              users.date_nais, 
              mails.id, 
              mails.id_user_from, 
              mails.id_user_to, 
              mails.objet, 
              mails.libelle, 
              mails.lue, 
              mails.updated_at
            FROM 
              public.mails, 
              public.users
            WHERE 
                mails.id_user_from = users.id AND (
                mails.id_user_from = '$request->id' OR 
                mails.id_user_to = '$request->id')
            ORDER BY
                mails.updated_at DESC;
        ");
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

    public function getInfoUser(Request $request){
        return DB::select("select * from users where id ='$request->id'");
    }

    public function getContentMsg(Request $request){
        return DB::select("select * from mails where id ='$request->id'");
    }

    
    public function destroy($id)
    {
        //
    }
}
