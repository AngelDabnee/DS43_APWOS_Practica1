<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodGroup extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'food_id'
    ];

    public function composition(){
        return $this->belongsTo(Composition::class);
    }
    public function food(){
        return $this->belongsTo(Food::class);
    }
}
