<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeSuplement extends Model
{
    use HasFactory;
    protected $table = 'types_suplements';

    protected $fillable = [
        'name'
    ];



}
