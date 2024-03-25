<?php

// app/Models/Tema.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\ActividadCalificable;


class Tema extends Model
{
    protected $fillable = ['nombre', 'descripcion'];

    // Definir la relación uno a muchos con la actividad calificable
    public function actividades(): HasMany
    {
        return $this->hasMany(ActividadCalificable::class);
    }
}
