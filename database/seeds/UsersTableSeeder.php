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
        ]);
    }
}
