<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'date_of_birth', 'phone'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public static function boot()
    {
        parent::boot();
        static::created(function ($user) {
            $user->profile()->create([
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/1024px-No_image_available.svg.png',
            ]);
        });
    }
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    public function project()
    {
        return $this->hasMany(Project::class)->orderBy('created_at', 'DESC');
    }

    public function job()
    {
        return $this->hasMany(Job::class);
    }

    public function school()
    {
        return $this->hasMany(School::class)->orderBy('created_at', 'DESC');
    }
}
