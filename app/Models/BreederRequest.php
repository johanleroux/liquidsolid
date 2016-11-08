<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMedia;

class BreederRequest extends Model implements HasMedia
{
  use SoftDeletes, HasMediaTrait;

  /**
  * The table associated with the model.
  *
  * @var string
  */
  protected $table = 'breeder_requests';

  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  protected $fillable = ['name', 'location', 'notes'];

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
}
