<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AlbumImage extends Model
{
    protected $table = "album_images";

    public function album()
    {
        return $this->hasOne(Album::class, 'id', 'album_id');
    }
}
