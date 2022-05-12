<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;

    protected $fillable = ['detalle'];
    
    public function producto(){
        return $this->belongsToMany(Producto::class, 'detalle_v_p');
    }
}
