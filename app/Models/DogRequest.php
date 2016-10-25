<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DogRequest extends Model
{
  use SoftDeletes;

  /**
  * The table associated with the model.
  *
  * @var string
  */
  protected $table = 'dog_requests';

  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  protected $fillable = ['gender', 'breed', 'location', 'price_range_low', 'price_range_high', 'notes'];

  /**
  * The attributes that should be mutated to dates.
  *
  * @var array
  */
  protected $dates = ['deleted_at'];

  /**
  * Get the user that owns the todo.
  */
  public function user()
  {
    return $this->belongsTo('App\User');
  }
}
