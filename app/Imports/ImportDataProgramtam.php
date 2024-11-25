<?php

namespace App\Imports;

use App\Models\Programtam;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;

class ImportDataProgramtam implements ToModel, WithStartRow, WithCalculatedFormulas
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

        return new Programtam([
            'IDUser'        => $data_user->id,
            'vin'           => $row['0'],
            'branchname'           => $row['1'],
            'model'           => $row['2'],
            'program'           => $row['3'],
            'promo'           => $row['4'],
        ]);
    }
}
