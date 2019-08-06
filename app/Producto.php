<?php

namespace oof;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable=["nombre","precio","descripcion","color","talla","tipo","material","empresa","tienda","ruta","file"];
}
