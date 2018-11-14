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
        ]);
        DB::table('projects')->insert([
            'titre' => 'RETINA READY',
            'description'=>'Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec',
            'icones_Project'=>'11',
        ]);
        DB::table('projects')->insert([
            'titre' => 'RESPONSIVE',
            'description'=>'Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec',
            'icones_Project'=>'12',
        ]);

        DB::table('projects')->insert([
            'titre' => 'GET IN THE LAB',
            'description'=>'Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec',
            'icones_Project'=>'13',
        ]);
        DB::table('projects')->insert([
            'titre' => 'PROJECTS ONLINE',
            'description'=>'Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec',
            'icones_Project'=>'14',
        ]);
        DB::table('projects')->insert([
            'titre' => 'SMART MARKETING',
            'description'=>'Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec',
            'icones_Project'=>'15',
        ]);
    }
}
