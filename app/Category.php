<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'en_name', 'ar_name',
  ];

  /**
   * Get products for category
   *
   * @return response
   */
  public function products() {
    return $this->hasOne('App\Product', 'category_id', 'id');
  }
}
