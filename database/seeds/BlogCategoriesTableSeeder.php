<?php

use Illuminate\Database\Seeder;
use App\Models\BlogCategory;

class BlogCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         BlogCategory::create([
            'name'=>'Desarrollo',
            'description'=>'descripción para desarrollo',
            'slug'=>'desarrollo'
        ]);
         BlogCategory::create([
            'name'=>'3D',
            'description'=>'descripción para 3D',
            'slug'=>'3d'
        ]);
         BlogCategory::create([
            'name'=>'E-learning',
            'description'=>'descripción para e-learning',
            'slug'=>'e_learning'
        ]);
         BlogCategory::create([
            'name'=>'Marketing digital',
            'description'=>'Descripción para marketing digital',
            'slug'=>'marketing_digital'
        ]);


    }
}
