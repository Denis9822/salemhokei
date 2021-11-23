<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = "albums";
	protected $fillable = ['alias'];

    public function images()
    {
        return $this->belongsToMany(AlbumImage::class, "article_image", "article_id", "image_id");
    }
}
