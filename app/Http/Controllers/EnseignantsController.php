<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;
use DB;
use App\Models\Enseignant;

class EnseignantsController extends Controller{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function accueille()
    {
        //return view('activite.index');
    }


    public function index()
    {
        return view('admin.addEnseignant');
    }


    public function store(Request $request)
    {
        $object = Enseignant::create($request->all());
        return response()->json($object);
    }

    public function show(Request $request)
    {
        return response()->json(DB::select("
            SELECT
              enseignants.id,
              users.name,
              users.prenom,
              users.sexe,
              users.telephone,
              users.photo,
              users.email,
              users.info_codebar,
              enseignants.fonction,
              enseignants.grade,
              enseignants.id_departement,
              enseignants.matricule_enseignant,
              users.date_nais
            FROM
              public.enseignants,
              public.users
            WHERE
              enseignants.id_user = users.id;
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
            public.roles
          WHERE 
            role_user.role_id = roles.id AND
            role_user.user_id = users.id AND
            roles.id = '2';
      "));
    }

    public function update(Request $request, $id)
    {
        $object = Enseignant::find($id)->update($request->all());
        return response()->json($object);
    }


    public function destroy($id)
    {
        Enseignant::find($id)->delete();
        return response()->json(['done']);
    }
}