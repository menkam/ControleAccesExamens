<?php

use Illuminate\Database\Seeder;
use App\Models\Cursus_acc;
class Cursus_accSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objet = new Cursus_acc();
        $objet->code = 'DUT';
        $objet->libelle = 'Diplome Universitaire de Technologie';
        $objet->save();

        $objet1 = new Cursus_acc();
        $objet1->code = 'BTS';
        $objet1->libelle = 'Brevet de Technicien Supérieur';
        $objet1->save();

        $objet2 = new Cursus_acc();
        $objet2->code = 'LT';
        $objet2->libelle = 'Licence de Technologie';
        $objet2->save();

        $objet2 = new Cursus_acc();
        $objet2->code = 'LP';
        $objet2->libelle = 'Licence Professionnelle';
        $objet2->save();
    }
}
