<?php

use Illuminate\Database\Seeder;
use App\Models\Etud_realise_activ;
class Etud_realise_activSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objet = new Etud_realise_activ();
        $objet->id_activite = '1';
        $objet->id_etud_ins_mat = '1';
        $objet->save();
    }
}
