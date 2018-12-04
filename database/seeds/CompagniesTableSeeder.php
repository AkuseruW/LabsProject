<?php

use Illuminate\Database\Seeder;

class CompagniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('compagnies')->insert([
            'lieux' => 'C/ Libertad, 34 05200 Arévalo',
            'description' => 'Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum.',
            'numero' => '0034 37483 2445 322',
            'email' => 'hello@company.com',
        ]);
    }
}
