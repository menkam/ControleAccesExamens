<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\CodeBarre;
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
                  users.photo, 
                  classes.code_classe, 
                  classes.libelle_classe, 
                  annee_academiques.libelle_annee,
                  annee_academiques.id id_annee
                FROM 
                  public.users, 
                  public.etudiants, 
                  public.etud_scolariser_clas, 
                  public.classes, 
                  public.annee_academiques, 
                  public.role_user, 
                  public.roles
                WHERE 
                  etudiants.id_user = users.id AND
                  etud_scolariser_clas.id_classe = classes.id AND
                  etud_scolariser_clas.id_etudiant = etudiants.id AND
                  etud_scolariser_clas.id_annee = annee_academiques.id AND
                  role_user.role_id = roles.id AND
                  role_user.user_id = users.id AND
                  annee_academiques.id = '$idAnnee' AND 
                  classes.id = '$idClasse' AND 
                  roles.id = '3';
            ");
        }
    }



    public function showInfo(Request $request)
    {
        if(!empty($request->idAnnee) && !empty($request->idUser)){
            $idAnnee = $request->idAnnee;
            $idUser = $request->idUser;
            $student = DB::select("
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
                  users.photo, 
                  classes.code_classe, 
                  classes.libelle_classe, 
                  departements.code_departement, 
                  departements.libelle_departement, 
                  annee_academiques.libelle_annee 
                FROM 
                  public.users, 
                  public.roles, 
                  public.role_user, 
                  public.etudiants, 
                  public.etud_scolariser_clas, 
                  public.classes, 
                  public.annee_academiques, 
                  public.departements
                WHERE 
                  roles.id = role_user.role_id AND
                  role_user.id = users.id AND
                  etudiants.id_user = users.id AND
                  etud_scolariser_clas.id_etudiant = etudiants.id AND
                  etud_scolariser_clas.id_classe = classes.id AND
                  annee_academiques.id = etud_scolariser_clas.id_annee AND
                  departements.id = classes.id_departement AND
                  roles.id = '3' AND 
                  users.id = '$idUser' AND 
                  annee_academiques.id = '$idAnnee';
            ");

            $data = $student[0]->id."_".$student[0]->matricule_etudiant;
            CodeBarre::generer($data,"H","4");

          //return response()->json($student); 
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
