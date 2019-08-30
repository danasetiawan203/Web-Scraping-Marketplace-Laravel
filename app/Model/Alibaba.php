<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Alibaba extends Model //class oop
{
  protected $table="alibaba"; //properti table alibaba pada sebuah class

  protected $fillable = [
    'id_scraping','url','nama_barang','harga','berat','stock','deskripsi','cat1','cat2','cat3','ukuran','warna','foto'
  ]; //properti filleable yang akan di tampilkan pada sebuah class

  //Polymorphic Relationships
    public function categori1(){ //method konsep oop
      return $this->belongsTo('App\Model\Categori1', 'cat1'); //instance object oop
    }
    public function categori2(){
      return $this->belongsTo('App\Model\Categori2', 'cat2');
    }
    public function categori3(){
      return $this->belongsTo('App\Model\Categori3', 'cat3');
    }
}
