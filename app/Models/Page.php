<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Page extends Model
{
    protected $table = "pages";

    public $casts = [
        "accordion_ru" => "array",
        "accordion_kk" => "array",
        "accordion_en" => "array",

        "employees_ru" => "array",
        "employees_kk" => "array",
        "employees_en" => "array",
    ];

    protected $fillable = [
        "alias"
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];


    public function getDescriptionAttribute()
    {
        if(app()->getLocale() == 'ru')
            return $this->description_ru;
        if(app()->getLocale() == 'kk')
            return $this->description_kk;
    }

    public function getAccordionAttribute()
    {
        if(app()->getLocale() == 'ru')
            return $this->accordion_ru;
        if(app()->getLocale() == 'kk')
            return $this->accordion_kk;
    }
}
