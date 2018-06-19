<?php
/**
 * Created by PhpStorm.
 * User: MENKAM
 * Date: 06/06/2018
 * Time: 14:59
 */

namespace App\Http\Controllers\MyClass;

use Illuminate\Support\Facades\DB;

class ActiviteEnCours {

    private $idActivite;

    public function __construct($idActivite){
        $this->idActivite = $idActivite;
    }

    public function run()
    {
        return DB::select("
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
              activites.id = '$this->idActivite'
            ORDER BY
              etud_realise_activs.statut ASC
        ");
    }
}