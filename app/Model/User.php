<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Notifications\VerifyEmail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    use softDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','id_role','aktif','foto'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function isOnline()
    {
      return Cache::has('user-is-online'.$this->id);
    }

    public function verified()
    {
      return $this->token === null;
    }

    public function sendVerificationEmail()
    {
      $this->notify(new VerifyEmail($this));
    }
}
