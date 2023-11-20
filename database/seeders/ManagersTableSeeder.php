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
        // Utilize a loop to generate 200 unique records
        for ($i = 1; $i <= 200; $i++) {
            Manager::create([
                'title' => 'Product ' . $i,
                'price' => rand(1000, 3000),
                'taxes' => rand(50, 200),
                'ads' => rand(25, 100),
                'discount' => rand(50, 150),
                'total' => rand(1000, 3000) + rand(50, 200) + rand(25, 100) - rand(50, 150),
                'category' => 'Category ' . rand(1, 5),
            ]);
        }
    }

}


