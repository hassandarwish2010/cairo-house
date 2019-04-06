<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobApply extends Model
{
  /**
   * Table name
   *
   * @return string
   */
  protected $table = 'jobs_apply';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'name', 'email', 'details', 'cv', 'job_id',
  ];

  /**
   * Job data
   *
   * @return response
   */
  public function job() {
      return $this->hasOne('App\Job', 'id', 'job_id');
  }
}
