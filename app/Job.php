<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{

    protected $fillable = [
        'title', 'hours', 'salary', 'description', 'company_name', 'created_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
