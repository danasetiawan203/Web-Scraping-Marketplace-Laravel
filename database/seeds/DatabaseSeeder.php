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
        $this->call(UsersTableSeeder::class);
        $this->call(Categori1TableSeeder::class);
        $this->call(Categori2TableSeeder::class);
        $this->call(Categori3TableSeeder::class);
        $this->call(ProvinsiTableSeeder::class);
        $this->call(KabupatenTableSeeder::class);
        $this->call(ScrapingTableSeeder::class);
        $this->call(SettingTableSeeder::class);
    }
}
