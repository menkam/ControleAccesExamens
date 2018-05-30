<?php

use Illuminate\Database\Seeder;
use App\Models\Salle_activite;
class Salle_ActiviteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objet = new Salle_activite();
        $objet->id_activite = '1';
        $objet->id_salle = '1';
        $objet->save();

        $objet = new Salle_activite();
        $objet->id_activite = '2';
        $objet->id_salle = '2';
        $objet->save();

        $objet = new Salle_activite();
        $objet->id_activite = '1';
        $objet->id_salle = '2';
        $objet->save();

        $objet = new Salle_activite();
        $objet->id_activite = '3';
        $objet->id_salle = '3';
        $objet->save();
    }
}
