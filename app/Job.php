<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'en_name', 'ar_name', 'en_details', 'ar_details',
  ];
}
