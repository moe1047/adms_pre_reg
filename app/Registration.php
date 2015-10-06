<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $fillable=[
        'first_name',
        'mid_name',
        'last_name',
        'department_id',
        'gender',
        'DOB',
        'mobile',
        'email',
        'image',
        'user_id',
        'session',
        'admission_no',
];
    public function department(){
        return $this->belongsTo('App\Department');
    }
}
