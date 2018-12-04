<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SignatureCollectionPage extends Model
{
    use SoftDeletes;
    protected $table = "signature_collection_page";
    protected $fillable = ['name', 'image_url'];

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ($value);
    }
    public function setImageUrlAttribute($value)
    {
        $this->attributes['image_url'] = ($value);
    }
}
