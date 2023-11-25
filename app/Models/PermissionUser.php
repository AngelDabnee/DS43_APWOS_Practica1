<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermissionUser extends Model
{
    use HasFactory;
    protected $table = 'permission_user';


    public function User(){
        return $this->belongsTo(User::class);
    }
    public function permissions_level(){
        return $this->belongsTo(Permission::class);
    }
}
