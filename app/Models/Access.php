<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Permission;
use App\Models\User;



class Access extends Model
{
    use HasFactory;
    protected $table = 'permission_user';


    public function user(){
        return $this->hasOne(User::class);
    }
    public function permission(){
        return $this->hasOne(Permission::class);
    }
}
