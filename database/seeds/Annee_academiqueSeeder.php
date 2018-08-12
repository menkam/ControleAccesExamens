<?php

use App\Models\Annee_academique;
use Illuminate\Database\Seeder;

class Annee_academiqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objet = new Annee_academique(); 
        $objet->libelle_annee = '2017-2018';
        $objet->save();

        $objet = new Annee_academique(); 
        $objet->libelle_annee = '2018-2019';
        $objet->save();

    }
}
