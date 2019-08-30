<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Scraping extends Model
{
  use softDeletes;


  protected $fillable = [
    'id_user','nama','no_identitas','tanggal_lahir','pekerjaan','no_hp','id_prov','id_kab','email','lat','long','alamat','foto'
  ];

  public function provinsi(){
    return $this->belongsTo('App\Model\Provinsi', 'id_prov');
  }
  public function kabupaten(){
    return $this->belongsTo('App\Model\Kabupaten', 'id_kab');
  }

  public function user() {
    return $this->hasMany('App\User','id_user');
  }

    protected $table="scraping";
}
