<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programtam extends Model
{
    use HasFactory;
    protected $table = 'programtam';
    protected $primaryKey = 'id';
    protected $fillable = [
        'IDUser',
        'vin',
        'branchname',
        'model',
        'program',
        'promo',
    ];
}
