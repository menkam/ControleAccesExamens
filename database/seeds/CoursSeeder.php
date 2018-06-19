<?php

use Illuminate\Database\Seeder;
use App\Models\Cours;
class CoursSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objet = new Cours();
        $objet->id_activite = '2';
        $objet->id_enseigant = '5';
        $objet->id_matiere = '1';
        $objet->id_creneau = '1';
        $objet->date_cours = '2017-05-02';
        $objet->save();

        $objet = new Cours();
        $objet->id_activite = '2';
        $objet->id_enseigant = '5';
        $objet->id_matiere = '2';
        $objet->id_creneau = '1';
        $objet->date_cours = '2017-05-02';
        $objet->save();

        $objet = new Cours();
        $objet->id_activite = '2';
        $objet->id_enseigant = '5';
        $objet->id_matiere = '3';
        $objet->id_creneau = '1';
        $objet->date_cours = '2017-05-03';
        $objet->save();

        $objet = new Cours();
        $objet->id_activite = '2';
        $objet->id_enseigant = '5';
        $objet->id_matiere = '4';
        $objet->id_creneau = '2';
        $objet->date_cours = '2017-05-03';
        $objet->save();

        $objet = new Cours();
        $objet->id_activite = '2';
        $objet->id_enseigant = '5';
        $objet->id_matiere = '5';
        $objet->id_creneau = '3';
        $objet->date_cours = '2017-05-03';
        $objet->save();

        $objet = new Cours();
        $objet->id_activite = '2';
        $objet->id_enseigant = '5';
        $objet->id_matiere = '6';
        $objet->id_creneau = '4';
        $objet->date_cours = '2017-05-03';
        $objet->save();

        $objet = new Cours();
        $objet->id_activite = '2';
        $objet->id_enseigant = '5';
        $objet->id_matiere = '7';
        $objet->id_creneau = '5';
        $objet->date_cours = '2017-05-03';
        $objet->save();
    }
}
