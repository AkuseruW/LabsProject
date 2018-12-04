<?php

use Illuminate\Database\Seeder;

class ImgCommentaireTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('image_commentaires')->insert([
            'image' => '01.jpg',
        ]);
        DB::table('image_commentaires')->insert([
            'image' => '02.jpg',
        ]);
        DB::table('image_commentaires')->insert([
            'image' => '03.jpg',
        ]);    
    }
}
