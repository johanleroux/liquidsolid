<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Breed extends Model
{
  use SoftDeletes;

  /**
  * The table associated with the model.
  *
  * @var string
  */
  protected $table = 'breeds';

  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  protected $fillable = ['name'];

  /**
  * The attributes that should be mutated to dates.
  *
  * @var array
  */
  protected $dates = ['deleted_at'];

  public function ads()
  {
    return $this->hasMany('App\Models\Ad');
  }

  public function scopeOrderByAds($query)
  {
    $query->leftJoin('ads', 'ads.breed_id', '=', 'breeds.id')
    ->selectRaw('breeds.*, count(ads.id) as ads_count')
    ->groupBy('breeds.id')
    ->orderBy('ads_count', 'desc');
  }
}
