<?php

use Illuminate\Database\Seeder;
use App\Models\Domaine;

class DomaineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objet = new Domaine();
        $objet->id_cursus = '1';        
        $objet->code = 'ST';
        $objet->libelle = 'Science et Technologie';
        $objet->save();
    }
}
