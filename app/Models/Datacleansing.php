<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datacleansing extends Model
{
    use HasFactory;
    protected $table = 'data_cleansing';
    protected $primaryKey = 'id';
    protected $fillable = ['IDUser','cust_id','cust_id_row','equipment_no','police_reg_no','customer_name','contact_person','tahun_produksi','tipe_kendaraan','decision_maker','decision_maker_phone','contact_person_phone','customer_address','email','kategori','pembelian_asal','class'];
}
