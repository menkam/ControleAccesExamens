<?php

namespace App\Http\Requests;

use DB;
use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
{
        public function getInfo($idActivite,$typeExament){
            $idEnseignant = 1;
            return DB::select('
                SELECT
                  examens.id,
                  matieres.libelle_matiere,
                  examens.date_examen,
                  creneaux_horaires.libelle_creneaux,
                  users.name,
                  users.prenom,
                  departements.libelle_departement,
                  examens.type_examen,
                  activites.id_annee,
                  activites.semestre,
                  activites.niveau,
                  activites.date_debut_activite,
                  activites.date_fin_activite,
                  activites.type_activite
                FROM
                  examens,
                  matieres,
                  creneaux_horaires,
                  surveillants,
                  users,
                  ens_chef_dpts,
                  departements,
                  activites
                WHERE
                  examens.code_matiere = matieres.code_matiere AND
                  examens.id_creneau = creneaux_horaires.id AND
                  examens.id_surveillant = surveillants.id AND
                  examens.id_ens_chef_dpt = ens_chef_dpts.id AND
                  examens.id_activite = activites.id AND
                  surveillants.id_user = users.id AND
                  ens_chef_dpts.id_departement = departements.id AND
                  examens.type_examen LIKE \''.$typeExament.'\' AND
                  activites.id = '.$idActivite.' AND
                  ens_chef_dpts.id_enseignant = '.$idEnseignant
            );
        }
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }



    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|min:3',
            'content' => 'required',
            'author_id' => 'required',
        ];
    }
}
