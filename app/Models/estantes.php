<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class estantes extends Model
{
    use HasFactory;
    protected $fillable=[
        'id_usuarios',
        'id_libros'
    ];
}
