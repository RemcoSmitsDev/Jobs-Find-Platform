<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'name', 'image', 'current_job', 'current_school', 'created_at', 'updated_at'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
