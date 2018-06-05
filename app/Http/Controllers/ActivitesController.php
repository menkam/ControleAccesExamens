<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Activite;
use Illuminate\Http\Request;
use App\Http\Requests\ActiviteRequest;

class ActivitesController extends Controller
{
    public function index()
    {
        return Activite::latest()->paginate(1);

    }

    public function getmatiereActivite(Request $request){
        //if($request->ajax())
        if(isset($request->typeActivite)){
            $idEnseignant = 1;
            $idActivite = $request->idActivite;
            $typeActivite = $request->typeActivite;

            if($typeActivite == "rattrapage" || $typeActivite == "normale")
                return DB::select("
                    SELECT
                      examens.id as id,
                      examens.date_examen,
                      matieres.code_matiere,
                      matieres.libelle_matiere,
                      creneaux_horaires.duree,
                      creneaux_horaires.libelle_creneaux,
                      users.name,
                      users.prenom,
                      users.sexe,
                      sessions.libelle_session
                    FROM
                      public.users,
                      public.surveillants,
                      public.examens,
                      public.matieres,
                      public.creneaux_horaires,
                      public.sessions,
                      public.activites
                    WHERE
                      surveillants.id_user = users.id AND
                      examens.id_surveillant = surveillants.id AND
                      examens.id_matiere = matieres.id AND
                      examens.id_creneau = creneaux_horaires.id AND
                      sessions.id = examens.id_session AND
                      activites.id = examens.id_activite AND
                      activites.id = '16' AND
                      activites.type_activite = 'rattrapage'
                    ORDER BY
                      examens.date_examen ASC,
                      creneaux_horaires.libelle_creneaux ASC;
                ");

            if($typeActivite == "tp")
                return DB::select("
                    SELECT
                      matieres.code_matiere,
                      matieres.libelle_matiere,
                      creneaux_horaires.duree,
                      creneaux_horaires.libelle_creneaux,
                      users.name,
                      users.prenom,
                      users.sexe,
                      enseignants.grade,
                      tps.date_tp as date,
                      tps.id as id,
                      enseignants.fonction
                    FROM
                      public.users,
                      public.matieres,
                      public.creneaux_horaires,
                      public.activites,
                      public.tps,
                      public.enseignants
                    WHERE
                      tps.id_activite = activites.id AND
                      tps.id_matiere = matieres.id AND
                      tps.id_enseigant = enseignants.id AND
                      tps.id_creneau = creneaux_horaires.id AND
                      enseignants.id_user = users.id AND
                      activites.id = '$idActivite' AND
                      activites.type_activite = '$typeActivite'
                    ORDER BY
                      tps.date_tp ASC,
                      creneaux_horaires.libelle_creneaux ASC;
                ");

            if($typeActivite == "cours")
                return DB::select("
                    SELECT
                      matieres.code_matiere,
                      matieres.libelle_matiere,
                      creneaux_horaires.duree,
                      creneaux_horaires.libelle_creneaux,
                      users.name,
                      users.prenom,
                      users.sexe,
                      enseignants.grade,
                      enseignants.fonction,
                      cours.date_cours as date
                      cours.id as id
                    FROM
                      public.users,
                      public.matieres,
                      public.creneaux_horaires,
                      public.activites,
                      public.enseignants,
                      public.cours
                    WHERE
                      enseignants.id_user = users.id AND
                      cours.id_activite = activites.id AND
                      cours.id_enseigant = enseignants.id AND
                      cours.id_creneau = creneaux_horaires.id AND
                      cours.id_matiere = matieres.id AND
                      activites.id = '$idActivite' AND
                      activites.type_activite = '$typeActivite'
                    ORDER BY
                      cours.date_cours ASC,
                      creneaux_horaires.libelle_creneaux ASC;
                 ");

            /*if($typeActivite == "cc")
                return DB::select("");*/
        }
    }

    public function showListEtudiant(Request $request)
    {
        $id_annee = $request->id_annee;
        $id_classe = $request->id_classe;
        $id_semestre = $request->id_semestre;
        $typeActivite = $request->typeActivite;
        $id_session = $request->id_session;
        $id_niveau = $request->id_niveau;;
        $id_matiere = $request->id_matiere;
        if($request->ajax()) {
            return DB::select('
                SELECT
                  etudiants.matricule_etudiant,
                  users.name,
                  users.prenom,
                  users.date_nais,
                  users.sexe,
                  users.telephone,
                  users.email,
                  etud_ins_mats.regime
                FROM
                  users,
                  etudiants,
                  etud_scolariser_clas,
                  activites,
                  etud_ins_mats,
                  matieres,
                  examens,
                  annee_academiques
                WHERE
                  users.id = etudiants.id_user AND
                  etudiants.id = etud_scolariser_clas.id_etudiant AND
                  etud_scolariser_clas.id = etud_ins_mats.id_scolariser AND
                  activites.id_annee = annee_academiques.id AND
                  etud_ins_mats.id_matiere = matieres.id AND
                  matieres.id = examens.id_matiere AND
                  examens.id_activite = activites.id AND
                  matieres.id = '.$id_matiere.' AND
                  activites.id_semestre = '.$id_semestre.' AND
                  examens.id_session = '.$id_session.' AND
                  annee_academiques.id = '.$id_annee.' AND
                  etud_scolariser_clas.id_classe = '.$id_classe.'
                ORDER BY
                  users.name ASC,
                  users.prenom ASC
            ');
        }else{
            return view('activite.liste_etudiants');
        }
    }

    public function showListEtudiantEtudiantEnSalle(Request $request){
        $idActivite = $request->idActivite;

        if($request->ajax()) {
            return DB::select('
                SELECT
                  etudiants.matricule_etudiant,
                  users.name,
                  users.prenom,
                  users.email,
                  users.date_nais,
                  etud_ins_mats.regime,
                  etud_realise_activs.statut,
                  salles.code_salle,
                  salles.libelle_salle
                FROM
                  public.activites,
                  public.etud_realise_activs,
                  public.etud_ins_mats,
                  public.etudiants,
                  public.etud_scolariser_clas,
                  public.users,
                  public.salle_activites,
                  public.salles
                WHERE
                  activites.id = etud_realise_activs.id_activite AND
                  etud_realise_activs.id_etud_ins_mat = etud_ins_mats.id AND
                  etud_ins_mats.id_scolariser = etud_scolariser_clas.id AND
                  etudiants.id_user = users.id AND
                  etud_scolariser_clas.id_etudiant = etudiants.id AND
                  salle_activites.id_activite = activites.id AND
                  salle_activites.id_salle = salles.id AND
                  activites.id = '.$idActivite.'
                ORDER BY
                  etud_realise_activs.statut ASC
            ');
        }
    }

    public function accueille()
    {
        return view('activite.index');
    }

    public function en_cours(){
        $info = array(
            "nbr_examen"=> 0,
            "nbr_tp"=> 0,
            "nbr_cours"=> 0,
            "nbr_cc"=> 0
        );
        return view('activite.en_cours', $info);
    }

    public function examenEnCours(Request $request){

        $heure = $request->heure;
        $date = $request->date;
        if($request->ajax()) {
            return DB::select('
                SELECT
                  activites.id,
                  cursus_accs.code,
                  departements.code_departement,
                  classes.code_classe,
                  semestres.libelle_semestre,
                  creneaux_horaires.libelle_creneaux,
                  matieres.libelle_matiere,
                  sessions.libelle_session
                FROM
                  departements,
                  cursus_accs,
                  classes,
                  activite_conc_classes,
                  activites,
                  examens,
                  matieres,
                  sessions,
                  semestres, 
                  creneaux_horaires
                WHERE
                  classes.id_cursus = cursus_accs.id AND
                  classes.id_departement = departements.id AND
                  activite_conc_classes.id_classe = classes.id AND
                  activite_conc_classes.id_activite = activites.id AND
                  examens.id_activite = activites.id AND
                  examens.id_matiere = matieres.id AND
                  examens.id_session = sessions.id AND
                  semestres.id = activites.id_semestre AND
                  creneaux_horaires.id = examens.id_creneau AND
                  examens.date_examen = \''.$date.'\' AND
                  creneaux_horaires.libelle_creneaux LIKE \'%'.$heure.'%\'
                ORDER BY
                  creneaux_horaires.libelle_creneaux ASC
            ');
        }
    }

    public function tpEnCours(Request $request){
        
        $heure = $request->heure;
        $date = $request->date;
        if($request->ajax()) {
            return DB::select('
                SELECT
                  cursus_accs.code,
                  departements.code_departement,
                  classes.code_classe,
                  activites.id,
                  creneaux_horaires.libelle_creneaux,
                  matieres.libelle_matiere,
                  users.name,
                  users.prenom,
                  enseignants.grade
                FROM
                  departements,
                  cursus_accs,
                  classes,
                  activite_conc_classes,
                  activites,
                  matieres,
                  creneaux_horaires,
                  tps,
                  enseignants,
                  users
                WHERE
                  classes.id_cursus = cursus_accs.id AND
                  classes.id_departement = departements.id AND
                  activite_conc_classes.id_classe = classes.id AND
                  activite_conc_classes.id_activite = activites.id AND
                  creneaux_horaires.id = tps.id_creneau AND
                  tps.id_activite = activites.id AND
                  tps.id_matiere = matieres.id AND
                  enseignants.id = tps.id_enseigant AND
                  users.id = enseignants.id_user AND
                  tps.date_tp = \''.$date.'\' AND
                creneaux_horaires.libelle_creneaux LIKE \'%'.$heure.'%\'
                ORDER BY
                  creneaux_horaires.libelle_creneaux ASC
            ');
        }
    }

    public function coursEnCours(Request $request){

      $heure = $request->heure;
      $date = $request->date;
      if($request->ajax()) {
          return DB::select('
              SELECT
                  cursus_accs.code,
                  departements.code_departement,
                  classes.code_classe,
                  activites.id,
                  creneaux_horaires.libelle_creneaux,
                  matieres.libelle_matiere,
                  users.name,
                  users.prenom,
                  enseignants.grade
              FROM
                  public.departements,
                  public.cursus_accs,
                  public.classes,
                  public.activite_conc_classes,
                  public.activites,
                  public.matieres,
                  public.creneaux_horaires,
                  public.enseignants,
                  public.users,
                  public.cours
              WHERE
                  classes.id_cursus = cursus_accs.id AND
                  classes.id_departement = departements.id AND
                  activite_conc_classes.id_classe = classes.id AND
                  activite_conc_classes.id_activite = activites.id AND
                  users.id = enseignants.id_user AND
                  cours.id_activite = activites.id AND
                  cours.id_enseigant = enseignants.id AND
                  cours.id_matiere = matieres.id AND
                  cours.id_creneau = creneaux_horaires.id AND
                  cours.date_cours = \''.$date.'\' AND
                creneaux_horaires.libelle_creneaux LIKE \'%'.$heure.'%\'
              ORDER BY
                  creneaux_horaires.libelle_creneaux ASC
          ');
        }
    }

    public function ccEnCours(Request $request){

      $heure = $request->heure;
      $date = $request->date;
      if($request->ajax()) {
          return DB::select('
              SELECT
                activites.id,
                cursus_accs.code,
                departements.code_departement,
                classes.code_classe,
                semestres.libelle_semestre,
                creneaux_horaires.libelle_creneaux,
                matieres.libelle_matiere,
                sessions.libelle_session
              FROM
                departements,
                cursus_accs,
                classes,
                activite_conc_classes,
                activites,
                examens,
                matieres,
                sessions,
                semestres, 
                creneaux_horaires
              WHERE
                classes.id_cursus = cursus_accs.id AND
                classes.id_departement = departements.id AND
                activite_conc_classes.id_classe = classes.id AND
                activite_conc_classes.id_activite = activites.id AND
                examens.id_activite = activites.id AND
                examens.id_matiere = matieres.id AND
                examens.id_session = sessions.id AND
                semestres.id = activites.id_semestre AND
                creneaux_horaires.id = examens.id_creneau AND
                examens.date_examen = \''.$date.'\' AND
                creneaux_horaires.libelle_creneaux LIKE \'%'.$heure.'%\'
              ORDER BY
                creneaux_horaires.libelle_creneaux ASC
          ');
      }
    }




    public function store(Request $request)
    {
        $object = Activite::create($request->all());
        return response()->json($object);
    }


    public function update(Request $request, $id)
    {
        $object = Activite::find($id)->update($request->all());
        return response()->json($object);
    }

    public function getTypeActivite(Request $request){

        $types = DB::selest('SELECT DISTINCT(type_activite) FROM activites');

        return response()->json($types);
    }


    public function destroy($id)
    {
        Activite::find($id)->delete();
        return response()->json(['done']);
    }
}