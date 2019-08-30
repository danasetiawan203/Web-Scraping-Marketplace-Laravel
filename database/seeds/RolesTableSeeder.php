<?php

use Illuminate\Database\Seeder;
use App\Model\Roles;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('roles')->insert([
        'id' => '1',
        'nama' => 'Super Admin',
      ]);

      DB::table('roles')->insert([
        'id' => '2',
        'nama' => 'Dropshipper',
      ]);

    }
}
