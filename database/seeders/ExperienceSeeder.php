<?php

namespace Database\Seeders;

use App\Models\Experience;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Experience::create(array(
            "nom" => "Stage d'Ingénierie logicielle",
            "entreprise" => "Institut de Recherche pour le Developpement IRD (UMMISCO)",
            // "lien_entreprise" => "Nom",
            "contrat" => "Stage",
            "debut_experience" => "Avril 2019",
            "fin_experience" => "Octobre 2019",
            "outils" => "Angular 7 / Bootstrap / Spring Boot /MySql / Git",
            "environnement" => "VsCode",
            "statut" => 1
        ));
    }
}
