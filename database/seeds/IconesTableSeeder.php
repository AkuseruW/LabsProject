<?php

use Illuminate\Database\Seeder;

class IconesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('icones')->insert([
            'name' => 'flask',
            'icone' => '<i class="flaticon-023-flask"></i>',
        ]);
        DB::table('icones')->insert([
            'name' => 'compass',
            'icone' => '<i class="flaticon-011-compass"></i>',
        ]);
        DB::table('icones')->insert([
            'name' => 'idea',
            'icone' => '<i class="flaticon-037-idea"></i>',
        ]);
        DB::table('icones')->insert([
            'name' => 'idea',
            'icone' => '<i class="flaticon-039-vector"></i>',
        ]);
        DB::table('icones')->insert([
            'name' => 'brainstorming',
            'icone' => '<i class="flaticon-036-brainstorming"></i>',
        ]);
        DB::table('icones')->insert([
            'name' => 'search',
            'icone' => '<i class="flaticon-026-search"></i>'
        ]);
        DB::table('icones')->insert([
            'name' => 'laptop',
            'icone' => '<i class="flaticon-018-laptop-1"></i>',
        ]);
        DB::table('icones')->insert([
            'name' => 'sketch',
            'icone' => '<i class="flaticon-043-sketch"></i>',
        ]);
        DB::table('icones')->insert([
            'name' => 'cube',
            'icone' => '<i class="flaticon-012-cube"></i>',
        ]);


        DB::table('icones')->insert([
            'name' => 'caliper',
            'icone' => '<i class="flaticon-002-caliper"></i>',
        ]);
        DB::table('icones')->insert([
            'name' => 'coffee-cup',
            'icone' => '<i class="flaticon-019-coffee-cup"></i>',
        ]);
        DB::table('icones')->insert([
            'name' => 'creativity',
            'icone' => '<i class="flaticon-020-creativity"></i>',
        ]);
        DB::table('icones')->insert([
            'name' => 'idea',
            'icone' => '<i class="flaticon-037-idea"></i>',
        ]);
        DB::table('icones')->insert([
            'name' => 'imagination',
            'icone' => '<i class="flaticon-025-imagination"></i>',
        ]);
        DB::table('icones')->insert([
            'name' => 'team',
            'icone' => '<i class="flaticon-008-team"></i>',
        ]);

    }
}
