<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration_detail extends Model
{
    protected $fillable=[
        'registration_id',
        'city',
        'region_id',
        'school_id',
        'academic_year',
        'roll_no',
        'payment_type',
        'certificate_no',
        'grade',
        'on_basis_of',
        'registration_amount',
        'remark',
        'receipt_no',
        'transaction_no',
    ];
}
