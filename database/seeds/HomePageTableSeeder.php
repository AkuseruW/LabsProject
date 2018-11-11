<?php

use Illuminate\Database\Seeder;

class HomePageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('text_editors')->insert([
            'text' => '',
        ]);
        DB::table('video_home_pages')->insert([
            'video' => '',
        ]);

    }
}
