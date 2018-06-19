<?php

use Illuminate\Database\Seeder;
use App\Models\Examen;
class ExamenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objet = new Examen();
        $objet->id_activite = '1';
        $objet->id_ens_chef_dpt = '1';
        $objet->id_matiere = '1';
        $objet->id_creneau = '1';
        $objet->id_surveillant = '1';
        $objet->id_session = '1';
        $objet->date_examen = '2018-05-08';
        $objet->save();

        $objet = new Examen();
        $objet->id_activite = '1';
        $objet->id_ens_chef_dpt = '1';
        $objet->id_matiere = '2';
        $objet->id_creneau = '2';
        $objet->id_surveillant = '1';
        $objet->id_session = '1';
        $objet->date_examen = '2018-05-08';
        $objet->save();

        $objet = new Examen();
        $objet->id_activite = '1';
        $objet->id_ens_chef_dpt = '1';
        $objet->id_matiere = '1';
        $objet->id_creneau = '2';
        $objet->id_surveillant = '1';
        $objet->id_session = '2';
        $objet->date_examen = '2018-06-08';
        $objet->save();

        $objet = new Examen();
        $objet->id_activite = '1';
        $objet->id_ens_chef_dpt = '1';
        $objet->id_matiere = '3';
        $objet->id_creneau = '3';
        $objet->id_surveillant = '1';
        $objet->id_session = '1';
        $objet->date_examen = '2018-05-08';
        $objet->save();
    }
}
