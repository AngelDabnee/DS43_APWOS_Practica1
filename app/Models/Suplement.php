<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TypeSuplement;

class Suplement extends Model
{
    use HasFactory;
    public function type(){
        return $this->belongsTo(TypeSuplement::class);
    }
}
