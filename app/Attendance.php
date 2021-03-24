<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $fillable = [
        'datetime_In',
        'user_id',
        'temperature'
    ];

    public function employee(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
