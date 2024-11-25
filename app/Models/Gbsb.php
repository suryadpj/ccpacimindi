<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gbsb extends Model
{
    use HasFactory;
    protected $table = 'gbsb';
    protected $primaryKey = 'id';
    protected $fillable = ['IDUser','vin','sales_date','unit'];
}
