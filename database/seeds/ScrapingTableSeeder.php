<?php

use Illuminate\Database\Seeder;
use App\Model\Scraping;

class ScrapingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Scraping::create( [
      'id'=>1,
      'id_user'=>1,
      'nama'=>'Super Admin',
      'no_identitas'=>'1517051127',
      'tanggal_lahir'=>'22-02-1997',
      'pekerjaan'=>'pengusaha',
      'no_hp'=>'0813-1818-1025',
      'id_prov'=>11,
      'id_kab'=>1103,
      'email'=>'scraping@gmail.com',
      'lat'=>4.522411,
      'long'=>97.611422,
      'alamat'=>'Jl.Sriwijaya GG.Melati No.20 Enggal, Bandar Lampung',
      'created_at'=>'2019-04-09 08:17:52',
      'updated_at'=>'2019-04-09 08:17:52',
      'email_verified_at'=>'2019-05-31 16:45:51'
      ] );

      Scraping::create( [
      'id'=>2,
      'id_user'=>2,
      'nama'=>'Harun',
      'no_identitas'=>'1517051150',
      'tanggal_lahir'=>'28-04-1997',
      'pekerjaan'=>'pelajar',
      'no_hp'=>'0812-1819-1325',
      'id_prov'=>11,
      'id_kab'=>1103,
      'email'=>'harun@gmail.com',
      'lat'=>4.522411,
      'long'=>97.611422,
      'alamat'=>'Jl.Kamboja GG.Melati No.21 Enggal, Bandar Lampung',
      'created_at'=>'2019-04-09 10:17:52',
      'updated_at'=>'2019-04-09 10:17:52',
      'email_verified_at'=>'2019-05-31 16:45:51'
      ] );

      Scraping::create( [
      'id'=>3,
      'id_user'=>3,
      'nama'=>'Micheal',
      'no_identitas'=>'1517051131',
      'tanggal_lahir'=>'17-10-1997',
      'pekerjaan'=>'pelajar',
      'no_hp'=>'0812-1817-1385',
      'id_prov'=>11,
      'id_kab'=>1103,
      'email'=>'micheal@gmail.com',
      'lat'=>4.522411,
      'long'=>97.611422,
      'alamat'=>'Jl.Asem GG.Melati No.21 Enggal, Bandar Lampung',
      'created_at'=>'2019-04-09 11:17:52',
      'updated_at'=>'2019-04-09 11:17:52',
      'email_verified_at'=>'2019-05-31 16:45:51'
      ] );

          }
}
