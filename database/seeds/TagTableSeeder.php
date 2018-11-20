<?php

use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            'name' => 'Branding',
            'slug' => 'branding',
        ]);
        DB::table('tags')->insert([
            'name' => 'Identity',
            'slug' => 'identity',
        ]);
        DB::table('tags')->insert([
            'name' => 'Video',
            'slug' => 'video',
        ]);
        DB::table('tags')->insert([
            'name' => 'Design',
            'slug' => 'design',
        ]);
        DB::table('tags')->insert([
            'name' => 'Inspiration',
            'slug' => 'inspiration',
        ]);
        DB::table('tags')->insert([
            'name' => 'Web design',
            'slug' => 'web-design',
        ]);
        DB::table('tags')->insert([
            'name' => 'Photography',
            'slug' => 'photography',
        ]);
    }
}
