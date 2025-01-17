<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Concert extends Model
{
    /** @use HasFactory<\Database\Factories\ConcertFactory> */
    use HasFactory;

    public function bands()
    {
        return $this->belongsToMany(Band::class, 'concert_band', 'concert_id', 'band_id')
                    ->as('ConcertBand') // en vez de pivot se llamará ConcertBand
                    ->withTimestamps(); // created at updated at (timestamps columnas) aparecerán
                    // default: solo las FK Y PK aparecen en la tabla intermedia (pivot por default)
    }
}
