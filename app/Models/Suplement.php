<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suplement extends Model
{
    use HasFactory;
    public function typesuplement(){
        return $this->belongsTo(TypeSuplement::class);
    }
}
