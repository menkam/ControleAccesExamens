<?php

use Illuminate\Database\Seeder;
use App\Models\Mention;

class MentionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objet = new Mention();
        $objet->id_domaine = '1';
        $objet->code = 'GI';
        $objet->libelle = 'Génie Informatique';
        $objet->save();
    }
}
