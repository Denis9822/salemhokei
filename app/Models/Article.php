<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Article extends Model
{
    protected $table = "articles";

    protected $fillable = [
        "alias"
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'date',
//        'published_at'
    ];

    public function author()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function checked($user_id = null)
    {
        if (Auth::user()) {
            if ($this->favorites()->where('id', '=', Auth::user()->id)->count() > 0) {
                return true;
            }
        }

        if ($user_id) {
            if ($this->favorites()->where('users.id', '=', $user_id)->count() > 0) {
                return true;
            }
        }

        return false;
    }

    public function favorites()
    {
        return $this->belongsToMany(User::class, 'user_invites', 'article_id', 'user_id');
    }


}
