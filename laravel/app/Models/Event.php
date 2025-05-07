<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Event extends Model
{
    /** @use HasFactory<\Database\Factories\EventFactory> */
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'date',
        'track_id',
        'img'
    ];

    public function track() : BelongsTo {
        return $this->belongsTo(Track::class);
    }

    public function rent() : HasMany {
        return $this->hasMany(Rent::class);
    }
}
