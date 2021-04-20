<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParkerLog extends Model
{
    protected $fillable = [
        'parker_id',
        'dateTime_in',
        'dateTime_out'
    ];

    public function parker(){
        return $this->belongsTo(Parkers::class);
    }
}
