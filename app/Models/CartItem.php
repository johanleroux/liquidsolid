<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['ad_id', 'quantity'];

  public function cart()
  {
    return $this->belongsTo('App\Models\Cart');
  }

  public function ad()
  {
    return $this->belongsTo('App\Models\Ad');
  }
}
