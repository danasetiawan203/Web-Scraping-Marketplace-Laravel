<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    protected $table = 'pesan';
    protected $fillable = [
    'nama','email','subject', 'isi'
    ];
}
