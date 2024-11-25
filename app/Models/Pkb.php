<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pkb extends Model
{
    use HasFactory;
    protected $table = 'pkbview';
    protected $primaryKey = 'id';
    protected $fillable = [
        'IDUser',
        'trx_date',
        'vin',
        'km',
        'tipe_produk',
        'produk',
        'produk_desc',
        'comment_desc',
        'qty_man',
        'unit_price',
        'total_amount',
        'discount_percentage',
        'discount_amount',
        'transaction_amount',
    ];
}
