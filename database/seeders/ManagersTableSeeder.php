<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Manager;

class ManagersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{

        // Utilisez une boucle pour générer 200 enregistrements uniques
        for ($i = 1; $i <= 200; $i++) {
            Manager::create([
                'title' => 'Product ' . $i,
                'price' => rand(1000, 3000), // Générez un prix aléatoire
                'taxes' => rand(50, 200),   // Générez des taxes aléatoires
                'ads' => rand(25, 100),     // Générez des coûts publicitaires aléatoires
                'discount' => rand(50, 150), // Générez des remises aléatoires
                'total' => 0,               // Laissez la colonne "total" à 0 pour le moment
                'category' => 'Category ' . rand(1, 5), // Générez une catégorie aléatoire
            ]);
        }

    }
}


