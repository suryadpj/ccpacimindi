<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voc extends Model
{
    use HasFactory;
    protected $table = 'voc';
    protected $primaryKey = 'id';
    protected $fillable = [
        'IDUser',
        'police_reg_no',
        'minuman',
        'makanan',
        'interest',
        'yearmonth',
    ];
}
