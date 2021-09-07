<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mestizo extends Model
{
    use HasFactory;


    // protected $table = 'mestizo';
    protected $fillable = [
        "palabra",
        "descripcion",
    ];
}
