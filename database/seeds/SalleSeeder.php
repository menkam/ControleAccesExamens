<?php

use Illuminate\Database\Seeder;
use App\Models\Salle;
class SalleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objet = new Salle();
        $objet->code_salle = 'C01';
        $objet->libelle_salle = 'Amphie A';
        $objet->nbre_places = '200';
        $objet->save();

        $objet1 = new Salle();
        $objet1->code_salle = 'B01';
        $objet1->libelle_salle = 'Salle de desing';
        $objet1->nbre_places = '100';
        $objet1->save();

        $objet = new Salle();
        $objet->code_salle = 'B02';
        $objet->libelle_salle = 'Salle de conférence';
        $objet->nbre_places = '98';
        $objet->save();

        $objet = new Salle();
        $objet->code_salle = 'A03';
        $objet->libelle_salle = 'Salle genie elect';
        $objet->nbre_places = '70';
        $objet->save();

        $objet = new Salle();
        $objet->code_salle = 'A10';
        $objet->libelle_salle = 'salle licence IR';
        $objet->nbre_places = '50';
        $objet->save();
    }
}
