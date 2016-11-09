<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
  use SoftDeletes;

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

  /**
  * The attributes that should be mutated to dates.
  *
  * @var array
  */
  protected $dates = ['deleted_at'];

  public function user()
  {
    return $this->belongsTo('App\Models\User');
  }

  public function order_details()
  {
    return $this->hasMany('App\Models\OrderDetail')->withTrashed();
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

/**
 * Order order model to sort by highest quantity
 * @param  $query
 * @return
 */
  public function scopeOrderByQuantity($query)
  {
    $query->leftJoin('order_details', 'order_details.order_id', '=', 'orders.id')
    ->selectRaw('orders.*, sum(order_details.quantity) as order_total')
    ->groupBy('orders.id', 'orders.user_id', 'orders.seller_id', 'orders.payment', 'orders.buyer_approved_at', 'orders.seller_approved_at', 'orders.created_at', 'orders.updated_at', 'orders.deleted_at')
    ->orderBy('order_total', 'desc');
  }
}
