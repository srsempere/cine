<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Proyeccion extends Model
{
    use HasFactory;

    public function pelicula(): BelongsTo
    {
        return $this->belongsTo(Pelicula::class);
    }

    public function salas(): HasMany
    {
        return $this->hasMany(Sala::class);
    }

    public function entradas(): HasMany
    {
        return $this->hasMany(Entrada::class);
    }
}
