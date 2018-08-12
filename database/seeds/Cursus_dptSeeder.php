<?php

use Illuminate\Database\Seeder;
use App\Models\Cursus_dpt;

class Cursus_dptSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objet = new Cursus_dpt();
        $objet->id_cursus = '1';
        $objet->id_dpt = '1';
        $objet->save();

        $objet = new Cursus_dpt();
        $objet->id_cursus = '3';
        $objet->id_dpt = '1';
        $objet->save();
    }
}
