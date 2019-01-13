<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomeInstaLucednj extends Model
{
    protected $table = "home_insta_lucednj";
    protected $fillable = ['name', 'insta_content'];

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ($value);
    }
    public function setInstaContentAttribute($value)
    {
        $this->attributes['insta_content'] = ($value);
    }
}
