<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
