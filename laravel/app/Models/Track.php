<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Track extends Model
{
    /** @use HasFactory<\Database\Factories\TrackFactory> */
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'location',
        'price'
    ];

    public function event() : HasMany {
        return $this->hasMany(Event::class);
    }
}
