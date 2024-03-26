<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reseña extends Model
{
    use HasFactory;

    public function libros (){
        return $this->belongsTo(Libro::class, 'id_libro');
    }
}
