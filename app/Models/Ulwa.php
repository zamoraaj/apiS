<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ulwa extends Model
{
    use HasFactory;

    // protected $table = 'ulwa';
    
    protected $fillable = [
        "palabra",
        "descripcion",
    ];
}
