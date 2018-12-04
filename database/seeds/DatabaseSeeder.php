<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(IconesTableSeeder::class);
        $this->call(ImageTableSeeder::class);
        $this->call(servicesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(HomePageTableSeeder::class);
        $this->call(ProjectTableSeeder::class);
        $this->call(TagTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(ImgCommentaireTableSeeder::class);
        $this->call(CompagniesTableSeeder::class);
        $this->call(InstagramTableSeeder::class);
    }
}
