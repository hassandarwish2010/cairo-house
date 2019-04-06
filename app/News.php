<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
  /**
   * Table name
   *
   * @return string
   */
  protected $table = 'news';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'en_title', 'ar_title', 'en_details', 'ar_details', 'image', 'permalink', 'keywords', 'description',
  ];
}
