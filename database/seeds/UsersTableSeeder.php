<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Axel',
            'email' => 'axel.wolfs@outlook.be',
            'password' => bcrypt('axel'),
            'roles_id' => '1',
            'positions_id' => '2',
            'image_user'=>'1',
        ]);

        DB::table('users')->insert([
            'name' => 'Vie',
            'email' => 'vie@outlook.be',
            'password' => bcrypt('vie'),
            'roles_id' => '3',
            'positions_id' => '3',
            'image_user'=>'3',
        ]);

        DB::table('users')->insert([
            'name' => 'Sale Sale Sale',
            'email' => 'aouais.aouais@outlook.be',
            'password' => bcrypt('sale'),
            'roles_id' => '3',
            'image_user'=>'3',
        ]);

        DB::table('users')->insert([
            'name' => 'Dams',
            'email' => 'damsdams@outlook.be',
            'password' => bcrypt('dams'),
            'roles_id' => '3',
            'image_user'=>'3',
        ]);

        DB::table('users')->insert([
            'name' => 'Ralph',
            'email' => 'rara@outlook.be',
            'password' => bcrypt('rara'),
            'roles_id' => '3',
            'positions_id' => '4',
            'image_user'=>'3',
        ]);

        DB::table('users')->insert([
            'name' => 'Mikael',
            'email' => 'mika@outlook.be',
            'password' => bcrypt('mika'),
            'roles_id' => '3',
            'positions_id' => '4',
            'image_user'=>'3',
        ]);
    }
}
