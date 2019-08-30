<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Blanja extends Model
{
  protected $table="blanja";

  protected $fillable = [
    'id_scraping','url','nama_barang','harga','berat','stock','deskripsi','cat1','cat2','cat3','ukuran','warna','foto'
  ];

    public function categori1(){
      return $this->belongsTo('App\Model\Categori1', 'cat1');
    }
    public function categori2(){
      return $this->belongsTo('App\Model\Categori2', 'cat2');
    }
    public function categori3(){
      return $this->belongsTo('App\Model\Categori3', 'cat3');
    }
}
