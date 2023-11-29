<?php

namespace App\Models;

use App\Models\Composition;
use App\Models\Food;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Nutrient extends Model
{
    use HasFactory;
    
    protected $fillable= [
        'food_id',
        'composition_id',
        'description'
    ];

    public function composition(){
        return $this->belongsTo(Composition::class);
    }
    public function food(){
        return $this->belongsTo(Food::class);
    }
}
