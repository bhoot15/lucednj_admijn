<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = "lucednj_uploads";
    protected $fillable = ['name', 'file_name'];

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ($value);
    }

    public function setFileNameAttribute($value)
    {
        $this->attributes['file_name'] = ($value);
    }
}
