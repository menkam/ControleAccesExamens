<?php

use Illuminate\Database\Seeder;
Use App\Models\Activite_conc_classe;
class Activite_conc_classeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objet = new Activite_conc_classe();
        $objet->id_activite = '1';
        $objet->id_classe = '1';
        $objet->save();

        $objet1 = new Activite_conc_classe();
        $objet1->id_activite = '2';
        $objet1->id_classe = '1';
        $objet1->save();

        $objet = new Activite_conc_classe();
        $objet->id_activite = '1';
        $objet->id_classe = '4';
        $objet->save();

        $objet = new Activite_conc_classe();
        $objet->id_activite = '3';
        $objet->id_classe = '1';
        $objet->save();
    }
}
