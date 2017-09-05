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
            'description'=>'descripción para desarrollo'
        ]);
         BlogCategory::create([
            'name'=>'3D',
            'description'=>'descripción para 3D'
        ]);
         BlogCategory::create([
            'name'=>'E-learning',
            'description'=>'descripción para e-learning'
        ]);


    }
}
