<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    protected $table = "about_us";
    protected $fillable = ['para_1', 'para_2','image_url'];

    public function setPara1Attribute($value)
    {
        $this->attributes['para_1'] = ($value);
    }
    public function setPara2Attribute($value)
    {
        $this->attributes['para_2'] = ($value);
    }
    public function setImageUrlAttribute($value)
    {
        $this->attributes['image_url'] = ($value);
    }

}
