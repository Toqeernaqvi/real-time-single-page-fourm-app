<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;
class replies extends Model
{
    public function question(){
        return $this->belongsTo(Question::class);
    }

    public function like(){
        return $this->hasMany(likes::class);
    }

    public function User(){
        return $this->belongsTo(User::class);
    }
}
