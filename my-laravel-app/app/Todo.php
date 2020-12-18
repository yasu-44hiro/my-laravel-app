<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
  protected $guarded = array('id');

  public static $rules = array(
    'user_id' => 'integer',
    'product_number' => 'alpha_dash',
    'level' => 'integer',
    'detail' => 'required',
    'status' => 'boolean',
  );

  public function user()
  {
    return $this->belongsTo('App\User');
  }
}
