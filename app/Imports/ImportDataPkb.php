<?php

namespace App\Imports;

use App\Models\Pkb;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;

class ImportDataPkb implements ToModel, WithStartRow, WithCalculatedFormulas
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

        return new Pkb([
            'IDUser'        => $data_user->id,
            'trx_date'           => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['0']) ?? null,
            'vin'           => $row['1'],
            'km'           => $row['2'],
            'tipe_produk'           => $row['3'],
            'produk'           => $row['4'],
            'produk_desc'           => $row['5'],
            'comment_desc'           => $row['6'],
            'qty_man'           => $row['7'],
            'unit_price'           => $row['8'],
            'total_amount'           => $row['9'],
            'discount_percentage'           => $row['10'],
            'discount_amount'           => $row['11'],
            'transaction_amount'           => $row['12'],
        ]);
    }
}
