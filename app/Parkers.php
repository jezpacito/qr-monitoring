<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parkers extends Model
{
    protected $fillable = [
        'plate_number',
        'contact_no',
        'qr_number'
    ];
}
