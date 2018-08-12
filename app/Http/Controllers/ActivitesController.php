<?php

namespace App\Http\Controllers;

use App\Http\Controllers\MyClass\ActiviteEnCours;
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
        return view('activite.enCours', $info);
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
                      activites.id = '$idActivite' AND
                      activites.type_activite = '$typeActivite'
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
                      cours.date_cours as date,
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
        $table = $request->table; 
        $table2="";
        $idTable="";
        $idTable2="";    
        
        if($table=="examens"){
          $table2="etud_compose_examens";
          $idTable="id_examen";
        }else{
            if($table=="cours"){
            $table2="etud_etudie_cours";
            $idTable="id_cours";
          }else{
            $table2="etud_participe_tps";
            $idTable="id_tp";
          }
        }
        if($request->ajax()) {

            return DB::select("
                SELECT 
                  etudiants.matricule_etudiant, 
                  users.name, 
                  users.prenom, 
                  users.email, 
                  users.date_nais, 
                  etud_ins_mats.regime, 
                  salles.code_salle, 
                  salles.libelle_salle,
                  $table2.statut
                FROM 
                  public.users, 
                  public.etudiants, 
                  public.etud_scolariser_clas, 
                  public.etud_ins_mats, 
                  public.$table2, 
                  public.$table, 
                  public.activites, 
                  public.salle_activites, 
                  public.salles
                WHERE 
                  users.id = etudiants.id_user AND
                  etudiants.id = etud_scolariser_clas.id_etudiant AND
                  etud_scolariser_clas.id = etud_ins_mats.id_scolariser AND
                  etud_ins_mats.id = $table2.id_etud_ins_mat AND
                  $table.id = $table2.$idTable AND
                  activites.id = $table.id_activite AND
                  salle_activites.id_activite = activites.id AND
                  salles.id = salle_activites.id_salle AND
                  $table.id = '$idActivite'
                ORDER BY
                  $table2.updated_at ASC;
            ");
        }
    }

    public function examenEnCours(Request $request){

        $heure = $request->heure;
        $date = $request->date;
        //alert($heure+$date);
        if($request->ajax()) {
            return DB::select("
                SELECT 
                  activites.id,
                  examens.id as id2,
                  creneaux_horaires.libelle_creneaux, 
                  matieres.libelle_matiere, 
                  classes.code_classe, 
                  sessions.libelle_session, 
                  cursus_accs.code, 
                  departements.code_departement, 
                  semestres.libelle_semestre
                FROM 
                  public.classes, 
                  public.activite_conc_classes, 
                  public.options, 
                  public.parcours, 
                  public.activites, 
                  public.matieres, 
                  public.mentions, 
                  public.domaines, 
                  public.cursus_accs, 
                  public.cursus_dpts, 
                  public.sessions, 
                  public.creneaux_horaires, 
                  public.departements, 
                  public.examens, 
                  public.semestres
                WHERE 
                  classes.id = activite_conc_classes.id_classe AND
                  options.id = classes.id_option AND
                  parcours.id = options.id_parcour AND
                  parcours.id_mention = mentions.id AND
                  activites.id = activite_conc_classes.id_activite AND
                  matieres.id = examens.id_matiere AND
                  mentions.id_domaine = domaines.id AND
                  domaines.id_cursus = cursus_accs.id AND
                  cursus_accs.id = cursus_dpts.id_cursus AND
                  cursus_dpts.id_dpt = departements.id AND
                  sessions.id = examens.id_session AND
                  examens.id_activite = activites.id AND
                  examens.id_creneau = creneaux_horaires.id AND
                  semestres.id = activites.id_semestre AND
                  examens.date_examen = '$date' AND
                  creneaux_horaires.libelle_creneaux LIKE '%$heure%'
                ORDER BY
                  creneaux_horaires.libelle_creneaux ASC;
            ");
        }
    }

    public function tpEnCours(Request $request){
        
        $heure = $request->heure;
        $date = $request->date;
        if($request->ajax()) {
            return DB::select("
                SELECT 
                  activites.id,
                  tps.id as id2,
                  creneaux_horaires.libelle_creneaux, 
                  matieres.libelle_matiere, 
                  semestres.libelle_semestre, 
                  users.name, 
                  users.prenom, 
                  classes.code_classe, 
                  departements.code_departement, 
                  cursus_accs.code, 
                  enseignants.grade
                FROM 
                  public.classes, 
                  public.activite_conc_classes, 
                  public.options, 
                  public.parcours, 
                  public.activites, 
                  public.matieres, 
                  public.mentions, 
                  public.domaines, 
                  public.cursus_accs, 
                  public.cursus_dpts, 
                  public.creneaux_horaires, 
                  public.departements, 
                  public.semestres, 
                  public.users, 
                  public.enseignants, 
                  public.tps
                WHERE 
                  classes.id = activite_conc_classes.id_classe AND
                  options.id = classes.id_option AND
                  parcours.id = options.id_parcour AND
                  parcours.id_mention = mentions.id AND
                  activites.id = activite_conc_classes.id_activite AND
                  mentions.id_domaine = domaines.id AND
                  domaines.id_cursus = cursus_accs.id AND
                  cursus_accs.id = cursus_dpts.id_cursus AND
                  cursus_dpts.id_dpt = departements.id AND
                  semestres.id = activites.id_semestre AND
                  enseignants.id_user = users.id AND
                  tps.id_activite = activites.id AND
                  tps.id_enseigant = enseignants.id AND
                  tps.id_matiere = matieres.id AND
                  tps.id_creneau = creneaux_horaires.id AND 
                  tps.date_tp = '$date' AND
                  creneaux_horaires.libelle_creneaux LIKE '%$heure%'
                ORDER BY
                  creneaux_horaires.libelle_creneaux ASC;
            ");
        }
    }

    public function coursEnCours(Request $request){

      $heure = $request->heure;
      $date = $request->date;
      if($request->ajax()) {
          return DB::select("
              SELECT 
                activites.id,
                cours.id as id2,
                creneaux_horaires.libelle_creneaux, 
                matieres.libelle_matiere, 
                semestres.libelle_semestre, 
                users.name, 
                users.prenom, 
                enseignants.grade,
                classes.code_classe, 
                departements.code_departement, 
                cursus_accs.code
              FROM 
                public.classes, 
                public.activite_conc_classes, 
                public.options, 
                public.parcours, 
                public.activites, 
                public.matieres, 
                public.mentions, 
                public.domaines, 
                public.cursus_accs, 
                public.cursus_dpts, 
                public.creneaux_horaires, 
                public.departements, 
                public.semestres, 
                public.cours, 
                public.users, 
                public.enseignants
              WHERE 
                classes.id = activite_conc_classes.id_classe AND
                options.id = classes.id_option AND
                parcours.id = options.id_parcour AND
                parcours.id_mention = mentions.id AND
                activites.id = activite_conc_classes.id_activite AND
                matieres.id = cours.id_matiere AND
                mentions.id_domaine = domaines.id AND
                domaines.id_cursus = cursus_accs.id AND
                cursus_accs.id = cursus_dpts.id_cursus AND
                cursus_dpts.id_dpt = departements.id AND
                creneaux_horaires.id = cours.id_creneau AND
                semestres.id = activites.id_semestre AND
                cours.id_activite = activites.id AND
                enseignants.id = cours.id_enseigant AND
                enseignants.id_user = users.id AND 
                cours.date_cours = '$date' AND
                creneaux_horaires.libelle_creneaux LIKE '%$heure%'
              ORDER BY
                creneaux_horaires.libelle_creneaux ASC;
          ");
        }
    }

    /*public function ccEnCours(Request $request){

      $heure = $request->heure;
      $date = $request->date;
      if($request->ajax()) {
          return DB::select("
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
                examens.date_examen = '$date' AND
                creneaux_horaires.libelle_creneaux LIKE '%$heure%'
              ORDER BY
                creneaux_horaires.libelle_creneaux ASC
          ");
      }
    }*/




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