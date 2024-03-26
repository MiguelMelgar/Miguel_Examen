<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;
    public function autores (){
        return $this->belongsTo(Autor::class,'id_autor');
    }

    public function categorias (){
        return $this->belongsTo(Categoria::class, 'id_categoria');
    }
    public function reseñas (){
        return $this->hasMany(Reseña::class, 'id');
    }
}
