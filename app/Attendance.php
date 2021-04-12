<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $fillable = [
        'datetime_In',
        'user_id',
        'temperature',
        'guest_id'
    ];

    public function employee(){
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function guest(){
        return $this->belongsTo(Guest::class,'guest_id','id');
    }
}
