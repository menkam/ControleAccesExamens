<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
//use App\Http\Requests\surveillant;
use App\Models\Surveillant;

class SurveillantsController extends Controller{


    public function index()
    {
        return view('admin.addSurveillant');
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $object = Surveillant::create($request->all());
        return response()->json($object);
    }


    public function show(Request $request)
    {
        return response()->json(DB::select("
            SELECT
              surveillants.id,
              users.name,
              users.prenom,
              users.sexe,
              users.telephone,
              users.photo,
              users.email,
              users.info_codebar,
              users.date_nais
            FROM
              public.users,
              public.surveillants
            WHERE
              surveillants.id_user = users.id;
        "));
    }

    public function show0(Request $request)
    {
      return response()->json(DB::select("
          SELECT 
            users.id, 
            users.name, 
            users.prenom, 
            users.sexe, 
            users.date_nais, 
            users.telephone, 
            users.email, 
            users.info_codebar, 
            users.photo
          FROM 
            public.users, 
            public.role_user, 
            public.roles, 
            public.surveillants
          WHERE 
            role_user.role_id = roles.id AND
            role_user.user_id = users.id AND
            surveillants.id_user = users.id AND
            roles.id = '4';
      "));
    }

    public function edit(Surveillant $semestre)
    {
        //
    }

    public function update(Request $request, Surveillant $semestre)
    {
        //$object = Surveillant::find($id)->update($request->all());
        //return response()->json($object);
    }


    public function destroy(Surveillant $semestre)
    {
        /*Surveillant::find($id)->delete();
        return response()->json(['done']);*/
    }
}