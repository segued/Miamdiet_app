<?php

namespace Database\Seeders;

use App\Models\Categorie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $categorie = new Categorie();
        $categorie->libelle = 'Salades';
        $categorie->save();

        $categorie = new Categorie();
        $categorie->libelle = 'Sandwichs';
        $categorie->save();

        $categorie = new Categorie();
        $categorie->libelle = 'Smoothies';
        $categorie->save();

        $categorie = new Categorie();
        $categorie->libelle = 'Jus';
        $categorie->save();

        $categorie = new Categorie();
        $categorie->libelle = 'Bouillies';
        $categorie->save();

        $categorie = new Categorie();
        $categorie->libelle = 'Soupes';
        $categorie->save();
    }
}
