<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    public function members() {
        return $this->belongsToMany('App\Models\User', 'user_room');
    }

    public function admin() {
        return $this->belongsTo(User::class, 'admin_id');
    }
}
