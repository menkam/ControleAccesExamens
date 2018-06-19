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
        $objet->id_classe = '1';
        $objet->save();

        $objet1 = new Etud_scolariser_clas();
        $objet1->id_annee = '1';
        $objet1->id_etudiant = '2';
        $objet1->id_classe = '1';
        $objet1->save();

        $objet2 = new Etud_scolariser_clas();
        $objet2->id_annee = '1';
        $objet2->id_etudiant = '3';
        $objet2->id_classe = '1';
        $objet2->save();

        $objet3 = new Etud_scolariser_clas();
        $objet3->id_annee = '1';
        $objet3->id_etudiant = '1';
        $objet3->id_classe = '1';
        $objet3->save();

        $objet4 = new Etud_scolariser_clas();
        $objet4->id_annee = '1';
        $objet4->id_etudiant = '2';
        $objet4->id_classe = '1';
        $objet4->save();

        $objet5 = new Etud_scolariser_clas();
        $objet5->id_annee = '1';
        $objet5->id_etudiant = '3';
        $objet5->id_classe = '1';
        $objet5->save();
    }
}
