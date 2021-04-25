<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParkerLog extends Model
{
    protected $fillable = [
        'user_id',
        'qr_number',
        'exit_dateTime',
    ];

    //user is the current outpostman logged in 
    public function user(){
        return $this->belongsTo(User::class);
    }
}
