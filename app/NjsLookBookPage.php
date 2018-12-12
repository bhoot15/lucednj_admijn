<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NjsLookBookPage extends Model
{
    protected $table = "njslookbookpages";
    protected $fillable = ['name', 'image_url', 'description'];

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ($value);
    }
    public function setImageUrlAttribute($value)
    {
        $this->attributes['image_url'] = ($value);
    }
    public function setDescriptionAttribute($value)
    {
        $this->attributes['description'] = ($value);
    }
}
