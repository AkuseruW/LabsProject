<?php

use Illuminate\Database\Seeder;

class ImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            'url' => '2.jpg',
        ]);
        DB::table('images')->insert([
            'url' => '3.jpg',
        ]);
        DB::table('images')->insert([
            'url' => '1.jpg',
        ]);
    }
}
