<?php

use Illuminate\Database\Seeder;
use App\Models\Parcour;

class ParcourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objet = new Parcour();
        $objet->id_mention = '1';
        $objet->code = 'GI';
        $objet->libelle = 'Génie Informatique';
        $objet->save();     

        $objet = new Parcour();
        $objet->id_mention = '1';
        $objet->code = 'IR';
        $objet->libelle = 'Informatique et réseaux';
        $objet->save();
    }
}
