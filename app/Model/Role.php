<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
  use softDeletes;
protected $table = 'roles';


protected static function boot() {
  parent::boot();
  static::deleting(function($data){
    $data->users()->Delete();
  });
}

public function users() {
  return $this->hasMany('App\Model\User', 'id_role');
}
}
