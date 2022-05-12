<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = ['descripcion','nombre','precio','categoria_id','descuento','imagen'];

    public function categorias(){
        return $this->belongsTo(Categoria::class);
    }

    public function ventas(){
        return $this->belongsToMany(Venta::class, 'detalle_v_p');
    }
}
