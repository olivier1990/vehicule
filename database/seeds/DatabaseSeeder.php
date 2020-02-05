<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        App\Vehicule::create(
            [
                'marque' => 'Nissan',
                'prix' => 20000,
                'description' => 'Description',
                'couleur' => 'rouge',
                'modele' => 'QASHQAI',
            ]
        );
    }
}
