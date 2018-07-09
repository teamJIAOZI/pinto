<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

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
    
    public function liking()
    {
        return $this->belongsToMany(Item::class, 'favorites', 'user_id', 'favorite_id')->withTimestamps();
    }
     public function like($userId)
{
    // Userが既にいいねしているかどうか
    $exist = $this->is_liking($userId);
    // confirming that it is not you
    

    if ($exist) {
        // いいねしてたら何も起きない
        return false;
    } else {
        // いいねしてなかったらいいね出来る
        $this->liking()->attach($userId);
        return true;
    }
}

public function unlike($userId)
{
    // confirming if already following
    $exist = $this->is_liking($userId);
    // confirming that it is not you
    


    if ($exist) {
        // stop following if following
        $this->liking()->detach($userId);
        return true;
    } else {
        // do nothing if not following
        return false;
    }
}

public function is_liking($userId) {
    return $this->liking()->where('favorite_id', $userId)->exists();
}


}
