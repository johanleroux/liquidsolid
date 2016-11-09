<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

  /**
  * The table associated with the model.
  *
  * @var string
  */
  protected $table = 'orders';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['seller_id', 'payment'];

  public function user()
  {
    return $this->belongsTo('App\Models\User');
  }

  public function order_details()
  {
    return $this->hasMany('App\Models\OrderDetail');
  }

  public function getTotal()
  {
    return $this->order_details->sum(function($detail){
      return $detail->price * $detail->quantity;
    });
  }

  public function getBuyer()
  {
    return $this->user;
  }

  public function getSeller()
  {
    $item = $this->order_details->first();
    return $item->ad->user;
  }

  public function getCommision()
  {
    return $this->getTotal() - ($this->getTotal() * 100 / 110);
  }
}
