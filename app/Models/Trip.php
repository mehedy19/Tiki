<?php

// Trip.php (in App\Models namespace)

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    protected $fillable = ['location_id', 'date'];

    public function location()
    {
        return $this->belongsTo(Location::class);
    }
}
