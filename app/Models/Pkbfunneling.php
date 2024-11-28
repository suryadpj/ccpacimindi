<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pkbfunneling extends Model
{
    use HasFactory;
    protected $table = 'pkbfunneling';
    protected $primaryKey = 'id';
    protected $fillable = [
        'IDUser',
        'vincount',
        'vintahunbulan',
        'vinjob',
        'vin',
        'yearmonth',
        'lookup_job',
        'police_reg_no',
        'pkb_no',
        'pkb_date',
        'delivery_date',
        'delivery_time',
        'customer_name',
        'no_tlp',
        'operation_desc',
        'vendor',
        'pkb_status',
        'type',
        'chto',
        'sa',
        'mekanik',
        'tahun_produksi',
        'tipe_kendaraan',
        'usia',
        'status',
        'range_jam',
        'periode_jual',
        'jenis_jasa_pekerjaan',
        'pic_foreman',
        'release_date',
        'release_time',
        'job_type_desc',
        'service_kategori',
        'decision_maker',
        'decision_maker_phone',
        'contact_person',
        'contact_person_phone',
        'customer_address',
        'email',
        'km',
        'fleet_retail',
        'bulan_service',
        'tahun_service',
        'pembelian_asal'
    ];
}
