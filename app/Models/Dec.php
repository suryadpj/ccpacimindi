<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dec extends Model
{
    use HasFactory;
    protected $table = 'data_dec';
    protected $primaryKey = 'id';
    protected $fillable = [
        'IDUser',
        'delivery_date',
        'potensial_cust',
        'address',
        'city',
        'owner_district',
        'mobile_phone',
        'email',
        'birth_date',
        'gender',
        'job_title',
        'customer_type',
        'identification_number',
        'sales',
        'parent_employee',
        'product',
        'description',
        'chassis_no',
        'police_reg_no',
        'description_color',
        'method_payment',
        'financing_company',
        'tenor',
        'insurance',
        'insurance_type',
        'insurance_product',
        'all_risk_period',
        'tlo_period'
    ];
}
