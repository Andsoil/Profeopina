<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resenia extends Model
{
    use HasFactory;

    protected $fillable = [
        'contenido',
        'calificacion' // Añadir esta línea
    ];

    public function reseniauser(){
        return $this->hasMany(UserResenia::class, 'resenia_id');
    }
}
