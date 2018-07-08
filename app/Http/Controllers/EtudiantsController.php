<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;

class EtudiantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('etudiant\home');
    }

    public function indexForm()
    {
        return view('admin.addEtudiant');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        if(!empty($request->idAnnee) && !empty($request->idClasse)){
            $idAnnee = $request->idAnnee;
            $idClasse = $request->idClasse;
            return DB::select("
                SELECT 
                  users.id, 
                  etudiants.matricule_etudiant, 
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
                  public.etudiants, 
                  public.etud_scolariser_clas, 
                  public.classes, 
                  public.annee_academiques
                WHERE 
                  etudiants.id_user = users.id AND
                  etud_scolariser_clas.id_classe = classes.id AND
                  etud_scolariser_clas.id_etudiant = etudiants.id AND
                  etud_scolariser_clas.id_annee = annee_academiques.id AND
                  annee_academiques.id = '$idAnnee' AND 
                  classes.id = '$idClasse';
            ");
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
