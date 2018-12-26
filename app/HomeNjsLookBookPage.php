<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomeNjsLookBookPage extends Model
{
    protected $table = "home_njslookbookpages";
    protected $fillable = ['name', 'large_image_url', 'description'];

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ($value);
    }
    public function setImageUrlAttribute($value)
    {
        $this->attributes['image_url'] = ($value);
    }
    public function setLargeImageUrlAttribute($value)
    {
        $this->attributes['large_image_url'] = ($value);
    }
    public function setDescriptionAttribute($value)
    {
        $this->attributes['description'] = ($value);
    }
}
