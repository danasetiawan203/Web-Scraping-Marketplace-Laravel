<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{

  protected $fillable = [
    'Marketplace','nama','Harga','deskripsi','foto'
  ];

    protected $table="setting";
    
}
