<?php

use Illuminate\Database\Seeder;

class servicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'titre' => 'GET IN THE LAB',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            'icones_id' => '1',
        ]);
        DB::table('services')->insert([
            'titre' => 'PROJECTS ONLINE',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            'icones_id' => '2',
        ]);
        DB::table('services')->insert([
            'titre' => 'SMART MARKETING',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            'icones_id' => '3',
        ]);
        DB::table('services')->insert([
            'titre' => 'SOCIAL MEDIA',
            'description' => ' Test Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            'icones_id' => '4',
        ]);
        DB::table('services')->insert([
            'titre' => 'BRAINSTORMING',
            'description' => ' Test Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            'icones_id' => '5',
        ]);

        DB::table('services')->insert([
            'titre' => 'DOCUMENTED',
            'description' => ' Test Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            'icones_id' => '6',
        ]);
        DB::table('services')->insert([
            'titre' => 'RESPONSIVE',
            'description' => ' Test Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            'icones_id' => '7',
        ]);
        DB::table('services')->insert([
            'titre' => 'RETINA READY',
            'description' => ' Test Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            'icones_id' => '8',
        ]);
        DB::table('services')->insert([
            'titre' => 'ULTRA MODERN',
            'description' => ' Test Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            'icones_id' => '9',
        ]);
    }
}
