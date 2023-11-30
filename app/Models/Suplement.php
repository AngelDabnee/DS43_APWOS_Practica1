<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TypeSuplement;

class Suplement extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type_id',
        'effects',
        'benefits',
        'dosis',
        'risk',
        'img'
    ];
    public function type(){
        return $this->belongsTo(TypeSuplement::class);
    }
}
