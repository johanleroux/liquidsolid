<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ad extends Model
{
  use SoftDeletes;

  /**
  * The table associated with the model.
  *
  * @var string
  */
  protected $table = 'ads';

  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  protected $fillable = ['breed_id', 'title', 'location', 'description', 'price'];

  /**
  * The attributes that should be mutated to dates.
  *
  * @var array
  */
  protected $dates = ['deleted_at'];

  public function breed()
  {
    return $this->belongsTo('App\Models\Breed');
  }

  public function user()
  {
    return $this->belongsTo('App\Models\User');
  }
}
