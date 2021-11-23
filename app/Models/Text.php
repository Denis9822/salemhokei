<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Text extends Model
{

    public function video(){
        return $this->hasOne('App\Models\Upload', 'id', 'video_id');
    }
    public function image(){
        return $this->hasOne('App\Models\Upload', 'id', 'image_id');
    }
    public function getVideoFileName(){

        if ($this->video){
            return $this->video->filename;
        }else{
            return '';
        }
    }
    public function getImageFileName(){

        if ($this->image){
            return $this->image->filename;
        }else{
            return '';
        }
    }

}
