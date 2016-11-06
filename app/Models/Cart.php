<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['user_id', 'payment'];

  public function user()
  {
    return $this->belongsTo('App\Models\User');
  }

  public function items()
  {
    return $this->hasMany('App\Models\CartItem');
  }
}
