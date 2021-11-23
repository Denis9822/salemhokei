<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Event extends Model
{
    protected $table = "events";

    protected $fillable = [
        "alias"
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'date',
//        'published_at'
    ];


}
