<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Garifuna extends Model
{
    use HasFactory;

    protected $table = 'garifuna';
    
    protected $fillable = [
        "palabra",
        "descripcion",
    ];
}
