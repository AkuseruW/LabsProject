<?php

use Illuminate\Database\Seeder;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            'titre' => 'ULTRA MODERN',
            'description'=>'Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec',
            'icones_Project'=>'10',
            'image_id'=>'3',
        ]);
        DB::table('projects')->insert([
            'titre' => 'RETINA READY',
            'description'=>'Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec',
            'icones_Project'=>'11',
            'image_id'=>'2',
        ]);
        DB::table('projects')->insert([
            'titre' => 'RESPONSIVE',
            'description'=>'Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec',
            'icones_Project'=>'12',
            'image_id'=>'1',
        ]);

        DB::table('projects')->insert([
            'titre' => 'GET IN THE LAB',
            'description'=>'Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec',
            'icones_Project'=>'13',
            'image_id'=>'3',
        ]);
        DB::table('projects')->insert([
            'titre' => 'PROJECTS ONLINE',
            'description'=>'Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec',
            'icones_Project'=>'14',
            'image_id'=>'2',
        ]);
        DB::table('projects')->insert([
            'titre' => 'SMART MARKETING',
            'description'=>'Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec',
            'icones_Project'=>'15',
            'image_id'=>'1',
        ]);
    }
}
