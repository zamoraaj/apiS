<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mayagna extends Model
{
    use HasFactory;

    // protected $table = 'mayagna';
    
    protected $fillable = [
        "palabra",
        "descripcion",
    ];
}
