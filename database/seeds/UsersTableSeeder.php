<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $data = new User;
        $data->name       = 'Super Admin';
        $data->email      = 'scraping@gmail.com';
        $data->id_role    = 1;
        $data->password   = bcrypt('123456');
        $data->save();


        $data = new User;
          $data->name       = 'Harun';
          $data->email      = 'Harun@gmail.com';
          $data->id_role    = 2;
          $data->password   = bcrypt('123456');
          $data->save();

        $data = new User;
          $data->name       = 'Micheal';
          $data->email      = 'micheal@gmail.com';
          $data->id_role    = 2;
          $data->password   = bcrypt('123456');
          $data->save();
    }
}
