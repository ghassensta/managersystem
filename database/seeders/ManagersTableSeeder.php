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
    $managers = [
        [
            'title' => 'iphone',
            'price' => 2000,
            'taxes' => 100,
            'ads' => 100,
            'discount' => 100,
            'total' => 2100,
            'category' => 'phone',
        ],
        [
            'title' => 'redmi',
            'price' => 1500,
            'taxes' => 75,
            'ads' => 50,
            'discount' => 90,
            'total' => 1535,
            'category' => 'tablet',
        ],
        [
            'title' => 'motrorela',
            'price' => 2500,
            'taxes' => 125,
            'ads' => 75,
            'discount' => 120,
            'total' => 2580,
            'category' => 'laptop',
        ],
        // Ajoutez autant d'enregistrements que nécessaire
    ];

    // Utilisez le modèle Manager pour insérer les données
    Manager::insert($managers);
}


}
