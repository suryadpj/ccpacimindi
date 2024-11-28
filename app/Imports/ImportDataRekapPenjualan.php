<?php

namespace App\Imports;

use App\Models\Rekappenjualan;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;

class ImportDataRekapPenjualan implements ToModel, WithStartRow, WithCalculatedFormulas
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

        return new Rekappenjualan([
            'IDUser' => $data_user->id,
            "pkb_no" => $row['0'],
            "pkb_date" => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject(excelTimestamp: $row['1']) ?? null,
            "vin" => $row['2'],
            "sa" => $row['3'],
            "material" => $row['4'],
            "material_discount" => $row['5'],
            "oil" => $row['6'],
            "oil_discount" => $row['7'],
            "part" => $row['8'],
            "part_discount" => $row['9'],
            "services" => $row['10'],
            "services_discount" => $row['11'],
            "opl" => $row['12'],
            "opl_discount" => $row['13'],
            "opb" => $row['14'],
            "opb_discount" => $row['15'],
            "total_revenue" => $row['16'],
            "total_discount" => $row['17'],
            "total_net" => $row['18']
        ]);
    }
}
