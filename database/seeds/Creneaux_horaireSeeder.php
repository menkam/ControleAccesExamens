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
        $objet->libelle_creneaux = '08h00-09h00';
        $objet->save();

        $objet1 = new Creneaux_horaire();
        $objet1->libelle_creneaux = '09h00-10h00';
        $objet1->save();

        $objet2 = new Creneaux_horaire();
        $objet2->libelle_creneaux = '10h00-11h00';
        $objet2->save();

        $objet3 = new Creneaux_horaire();
        $objet3->libelle_creneaux = '11h00-12h00';
        $objet3->save();

        $objet4 = new Creneaux_horaire();
        $objet4->libelle_creneaux = '12h00-13h00';
        $objet4->save();

        $objet5 = new Creneaux_horaire();
        $objet5->libelle_creneaux = '13h00-14h00';
        $objet5->save();

        $objet6 = new Creneaux_horaire();
        $objet6->libelle_creneaux = '14h00-15h00';
        $objet6->save();

        $objet7 = new Creneaux_horaire();
        $objet7->libelle_creneaux = '15h00-16h00';
        $objet7->save();

        $objet8 = new Creneaux_horaire();
        $objet8->libelle_creneaux = '08h00-10h00';
        $objet8->save();

        $objet9 = new Creneaux_horaire();
        $objet9->libelle_creneaux = '10h00-12h00';
        $objet9->save();

        $objet11 = new Creneaux_horaire();
        $objet11->libelle_creneaux = '12h00-15h00';
        $objet11->save();

        $objet22 = new Creneaux_horaire();
        $objet22->libelle_creneaux = '09h00-11h00';
        $objet22->save();

        $objet12 = new Creneaux_horaire();
        $objet12->libelle_creneaux = '11h00-13h00';
        $objet12->save();

        $objet23 = new Creneaux_horaire();
        $objet23->libelle_creneaux = '13h00-15h00';
        $objet23->save();
    }
}