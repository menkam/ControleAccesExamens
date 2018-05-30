<?php

use Illuminate\Database\Seeder;
use App\Models\Tp;
class TpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objet = new Tp();
        $objet->id_activite = '3';
        $objet->id_enseigant = '6';
        $objet->id_matiere = '1';
        $objet->id_creneau = '1';
        $objet->date_tp = '2018-05-05';
        $objet->save();
    }
}
