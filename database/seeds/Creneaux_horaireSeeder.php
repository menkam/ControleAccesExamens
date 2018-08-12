<?php

use Illuminate\Database\Seeder;
use App\Models\Creneaux_horaire;
class Creneaux_horaireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objet = new Creneaux_horaire();
        $objet->duree = '30';
        $objet->libelle_creneaux = '08H00-08H30';
        $objet->save();

        $objet = new Creneaux_horaire();
        $objet->duree = '30';
        $objet->libelle_creneaux = '08H35-9H05';
        $objet->save();

        $objet = new Creneaux_horaire();
        $objet->duree = '30';
        $objet->libelle_creneaux = '09H10-10H40';
        $objet->save();

        $objet = new Creneaux_horaire();
        $objet->duree = '30';
        $objet->libelle_creneaux = '10H45-11H15';
        $objet->save();

        $objet = new Creneaux_horaire();
        $objet->duree = '30';
        $objet->libelle_creneaux = '11H20-11H50';
        $objet->save();

        $objet = new Creneaux_horaire();
        $objet->duree = '30';
        $objet->libelle_creneaux = '11H55-12H25';
        $objet->save();

        $objet = new Creneaux_horaire();
        $objet->duree = '30';
        $objet->libelle_creneaux = '12H30-13H00';
        $objet->save();

        $objet = new Creneaux_horaire();
        $objet->duree = '30';
        $objet->libelle_creneaux = '13H05-13H35';
        $objet->save();

        $objet = new Creneaux_horaire();
        $objet->duree = '30';
        $objet->libelle_creneaux = '13H40-14H10';
        $objet->save();


        $objet = new Creneaux_horaire();
        $objet->duree = '1';
        $objet->libelle_creneaux = '08H00-09H00';
        $objet->save();

        $objet = new Creneaux_horaire();
        $objet->duree = '1';
        $objet->libelle_creneaux = '09H00-10H00';
        $objet->save();

        $objet = new Creneaux_horaire();
        $objet->duree = '1';
        $objet->libelle_creneaux = '10H00-11H00';
        $objet->save();

        $objet = new Creneaux_horaire();
        $objet->duree = '1';
        $objet->libelle_creneaux = '11H00-12H00';
        $objet->save();

        $objet = new Creneaux_horaire();
        $objet->duree = '1';
        $objet->libelle_creneaux = '12H00-13H00';
        $objet->save();

        $objet = new Creneaux_horaire();
        $objet->duree = '1';
        $objet->libelle_creneaux = '13H00-14H00';
        $objet->save();

        $objet = new Creneaux_horaire();
        $objet->duree = '1';
        $objet->libelle_creneaux = '14H00-15H00';
        $objet->save();

        $objet = new Creneaux_horaire();
        $objet->duree = '1';
        $objet->libelle_creneaux = '15H00-16H00';
        $objet->save();

        $objet = new Creneaux_horaire();
        $objet->duree = '2';
        $objet->libelle_creneaux = '08H00-10H00';
        $objet->save();

        $objet = new Creneaux_horaire();
        $objet->duree = '2';
        $objet->libelle_creneaux = '10H00-12H00';
        $objet->save();

        $objet = new Creneaux_horaire();
        $objet->duree = '2';
        $objet->libelle_creneaux = '12H00-15H00';
        $objet->save();

        $objet = new Creneaux_horaire();
        $objet->duree = '2';
        $objet->libelle_creneaux = '09H00-11H00';
        $objet->save();

        $objet = new Creneaux_horaire();
        $objet->duree = '2';
        $objet->libelle_creneaux = '11H00-13H00';
        $objet->save();

        $objet = new Creneaux_horaire();
        $objet->duree = '2';
        $objet->libelle_creneaux = '13H00-15H00';
        $objet->save();
    }
}