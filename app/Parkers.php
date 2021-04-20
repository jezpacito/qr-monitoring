<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parkers extends Model
{
    protected $fillable = [
        'school_id',
        // 'plate_number',
        // 'vehicle_type',
        'qr_number'
    ];
}
