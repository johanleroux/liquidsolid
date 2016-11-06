<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMediaConversions;

class Ad extends Model implements HasMediaConversions
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

  public function registerMediaConversions()
  {
    $this->addMediaConversion('thumb')
    ->setManipulations(['h' => 600])
    ->performOnCollections('images');

    $this->addMediaConversion('icon')
    ->setManipulations(['h' => 108, 'w' => 108])
    ->performOnCollections('images');
  }
}
