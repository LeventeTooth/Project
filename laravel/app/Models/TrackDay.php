<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrackDay extends Model
{
    /** @use HasFactory<\Database\Factories\TrackDayFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'date',
        'track_id',
    ];
}
