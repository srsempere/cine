<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Entrada extends Model
{
    use HasFactory;

    protected $fillable = ['proyeccion_id'];

    public function proyeccion():BelongsTo
    {
        return $this->belongsTo(Proyeccion::class);
    }
}
