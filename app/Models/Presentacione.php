<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presentacione extends Model
{
    use HasFactory;
    //Relacion de uno a muchos con producto
    public function productos()
    {
        return $this->hasMany(Producto::class);
    }

    //Relacion a la inversa de uno a uno con característica
    public function caracteristica()
    {
        return $this->belongsTo(Caracteristica::class);
    }
}
