<?php

use Illuminate\Database\Seeder;
use App\Models\Etud_scolariser_clas;
class Etud_scolriser_clasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objet = new Etud_scolariser_clas();
        $objet->id_annee = '1';
        $objet->id_etudiant = '1';
        $objet->id_classe = '4';
        $objet->save();

        $objet = new Etud_scolariser_clas();
        $objet->id_annee = '1';
        $objet->id_etudiant = '2';
        $objet->id_classe = '4';
        $objet->save();

        $objet = new Etud_scolariser_clas();
        $objet->id_annee = '1';
        $objet->id_etudiant = '3';
        $objet->id_classe = '4';
        $objet->save();

        $objet = new Etud_scolariser_clas();
        $objet->id_annee = '1';
        $objet->id_etudiant = '4';
        $objet->id_classe = '4';
        $objet->save();

        $objet = new Etud_scolariser_clas();
        $objet->id_annee = '1';
        $objet->id_etudiant = '5';
        $objet->id_classe = '4';
        $objet->save();

        $objet = new Etud_scolariser_clas();
        $objet->id_annee = '1';
        $objet->id_etudiant = '6';
        $objet->id_classe = '4';
        $objet->save();

        $objet = new Etud_scolariser_clas();
        $objet->id_annee = '1';
        $objet->id_etudiant = '7';
        $objet->id_classe = '4';
        $objet->save();

        $objet = new Etud_scolariser_clas();
        $objet->id_annee = '1';
        $objet->id_etudiant = '8';
        $objet->id_classe = '4';
        $objet->save();

        $objet = new Etud_scolariser_clas();
        $objet->id_annee = '1';
        $objet->id_etudiant = '9';
        $objet->id_classe = '4';
        $objet->save();

        $objet = new Etud_scolariser_clas();
        $objet->id_annee = '1';
        $objet->id_etudiant = '10';
        $objet->id_classe = '4';
        $objet->save();

        $objet = new Etud_scolariser_clas();
        $objet->id_annee = '1';
        $objet->id_etudiant = '11';
        $objet->id_classe = '4';
        $objet->save();

        $objet = new Etud_scolariser_clas();
        $objet->id_annee = '1';
        $objet->id_etudiant = '12';
        $objet->id_classe = '4';
        $objet->save();

        $objet = new Etud_scolariser_clas();
        $objet->id_annee = '1';
        $objet->id_etudiant = '13';
        $objet->id_classe = '4';
        $objet->save();

    }
}
