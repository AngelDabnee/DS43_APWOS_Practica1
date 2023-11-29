<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;
    protected $table = 'foods';

    protected $fillable = [
        'name',
        'img',
        'description',
        'composition_id'
    ];
    public function composition(){
        return $this->belongsTo(Composition::class);
    }
    public function goups_food(){
        return $this->belongsTo(FoodGroup::class);
    }
}
