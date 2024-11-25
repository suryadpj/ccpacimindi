<?php

namespace App\Imports;

use App\Models\Datacleansing;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;

class ImportDataCleansing implements ToModel, WithStartRow, WithCalculatedFormulas
{
    public function startRow(): int
    {
        return 2;
    }
    public function model(array $row)
    {
        if(!array_filter($row)) {
           return null;
        } 
        $data_user = Auth::user();

        return new Datacleansing([
            'IDUser'                    => $data_user->id,
            'cust_id'                   => $row['0'],
            'cust_id_row'               => $row['1'],
            'equipment_no'              => $row['2'],
            'police_reg_no'             => $row['3'],
            'customer_name'             => $row['4'],
            'contact_person'            => $row['5'],
            'tahun_produksi'            => $row['6'],
            'tipe_kendaraan'            => $row['7'],
            'decision_maker'            => $row['8'],
            'decision_maker_phone'      => $row['9'],
            'contact_person_phone'      => $row['10'],
            'customer_address'                      => $row['11'],
            'email'                     => $row['12'],
            'kategori'                   => $row['13'],
            'pembelian_asal'                  => $row['14'],
            'class'                   => $row['15'],
        ]);
    }
}
