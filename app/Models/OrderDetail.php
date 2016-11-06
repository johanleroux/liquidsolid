<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderDetail extends Model
{
  use SoftDeletes;

  /**
  * The table associated with the model.
  *
  * @var string
  */
  protected $table = 'order_details';

  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  protected $fillable = ['ad_id', 'quantity', 'price'];

  /**
  * The attributes that should be mutated to dates.
  *
  * @var array
  */
  protected $dates = ['deleted_at'];

  public function order()
  {
    return $this->belongsTo('App\Models\Order');
  }

  public function ad()
  {
    return $this->belongsTo('App\Models\Ad');
  }

  public function getTotal()
  {
    return $this->price * $this->quantity;
  }
}
