<?php

use Illuminate\Database\Seeder;
use App\Models\Enseignant;
class EnseignatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objet = new Enseignant();
        $objet->id_user = '3';
        $objet->matricule_enseignant = 'CM-UDS-';
        $objet->id_departement = '1';
        $objet->grade = 'Pr. ';
        $objet->fonction = 'chef de département';
        $objet->save();

        $objet = new Enseignant();
        $objet->id_user = '4';
        $objet->matricule_enseignant = 'CM-UDS-';
        $objet->id_departement = '1';
        $objet->grade = 'M. ';
        $objet->fonction = ' chef de...';
        $objet->save();

        $objet1 = new Enseignant();
        $objet1->id_user = '5';
        $objet1->matricule_enseignant = 'CM-UDS-';
        $objet1->id_departement = '1';
        $objet1->grade = 'Dr. ';
        $objet1->fonction = ' chef de...';
        $objet1->save();

        $objet2 = new Enseignant();
        $objet2->id_user = '6';
        $objet2->matricule_enseignant = 'CM-UDS-';
        $objet2->id_departement = '1';
        $objet2->grade = 'M. ';
        $objet2->fonction = ' chef de...';
        $objet2->save();

        $objet3 = new Enseignant();
        $objet3->id_user = '7';
        $objet3->matricule_enseignant = 'CM-UDS-';
        $objet3->id_departement = '1';
        $objet3->grade = 'M. ';
        $objet3->fonction = ' chef de...';
        $objet3->save();

        $objet4 = new Enseignant();
        $objet4->id_user = '8';
        $objet4->matricule_enseignant = 'CM-UDS-';
        $objet4->id_departement = '1';
        $objet4->grade = 'M. ';
        $objet4->fonction = ' chef de...';
        $objet4->save();
    }
}
