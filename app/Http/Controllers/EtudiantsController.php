<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \Milon\Barcode\DNS2D;
use DB;

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
                  public.annee_academiques, 
                  public.departements, 
                  public.domaines, 
                  public.cursus_dpts, 
                  public.cursus_accs, 
                  public.mentions, 
                  public.options, 
                  public.parcours, 
                  public.classes
                WHERE 
                  users.id = role_user.user_id AND
                  roles.id = role_user.role_id AND
                  etudiants.id_user = users.id AND
                  etud_scolariser_clas.id_etudiant = etudiants.id AND
                  etud_scolariser_clas.id_classe = classes.id AND
                  annee_academiques.id = etud_scolariser_clas.id_annee AND
                  domaines.id_cursus = cursus_accs.id AND
                  cursus_dpts.id_dpt = departements.id AND
                  cursus_accs.id = cursus_dpts.id_cursus AND
                  mentions.id_domaine = domaines.id AND
                  options.id_parcour = parcours.id AND
                  parcours.id_mention = mentions.id AND
                  classes.id_option = options.id AND
                  roles.id = '3' AND 
                  users.id = '$idUser' AND 
                  annee_academiques.id = '$idAnnee';
            ");

            $data = "".$student[0]->id."_".$student[0]->matricule_etudiant."";
            //echo $data;
            $d = new DNS2D();
            $d->setStorPath(__DIR__."/cache/");
            //echo DNS2D::getBarcodeHTML("4445645656", "QRCODE");
            $codeBarre = $d->getBarcodeHTML($data, "QRCODE", 6, 6);
            $student[0]->codeBarre = $codeBarre;
            //echo $student[0]->codeBarre;
            return response()->json($student); 
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
