<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    protected $table="provinsi";

    protected $fillable = [
      'nama'
    ];
}
