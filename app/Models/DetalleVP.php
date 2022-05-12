<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleVP extends Model
{
    use HasFactory;

    protected $fillable = ['producto_id','venta_id','precio','cantidad'];
}
