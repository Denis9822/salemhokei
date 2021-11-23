<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Schoreg extends Model
{
    protected $table = "schoolreg";

    protected $fillable = ['first_name', 'last_name', 'email', 'phone', 'avatar', 'sex', 'cite', 'shool','lang'];
    protected $dates = [
        'created_at',
        'updated_at',
    ];


}
