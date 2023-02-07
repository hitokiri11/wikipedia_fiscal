<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sugerencias extends Model
{
    use HasFactory; 

    protected $fillable = [
        'sugerencia',
        'user_cliente_id'
    ];

}
