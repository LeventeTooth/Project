<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Rent extends Model
{
    /** @use HasFactory<\Database\Factories\RentFactory> */
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'car_id',
        'rent_time',
        'event_id'
    ];

    public function event() : BelongsTo {
        return $this->belongsTo(Event::class);
    }

    public function car() : BelongsTo {
        return $this->belongsTo(Car::class);
    }
}
