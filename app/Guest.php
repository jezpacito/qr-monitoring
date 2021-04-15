<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $fillable = [
        'fname',
        'lname',
        'address',
        'city',
        'prk_brgy',
        'contact_no',
        'gender',
        'postal_code',
        'email',
        'qr_code',
        'qr_number',
        'qr_uri'
    ];
}
