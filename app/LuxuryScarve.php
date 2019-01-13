<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LuxuryScarve extends Model
{
    protected $table = "luxury_scarves";
    protected $fillable = ['image_url', 'title', 'author', 'description', 'style_no', 'book_this_look_url', 'buyers_guideline_url', 'available_pcs'];

    public function setImageUrlAttribute($value)
    {
        $this->attributes['image_url'] = ($value);
    }

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = ($value);
    }

    public function setAuthorAttribute($value)
    {
        $this->attributes['author'] = ($value);
    }

    public function setDescriptionAttribute($value)
    {
        $this->attributes['description'] = ($value);
    }

    public function setStyleNoAttribute($value)
    {
        $this->attributes['style_no'] = ($value);
    }

    public function setBookThisLookUrlAttribute($value)
    {
        $this->attributes['book_this_look_url'] = ($value);
    }

    public function setBuyersGuidelineUrlAttribute($value)
    {
        $this->attributes['buyers_guideline_url'] = ($value);
    }

    public function setAvailablePcsAttribute($value)
    {
        $this->attributes['available_pcs'] = ($value);
    }
}
