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
        $objet->matricule_etudiant = 'CM-UDS-16IUT0001';
        $objet->id_user = '20';
        $objet->diplome_entre = 'BAC D';
        $objet->save();

        $objet1 = new Etudiant();
        $objet1->matricule_etudiant = 'CM-UDS-16IUT0002';
        $objet1->id_user = '21';
        $objet1->diplome_entre = 'BAC D';
        $objet1->save();

        $objet2 = new Etudiant();
        $objet2->matricule_etudiant = 'CM-UDS-16IUT0003';
        $objet2->id_user = '22';
        $objet2->diplome_entre = 'BAC D';
        $objet2->save();

        $objet3 = new Etudiant();
        $objet3->matricule_etudiant = 'CM-UDS-16IUT0004';
        $objet3->id_user = '23';
        $objet3->diplome_entre = 'BAC D';
        $objet3->save();

        $objet4 = new Etudiant();
        $objet4->matricule_etudiant = 'CM-UDS-16IUT0005';
        $objet4->id_user = '24';
        $objet4->diplome_entre = 'BAC D';
        $objet4->save();

        $objet5 = new Etudiant();
        $objet5->matricule_etudiant = 'CM-UDS-16IUT0006';
        $objet5->id_user = '25';
        $objet5->diplome_entre = 'BAC D';
        $objet5->save();

        $objet6 = new Etudiant();
        $objet6->matricule_etudiant = 'CM-UDS-16IUT0007';
        $objet6->id_user = '26';
        $objet6->diplome_entre = 'BAC D';
        $objet6->save();

        $objet7 = new Etudiant();
        $objet7->matricule_etudiant = 'CM-UDS-16IUT0008';
        $objet7->id_user = '27';
        $objet7->diplome_entre = 'BAC D';
        $objet7->save();

        $objet8 = new Etudiant();
        $objet8->matricule_etudiant = 'CM-UDS-16IUT0009';
        $objet8->id_user = '28';
        $objet8->diplome_entre = 'BAC D';
        $objet8->save();

        $objet9 = new Etudiant();
        $objet9->matricule_etudiant = 'CM-UDS-16IUT0010';
        $objet9->id_user = '29';
        $objet9->diplome_entre = 'BAC D';
        $objet9->save();
    }
}
