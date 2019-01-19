<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShopMyLook extends Model
{
    protected $table = "shop_my_look";
    protected $fillable = ['promo', 'image_url', 'description', 'booking_url'];

    public function setPromoAttribute($value)
    {
        $this->attributes['promo'] = ($value);
    }

    public function setImageUrlAttribute($value)
    {
        $this->attributes['image_url'] = ($value);
    }

    public function setDescriptionAttribute($value)
    {
        $this->attributes['description'] = ($value);
    }

    public function setBookingUrlAttribute($value)
    {
        $this->attributes['booking_url'] = ($value);
    }
}
