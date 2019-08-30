<?php

use Illuminate\Database\Seeder;
use App\Model\Categori1;

class Categori1TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Categori1::create ([
        'id'=> '11',
        'nama'=>'Perawatan dan Kecantikan'
      ] );

      Categori1::create ([
        'id'=> '12',
        'nama'=>'Kesehatan'
      ] );

      Categori1::create ([
        'id'=> '13',
        'nama'=>'Perlengkapan Bayi'
      ] );

      Categori1::create ([
        'id'=> '14',
        'nama'=>'Fashion Wanita'
      ] );

      Categori1::create ([
        'id'=> '15',
        'nama'=>'Fashion Pria'
      ] );

      Categori1::create ([
        'id'=> '16',
        'nama'=>'Handphone'
      ] );

      Categori1::create ([
        'id'=> '17',
        'nama'=>'Komputer'
      ] );

      Categori1::create ([
        'id'=> '18',
        'nama'=>'Electronik'
      ] );

      Categori1::create ([
        'id'=> '19',
        'nama'=>'Kamera'
      ] );

      Categori1::create ([
        'id'=> '20',
        'nama'=>'Hobi Koleksi'
      ] );

      Categori1::create ([
        'id'=> '21',
        'nama'=>'Olahraga'
      ] );

      Categori1::create ([
        'id'=> '22',
        'nama'=>'Sepeda'
      ] );

      Categori1::create ([
        'id'=> '23',
        'nama'=>'Fashion Anak'
      ] );

      Categori1::create ([
        'id'=> '24',
        'nama'=>'Rumah Tangga'
      ] );

      Categori1::create ([
        'id'=> '25',
        'nama'=>'Food'
      ] );

      Categori1::create ([
        'id'=> '26',
        'nama'=>'Mobil, Part dan Aksesoris'
      ] );

      Categori1::create ([
        'id'=> '27',
        'nama'=>'Motor'
      ] );

      Categori1::create ([
        'id'=> '28',
        'nama'=>'Indutrial'
      ] );

      Categori1::create ([
        'id'=> '29',
        'nama'=>'Perlengkapan Kantor'
      ] );

    }
}
