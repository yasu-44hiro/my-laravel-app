<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    public function user()
    {   //usersテーブルとのリレーションを定義するuserメソッド
        return $this->belongsTo(User::class);
    }

    public function review()
    {   //reviewsテーブルとのリレーションを定義するreviewメソッド
        return $this->belongsTo(Post::class);
    }
}
