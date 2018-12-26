<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LightOfFashion extends Model
{
    protected $table = "light_of_fashions";
    protected $fillable = ['name', 'image_url', 'image_type'];

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ($value);
    }
    public function setImageUrlAttribute($value)
    {
        $this->attributes['image_url'] = ($value);
    }
    public function setImageTypeAttribute($value)
    {
        $this->attributes['image_type'] = ($value);
    }
}
