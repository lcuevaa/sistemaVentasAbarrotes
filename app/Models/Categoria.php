<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    //Relación de muchos a muchos con productos
    public function productos()
    {
        return $this->belongsToMany(Producto::class)->withTimestamps();
    }

    //Relacion a la inversa de uno a uno con característica 
    public function caracteristica()
    {
        return $this->belongsTo(Caracteristica::class);
    }
}
