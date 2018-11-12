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
            'icone' => '<i class="flaticon-023-flask"></i>',
        ]);
        DB::table('services')->insert([
            'titre' => 'PROJECTS ONLINE',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            'icone' => '<i class="flaticon-011-compass"></i>',
        ]);
        DB::table('services')->insert([
            'titre' => 'SMART MARKETING',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            'icone' => '<i class="flaticon-037-idea"></i>',
        ]);
        DB::table('services')->insert([
            'titre' => 'SOCIAL MEDIA',
            'description' => ' Test Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            'icone' => '<i class="flaticon-039-vector"></i>',
        ]);
        DB::table('services')->insert([
            'titre' => 'BRAINSTORMING',
            'description' => ' Test Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            'icone' => '<i class="flaticon-036-brainstorming"></i>',
        ]);

        DB::table('services')->insert([
            'titre' => 'DOCUMENTED',
            'description' => ' Test Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            'icone' => '<i class="flaticon-026-search"></i>'
        ]);
        DB::table('services')->insert([
            'titre' => 'RESPONSIVE',
            'description' => ' Test Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            'icone' => '<i class="flaticon-018-laptop-1"></i>',
        ]);
        DB::table('services')->insert([
            'titre' => 'RETINA READY',
            'description' => ' Test Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            'icone' => '<i class="flaticon-043-sketch"></i>',
        ]);
        DB::table('services')->insert([
            'titre' => 'ULTRA MODERN',
            'description' => ' Test Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            'icone' => '<i class="flaticon-012-cube"></i>',
        ]);
    }
}
