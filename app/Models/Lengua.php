<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lengua extends Model
{
    use HasFactory;

    // protected $table = 'lengua';
    
    protected $fillable = [
         
            "garifuna_id",
            "mayagna_id",
            "miskito_id",
            "rama_id",
            "ulwa_id",
            "mestizo_id"
    ];
}


