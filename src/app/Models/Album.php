<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Album extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * Get the artist record associated with the track.
     */
    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }
}
