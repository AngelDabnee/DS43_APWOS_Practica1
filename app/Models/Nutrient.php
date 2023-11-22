<?php

namespace App\Models;

use App\Models\Composition;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Nutrient extends Model
{
    use HasFactory;
    public function composition(){
        return $this->belongsTo(Composition::class);
    }
}
