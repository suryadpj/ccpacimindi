<?php

namespace App\Imports;

use App\Models\Voc;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;

class ImportDataVoc implements ToModel, WithStartRow, WithCalculatedFormulas
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

        return new Voc([
            'IDUser'        => $data_user->id,
            'police_reg_no'           => $row['0'],
            'minuman'           => $row['1'],
            'makanan'           => $row['2'],
            'interest'           => $row['3'],
            'yearmonth'    => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['4']) ?? null,
        ]);
    }
}
