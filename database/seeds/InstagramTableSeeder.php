<?php

use Illuminate\Database\Seeder;

class InstagramTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('instagrams')->insert([
            'img' => '1.jpg'
        ]);
        DB::table('instagrams')->insert([
            'img' => '2.jpg'
        ]);
        DB::table('instagrams')->insert([
            'img' => '3.jpg'
        ]);
        DB::table('instagrams')->insert([
            'img' => '4.jpg'
        ]);
        DB::table('instagrams')->insert([
            'img' => '5.jpg'
        ]);
        DB::table('instagrams')->insert([
            'img' => '6.jpg'
        ]);        
    }
}
