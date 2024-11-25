<?php

namespace App\Imports;

use App\Models\Tintouch;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;

class ImportDataTintouch implements ToModel, WithStartRow, WithCalculatedFormulas
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

        return new Tintouch([
            'IDUser'        => $data_user->id,
            'vin'           => $row['0'],
            'customer_name'           => $row['1'],
            'vehicle_model'           => $row['2'],
            'activation_date'    => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['3']) ?? null,
            'afi_date'    => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['4']) ?? null,
            'dealer'           => $row['5'],
            'outlet'           => $row['6'],
            'area'          => $row['7'],
            'region'          => $row['8'],
            'cluster'          => $row['9'],
        ]);
    }
}
