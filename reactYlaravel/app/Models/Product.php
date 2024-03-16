<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['nombre_libro','nombres_autor','fecha_nacimiento','fecha_fallecimiento','genero_libro','fecha_publicacion','editorial'];
}
