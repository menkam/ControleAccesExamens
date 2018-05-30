<?php

namespace App\Http\Controllers\AndroidApi;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GestionActiviteController extends Controller
{
    public function ajouterEtudiantEnSalle(Request $request)
    {
        //$codeBare = '12838_CM-UDS-14IUT0004';
        //$annee = '2017-2018';
        $codeBare = $request->codeBare;
        $annee = $request->anneeAc;
        $date = '2018-05-08'; //Fonction::getDate();
        $heure = "08h";//Fonction::getTime("h");
        $etudiant = array();
        $etudiant = DB::select("
            SELECT
              etudiants.matricule_etudiant,
              users.name,
              users.prenom,
              matieres.libelle_matiere,
              etud_ins_mats.regime,
              users.telephone,
              users.photo,
              creneaux_horaires.libelle_creneaux,
              annee_academiques.libelle_annee,
              etud_ins_mats.id AS id_etudiant,
              activites.id AS id_activite
            FROM
              public.users,
              public.etudiants,
              public.etud_scolariser_clas,
              public.examens,
              public.etud_ins_mats,
              public.matieres,
              public.creneaux_horaires,
              public.annee_academiques,
              public.activites

            WHERE
              etudiants.id_user = users.id AND
              etud_scolariser_clas.id_etudiant = etudiants.id AND
              etud_scolariser_clas.id_annee = annee_academiques.id AND
              etud_ins_mats.id_scolariser = etud_scolariser_clas.id AND
              etud_ins_mats.id_matiere = matieres.id AND
              matieres.id = examens.id_matiere AND
              creneaux_horaires.id = examens.id_creneau AND
              users.info_codebar = '".$codeBare."' AND
              examens.date_examen = '".$date."' AND
              examens.id_activite = activites.id AND
              creneaux_horaires.libelle_creneaux LIKE '".$heure."%' AND
              annee_academiques.libelle_annee = '".$annee."'
        ");
        if(!empty($etudiant)){
            $photo = '';
            $path = "images/".$etudiant[0]->photo;
            if(file_exists($path)){  $photo = base64_encode(file_get_contents($path)); }

            $etudiant[0]->photo = $photo;
            $idetudiant = $etudiant[0]->id_etudiant;
            $idActivite = $etudiant[0]->id_activite;
            $exite = DB::select(" select count(id) from etud_realise_activs WHERE  id_activite = '".$idActivite."' AND id_etud_ins_mat = '".$idetudiant."' AND statut = '0'");
            $matricule_etudiant=$etudiant[0]->matricule_etudiant;
            $name=$etudiant[0]->name;
            $prenom=$etudiant[0]->prenom;
            $libelle_matiere=$etudiant[0]->libelle_matiere;
            $regime=$etudiant[0]->regime;
            $telephone=$etudiant[0]->telephone;
            $libelle_creneaux=$etudiant[0]->libelle_creneaux;
            $libelle_annee=$etudiant[0]->libelle_annee;
            $id_etudiant=$etudiant[0]->id_etudiant;
            $id_activite=$etudiant[0]->id_activite;
            //si l'etudiant à déjà ete identifier
            if($exite[0]->count == 0){
                //Ajout de l'Etudiant identifier dans la table Etud_realise-activite
                Etud_realise_activ::create(['id_activite' => $idActivite, 'id_etud_ins_mat' => $idetudiant]);
                $statut = 1;
            }
            else $statut = 2;
        }else $statut = 0;
        //dd (compact('etudiant'));
        return Response()->json(compact(
            'statut',
            'matricule_etudiant',
            'name',
            'prenom',
            'libelle_matiere',
            'regime',
            'telephone',
            'libelle_annee',
            'id_etudiant',
            'id_activite',
            'libelle_creneaux',
            'photo'
        ));

        //return json_encode($etudiant);
    }

    public function ajouterEtudiantAyantTerminer(Request $request){

    }

    public function ajouterEtudiantsExclus(Request $request){

    }
}
