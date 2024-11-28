<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekappenjualan extends Model
{
    use HasFactory;
    protected $table = 'rekap_penjualan';
    protected $primaryKey = 'id';
    protected $fillable = [
        'pkb_no',
        'pkb_date',
        'vin',
        'sa',
        'material',
        'material_discount',
        'oil',
        'oil_discount',
        'part',
        'part_discount',
        'services',
        'services_discount',
        'opl',
        'opl_discount',
        'opb',
        'opb_discount',
        'total_revenue',
        'total_discount',
        'total_net'
    ];
}
