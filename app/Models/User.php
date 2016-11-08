<?php

namespace App\Models;

use Cmgmyr\Messenger\Traits\Messagable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
  use Notifiable, Messagable, HasRoles;

  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  protected $fillable = [
    'name', 'email', 'password', 'company', 'street'
  ];

  /**
  * The attributes that should be hidden for arrays.
  *
  * @var array
  */
  protected $hidden = [
    'password', 'remember_token',
  ];

  public function ads()
  {
    return $this->hasMany('App\Models\Ad');
  }

  public function cart()
  {
    return $this->hasOne('App\Models\Cart');
  }

  public function orders()
  {
    return $this->hasMany('App\Models\Order');
  }

  public function sales()
  {
    return $this->hasMany('App\Models\Order', 'seller_id');
  }

  public function breeder_requests()
  {
    return $this->hasMany('App\Models\BreederRequest');
  }
}
