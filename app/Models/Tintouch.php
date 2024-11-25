<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tintouch extends Model
{
    use HasFactory;
    protected $table = 'tintouch';
    protected $primaryKey = 'id';
    protected $fillable = [
        'IDUser',
        'vin',
        'customer_name',
        'vehicle_model',
        'activation_date',
        'afi_date',
        'dealer',
        'outlet',
        'area',
        'region',
        'cluster',
    ];
}
