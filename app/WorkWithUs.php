<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkWithUs extends Model
{
    protected $table = "work_with_us";
    protected $fillable = ['content', 'email', 'message'];

    public function setContentAttribute($value)
    {
        $this->attributes['content'] = ($value);
    }

    public function setEmailAttribute($value)
    {
        $this->attributes['email'] = ($value);
    }

    public function setMessageAttribute($value)
    {
        $this->attributes['message'] = ($value);
    }
}
