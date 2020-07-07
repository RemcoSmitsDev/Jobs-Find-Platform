<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacature extends Model
{
    protected $guarded = [];

    public function image()
    {
        return '/storage/' . $this->image;
    }
}
