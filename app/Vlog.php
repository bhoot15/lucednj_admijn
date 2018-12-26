<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vlog extends Model
{
    protected $table = "vlogs";
    protected $fillable = ['name', 'video_url'];

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ($value);
    }
    public function setVideoUrlAttribute($value)
    {
        $this->attributes['video_url'] = ($value);
    }
}
