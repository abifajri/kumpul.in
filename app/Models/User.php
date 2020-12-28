<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

<<<<<<< HEAD
    public function messages()
    {
        return $this->hasMany(Message::class);
    }

=======
    public function groups()
    {
        return $this->belongsToMany(Group::class, 'group_members');
    }
    
    public function rooms() {
        return $this->hasMany('App\Models\Room');
    }
    
    public function memberOfRooms() {
        return $this->belongsToMany('App\Models\Room', 'user_room');
    }
>>>>>>> 3193f8e24c377eac4ff443c3434e9ce2d71d7d54
}
