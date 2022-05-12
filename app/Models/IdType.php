<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IdType extends Model
{
    use HasFactory;

    protected $fillable = ['descripcion','name'];

    public function users(){
        return $this->hasMany(User::class);
    }
}
