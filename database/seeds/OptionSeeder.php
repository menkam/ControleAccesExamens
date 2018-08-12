<?php

use Illuminate\Database\Seeder;
use App\Models\Option;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objet = new Option();
        $objet->id_parcour = '1';
        $objet->code = 'GI';
        $objet->libelle = 'Génie Informatique';
        $objet->save();

        $objet = new Option();
        $objet->id_parcour = '1';
        $objet->code = 'ISR';
        $objet->libelle = 'Concepteur-Développeur Réseaux et Internet';
        $objet->save();

        $objet = new Option();
        $objet->id_parcour = '1';
        $objet->code = 'GEL';
        $objet->libelle = 'Génie Et Logiciel';
        $objet->save();

        $objet = new Option();
        $objet->id_parcour = '2';
        $objet->code = 'CDRI';
        $objet->libelle = 'Concepteur-Développeur Réseaux et Internet';
        $objet->save();
    }
}
