<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\libros;

class Devoluciones extends Model
{
    use HasFactory;
    public  function libros()
    {
        return $this->belongsToMany(libros::class());
    }
}
