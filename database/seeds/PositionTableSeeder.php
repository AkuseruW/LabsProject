<?php

use Illuminate\Database\Seeder;

class PositionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('positions')->insert([
            'name' => 'WebDev',
        ]);
        DB::table('positions')->insert([
            'name' => 'Concepteur de DB',
        ]);
    }
}
