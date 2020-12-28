<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
Use App\Models\User;

class GroupMember extends Model
{
    use HasFactory;

    public function get_member($id){
        return User::find($id);
    }
}
