<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\Examen;

class ExamensController extends Controller{


    public function index()
    {
        $objects = Examen::all();
        //$objects = Examen::latest()->paginate(1);
        return response()->json($objects);
    }
/*
 * à supprimer
 */

    public function AjaxExamen(Request $request){
        $idEnseignant = 1;
        $idActivite = $request->idActivite;
        $typeExament = 'Normale';
        if($request->ajax()) {
            $examens = DB::select('
                SELECT
                  examens.id,
                  matieres.libelle_matiere,
                  creneaux_horaires.libelle_creneaux,
                  users.name,
                  users.prenom,
                  departements.libelle_departement,
                  examens.id_session,
                  activites.id_annee,
                  activites.id_semestre,
                  activites.id_niveau,
                  activites.date_debut_activite,
                  activites.date_fin_activite,
                  activites.type_activite,
                  examens.date_examen
                FROM
                  examens,
                  matieres,
                  creneaux_horaires,
                  surveillants,
                  users,
                  ens_chef_dpts,
                  departements,
                  activites,
                  sessions
                WHERE
                  examens.id_matiere = matieres.id AND
                  examens.id_creneau = creneaux_horaires.id AND
                  examens.id_surveillant = surveillants.id AND
                  examens.id_ens_chef_dpt = ens_chef_dpts.id AND
                  examens.id_activite = activites.id AND
                  surveillants.id_user = users.id AND
                  ens_chef_dpts.id_departement = departements.id AND
                  sessions.id = examens.id_session AND
                  activites.id = '.$idActivite.' AND
                  ens_chef_dpts.id_enseignant = '.$idEnseignant.'
                ORDER BY
                  activites.id_annee ASC,
                  activites.date_debut_activite ASC,
                  creneaux_horaires.libelle_creneaux ASC
            ');
            return $examens;
        }else{
            /*return DB::select('select exe.id, libelle_creneaux, date_examen, libelle_matiere, name, prenom
                            from examens exe, activites act, matieres mat, surveillants sur, users usr, creneaux_horaires crh
                            WHERE exe.id=act.id AND id_creneau=crh.id AND
                                  exe.code_matiere=mat.code_matiere AND
                                  exe.id_surveillant=sur.id AND sur.id_user=usr.id AND
                                  act.id=1');*/
            return Examen::all();
        }
    }

    public function show($id)
    {
        $object = DB::select('
           SELECT exe.id, libelle_creneaux, date_examen, libelle_matiere, name, prenom
           FROM examens exe, activites act, matieres mat, surveillants sur, users usr, creneaux_horaires crh
           WHERE act.id='.$id.' AND exe.id=act.id AND id_creneau=crh.id AND exe.code_matiere=mat.code_matiere AND exe.id_surveillant=sur.id AND sur.id_user=usr.id
       ');
        //return response()->json($object);
        return $object;
    }


    public function store(Request $request)
    {
        $object = Examen::create($request->all());
        return response()->json($object);
    }

    public function update(Request $request, $id)
    {
        $object = Examen::find($id)->update($request->all());
        return response()->json($object);
    }


    public function destroy(Request $request)
    {
        $id = $request->id;
        Examen::find($id)->delete();
        return response()->json(['done']);
    }
}