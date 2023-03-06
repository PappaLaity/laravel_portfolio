<?php

namespace Database\Seeders;

use App\Models\Formation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Formation::create(array(
            "nom" => "Master Ingénierie Logiciel et Gestion de Données",
            "description" => "Conception Modélisation & Intégration & Développement Web - Mobile & Intelligence Artificielle & Base de donnée Multi Dimensionnelle & Data Mining & Big Data",
            "libelle" => "GDIL",
            "diplome" => "MASTER",
            "debut_formation" => "2017",
            "fin_formation" => "2020",
            "statut" => 1
        ));
    }
}
