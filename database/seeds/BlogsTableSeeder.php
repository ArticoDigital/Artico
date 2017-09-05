<?php

use Illuminate\Database\Seeder;
use App\Models\Blog;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         Blog::create([
            'post_slug'=>'desarrollo_web',
            'post_img'=>'URL imagen',
            'post_title'=>'Desarrollo Web',
            'post_abstract'=>'Este es el resumen de este post <i>AJA</i>',
            'post_content'=>'<p>Hola, este es el contenido de este post, debe estar en <strong>HTML</strong>',
            'post_comments_count'=>4,
            'post_views_count'=>120,
            'post_active'=>1,
            'post_tags'=>'web,php,laravel,desarrollo web',
            'blog_category_id'=>'1'

        ]);
         Blog::create([
            'post_slug'=>'elearning_uno',
            'post_img'=>'URL imagen',
            'post_title'=>'elearning uno',
            'post_abstract'=>'Este es el resumen de este post <i>AJA</i>',
            'post_content'=>'<p>Hola, este es el contenido de este post, debe estar en <strong>HTML</strong>',
            'post_comments_count'=>4,
            'post_views_count'=>10,
            'post_active'=>1,
            'post_tags'=>'web,php,laravel,educación',
            'blog_category_id'=>'3'

        ]);
         Blog::create([
            'post_slug'=>'tres_d',
            'post_img'=>'URL imagen',
            'post_title'=>'Tres D',
            'post_abstract'=>'Este es el resumen de este post <i>AJA</i>',
            'post_content'=>'<p>Hola, este es el contenido de este post, debe estar en <strong>HTML</strong>',
            'post_comments_count'=>400,
            'post_views_count'=>10990,
            'post_active'=>1,
            'post_tags'=>'web,php,laravel,desarrollo web',
            'blog_category_id'=>'2'

        ]);
    }
}
