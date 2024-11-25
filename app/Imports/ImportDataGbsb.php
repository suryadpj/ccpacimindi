<?php

namespace App\Imports;

use App\Models\Gbsb;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;

class ImportDataGbsb implements ToModel, WithStartRow, WithCalculatedFormulas
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

        return new Gbsb([
            'IDUser'        => $data_user->id,
            'vin'           => $row['0'],
            'sales_date'    => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['1']) ?? null,
            'unit'          => $row['2'],
        ]);
    }
}
