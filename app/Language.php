<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Language extends Model
{
    public function user(){
        return $this->belongsTo(User::class, "user_id", 'id');
    }
}
