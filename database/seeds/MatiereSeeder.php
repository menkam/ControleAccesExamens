<?php

use Illuminate\Database\Seeder;
use App\Models\Matiere;
class MatiereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objet = new Matiere();
        $objet->code_matiere = 'MOU50';
        $objet->libelle_matiere = 'Génie Logiciel, Conception Objet UML et IHM';
        $objet->nbr_credit = '3';
        $objet->save();

        $objet = new Matiere();
        $objet->code_matiere = 'PRS50';
        $objet->libelle_matiere = 'Programmation Système';
        $objet->nbr_credit = '2';
        $objet->save();

        $objet = new Matiere();
        $objet->code_matiere = 'ELA50';
        $objet->libelle_matiere = 'Environnement Linux Avancé';
        $objet->nbr_credit = '3';
        $objet->save();

        $objet = new Matiere();
        $objet->code_matiere = 'ANF50';
        $objet->libelle_matiere = 'Analyse Fonctionnelle';
        $objet->nbr_credit = '3';
        $objet->save();

        $objet = new Matiere();
        $objet->code_matiere = 'DET0';
        $objet->libelle_matiere = 'Développement Internet';
        $objet->nbr_credit = '3';
        $objet->save();

        $objet = new Matiere();
        $objet->code_matiere = 'ApR0';
        $objet->libelle_matiere = 'Application Répartie';
        $objet->nbr_credit = '3';
        $objet->save();

        $objet = new Matiere();
        $objet->code_matiere = 'RSF0';
        $objet->libelle_matiere = 'Réseaux San File';
        $objet->nbr_credit = '2';
        $objet->save();

        $objet = new Matiere();
        $objet->code_matiere = 'PEI0';
        $objet->libelle_matiere = 'Projet Internet Intranet';
        $objet->nbr_credit = '3';
        $objet->save();

        $objet = new Matiere();
        $objet->code_matiere = 'MIC0';
        $objet->libelle_matiere = 'Micro-Contrôlleur';
        $objet->nbr_credit = '3';
        $objet->save();
    }
}
