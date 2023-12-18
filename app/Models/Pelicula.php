<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pelicula extends Model
{
    use HasFactory;

    protected $fillable = ['titulo'];

    public function proyecciones(): HasMany
    {
        return $this->hasMany(Proyeccion::class);
    }

    public function entradas()
    {
        return $this->through('proyecciones')->has('entradas');
    }

    public function cantidadEntradas(): int
    {
        $total = 0;
        foreach ($this->proyecciones as $proyeccion) {
            $total += $proyeccion->entradas->count();
        }
        return $total;
    }
}
