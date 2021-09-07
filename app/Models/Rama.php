<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rama extends Model
{
    use HasFactory;

    // protected $table = 'rama';
    
    protected $fillable = [
        "palabra",
        "descripcion",
    ];
}
