<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
}
