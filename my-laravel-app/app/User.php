<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function todos()
    {
        return $this->hasMany('App\Todo');
    }
    public function users()
    {
        return $this->hasMany('App\Post' , 'user_id');
    }

    public function favorites()
    {
        return $this->belongsToMany('App\Post', 'likes', 'user_id', 'posts_id')->withTimestamps();
    }

    public function favorite($movieId)
    {
        $exist = $this->is_favorite($movieId);

        if($exist){
            return false;
        }else{
            $this->favorites()->attach($movieId);
            return true;
        }
    }

    public function unfavorite($movieId)
    {
        $exist = $this->is_favorite($movieId);

        if($exist){
            $this->favorites()->detach($movieId);
            return true;
        }else{
            return false;
        }
    }

    public function is_favorite($movieId)
    {
        return $this->favorites()->where('movie_id',$movieId)->exists();
    }
}
