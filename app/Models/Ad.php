<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMedia;

class Ad extends Model implements HasMedia
{
  use SoftDeletes, HasMediaTrait;

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
