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
        $objet->duree = '45';
        $objet->libelle_creneaux = '08h00-08h45';
        $objet->save();

        $objet = new Creneaux_horaire();
        $objet->duree = '45';
        $objet->libelle_creneaux = '08h50-9h35';
        $objet->save();

        $objet = new Creneaux_horaire();
        $objet->duree = '45';
        $objet->libelle_creneaux = '09h40-10h25';
        $objet->save();

        $objet = new Creneaux_horaire();
        $objet->duree = '45';
        $objet->libelle_creneaux = '10h30-11h15';
        $objet->save();

        $objet = new Creneaux_horaire();
        $objet->duree = '45';
        $objet->libelle_creneaux = '11h20-12h05';
        $objet->save();

        $objet = new Creneaux_horaire();
        $objet->duree = '45';
        $objet->libelle_creneaux = '12h10-12h55';
        $objet->save();

        $objet = new Creneaux_horaire();
        $objet->duree = '45';
        $objet->libelle_creneaux = '13h00-13h45';
        $objet->save();

        $objet = new Creneaux_horaire();
        $objet->duree = '45';
        $objet->libelle_creneaux = '13h50-14h35';
        $objet->save();

        $objet = new Creneaux_horaire();
        $objet->duree = '45';
        $objet->libelle_creneaux = '14h40-15h25';
        $objet->save();


        $objet = new Creneaux_horaire();
        $objet->duree = '1';
        $objet->libelle_creneaux = '08h00-09h00';
        $objet->save();

        $objet = new Creneaux_horaire();
        $objet->duree = '1';
        $objet->libelle_creneaux = '09h00-10h00';
        $objet->save();

        $objet = new Creneaux_horaire();
        $objet->duree = '1';
        $objet->libelle_creneaux = '10h00-11h00';
        $objet->save();

        $objet = new Creneaux_horaire();
        $objet->duree = '1';
        $objet->libelle_creneaux = '11h00-12h00';
        $objet->save();

        $objet = new Creneaux_horaire();
        $objet->duree = '1';
        $objet->libelle_creneaux = '12h00-13h00';
        $objet->save();

        $objet = new Creneaux_horaire();
        $objet->duree = '1';
        $objet->libelle_creneaux = '13h00-14h00';
        $objet->save();

        $objet = new Creneaux_horaire();
        $objet->duree = '1';
        $objet->libelle_creneaux = '14h00-15h00';
        $objet->save();

        $objet = new Creneaux_horaire();
        $objet->duree = '1';
        $objet->libelle_creneaux = '15h00-16h00';
        $objet->save();

        $objet = new Creneaux_horaire();
        $objet->duree = '2';
        $objet->libelle_creneaux = '08h00-10h00';
        $objet->save();

        $objet = new Creneaux_horaire();
        $objet->duree = '2';
        $objet->libelle_creneaux = '10h00-12h00';
        $objet->save();

        $objet = new Creneaux_horaire();
        $objet->duree = '2';
        $objet->libelle_creneaux = '12h00-15h00';
        $objet->save();

        $objet = new Creneaux_horaire();
        $objet->duree = '2';
        $objet->libelle_creneaux = '09h00-11h00';
        $objet->save();

        $objet = new Creneaux_horaire();
        $objet->duree = '2';
        $objet->libelle_creneaux = '11h00-13h00';
        $objet->save();

        $objet = new Creneaux_horaire();
        $objet->duree = '2';
        $objet->libelle_creneaux = '13h00-15h00';
        $objet->save();
    }
}