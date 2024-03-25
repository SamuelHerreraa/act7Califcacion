<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActividadCalificable extends Model
{
    protected $fillable = ['nombre', 'calificacion', 'fecha', 'tema_id'];
}