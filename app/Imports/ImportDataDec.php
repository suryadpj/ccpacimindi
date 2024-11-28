<?php

namespace App\Imports;

use App\Models\Dec;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;

class ImportDataDec implements ToModel, WithStartRow, WithCalculatedFormulas
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

        return new Dec([
            'IDUser' => $data_user->id,
            "delivery_date" => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject(excelTimestamp: $row['0']) ?? null,
            'potensial_cust' => $row['1'],
            'address' => $row['2'],
            'city' => $row['3'],
            'owner_district' => $row['4'],
            'mobile_phone' => $row['5'],
            'email' => $row['6'],
            'birth_date' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject(excelTimestamp: $row['7']) ?? null,
            'gender' => $row['8'],
            'job_title' => $row['9'],
            'customer_type' => $row['10'],
            'identification_number' => $row['11'],
            'sales' => $row['12'],
            'parent_employee' => $row['13'],
            'product' => $row['14'],
            'description' => $row['15'],
            'chassis_no' => $row['16'],
            'police_reg_no' => $row['17'],
            'description_color' => $row['18'],
            'method_payment' => $row['19'],
            'financing_company' => $row['20'],
            'tenor' => $row['21'],
            'insurance' => $row['22'],
            'insurance_type' => $row['23'],
            'insurance_product' => $row['24'],
            'all_risk_period' => $row['25'],
            'tlo_period' => $row['26'],
        ]);
    }
}
