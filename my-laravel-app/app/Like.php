<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $fillable = ['reply_id','user_id'];

    public function reply()
  {
    return $this->belongsTo('App\Post');
  }

  public function replyUser()
  {
    return $this->belongsTo('App\user');
  }
}
