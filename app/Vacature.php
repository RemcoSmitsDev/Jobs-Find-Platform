<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacature extends Model
{
    protected $fillable = [
        'title', 'hours', 'salary', 'description', 'company_name', 'website', 'created_at'
    ];
}
