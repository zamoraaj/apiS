<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Miskito extends Model
{
    use HasFactory;


    protected $table = 'miskito';
    
    protected $fillable = [
        "palabra",
        "descripcion",
    ];
}
