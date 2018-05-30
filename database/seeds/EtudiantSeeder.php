<?php

use Illuminate\Database\Seeder;
use App\Models\Etudiant;
class EtudiantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objet = new Etudiant();
        $objet->matricule_etudiant = 'CM-UDS-16IUT';
        $objet->id_user = '9';
        $objet->diplome_entre = 'BAC D';
        $objet->save();

        $objet1 = new Etudiant();
        $objet1->matricule_etudiant = 'CM-UDS-16IUT';
        $objet1->id_user = '10';
        $objet1->diplome_entre = 'BAC D';
        $objet1->save();

        $objet2 = new Etudiant();
        $objet2->matricule_etudiant = 'CM-UDS-16IUT';
        $objet2->id_user = '11';
        $objet2->diplome_entre = 'BAC D';
        $objet2->save();

        $objet3 = new Etudiant();
        $objet3->matricule_etudiant = 'CM-UDS-16IUT';
        $objet3->id_user = '12';
        $objet3->diplome_entre = 'BAC D';
        $objet3->save();

        $objet4 = new Etudiant();
        $objet4->matricule_etudiant = 'CM-UDS-16IUT';
        $objet4->id_user = '13';
        $objet4->diplome_entre = 'BAC D';
        $objet4->save();

        $objet5 = new Etudiant();
        $objet5->matricule_etudiant = 'CM-UDS-16IUT';
        $objet5->id_user = '14';
        $objet5->diplome_entre = 'BAC D';
        $objet5->save();

        $objet6 = new Etudiant();
        $objet6->matricule_etudiant = 'CM-UDS-16IUT';
        $objet6->id_user = '15';
        $objet6->diplome_entre = 'BAC D';
        $objet6->save();

        $objet7 = new Etudiant();
        $objet7->matricule_etudiant = 'CM-UDS-16IUT';
        $objet7->id_user = '16';
        $objet7->diplome_entre = 'BAC D';
        $objet7->save();

        $objet8 = new Etudiant();
        $objet8->matricule_etudiant = 'CM-UDS-16IUT';
        $objet8->id_user = '17';
        $objet8->diplome_entre = 'BAC D';
        $objet8->save();

        $objet9 = new Etudiant();
        $objet9->matricule_etudiant = 'CM-UDS-16IUT';
        $objet9->id_user = '18';
        $objet9->diplome_entre = 'BAC D';
        $objet9->save();
    }
}
