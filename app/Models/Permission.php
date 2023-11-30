<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PermissionUser;
use App\Models\Access;


class Permission extends Model
{
    use HasFactory;
    public function users()
    {
        return $this->belongsToMany(User::class, 'permission_user');
    }
}
