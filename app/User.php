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
        'name', 'email', 'password', 'is_admin','phone'
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

    public function Address(){
        return $this->belongsTo(Address::class, "id", 'user_id');
    }
    public function Education(){
        return $this->belongsTo(Education::class, "id", 'user_id');
    }
    public function Experience(){
        return $this->belongsTo(Experience::class, "id", 'user_id');
    }
    public function Language(){
        return $this->belongsTo(Language::class, "id", 'user_id');
    }
    public function Mailing(){
        return $this->belongsTo(Mailing::class, "id", 'user_id');
    }
    public function Nominee(){
        return $this->belongsTo(Nominee::class, "id", 'user_id');
    }
    public function Personal(){
        return $this->belongsTo(Personal::class, "id", 'user_id');
    }
}
