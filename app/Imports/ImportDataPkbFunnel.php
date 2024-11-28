<?php

namespace App\Imports;

use App\Models\Pkbfunneling;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;

class ImportDataPkbFunnel implements ToModel, WithStartRow, WithCalculatedFormulas
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

        return new Pkbfunneling([
            'IDUser'        => $data_user->id,
            'vincount' => $row['0'],
            'vintahunbulan' => $row['1'],
            'vinjob' => $row['2'],
            'vin' => $row['3'],
            'yearmonth' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['4']) ?? null,
            'lookup_job' => $row['5'],
            'police_reg_no' => $row['6'],
            'pkb_no' => $row['7'],
            'pkb_date' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['8']) ?? null,
            'delivery_date' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['9']) ?? null,
            'delivery_time' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject(excelTimestamp: $row['10']) ?? null,
            'customer_name' => $row['11'],
            'no_tlp' => $row['12'],
            'operation_desc' => $row['13'],
            'vendor' => $row['14'],
            'pkb_status' => $row['15'],
            'type' => $row['16'],
            'chto' => $row['17'],
            'sa' => $row['18'],
            'mekanik' => $row['19'],
            'tahun_produksi' => $row['20'],
            'tipe_kendaraan' => $row['21'],
            'usia' => $row['22'],
            'status' => $row['23'],
            'range_jam' => $row['24'],
            'periode_jual' => $row['25'],
            'jenis_jasa_pekerjaan' => $row['26'],
            'pic_foreman' => $row['27'],
            'release_date' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject(excelTimestamp: $row['28']) ?? null,
            'release_time' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject(excelTimestamp: $row['29']) ?? null,
            'job_type_desc' => $row['30'],
            'service_kategori' => $row['31'],
            'decision_maker' => $row['32'],
            'decision_maker_phone' => $row['33'],
            'contact_person' => $row['34'],
            'contact_person_phone' => $row['35'],
            'customer_address' => $row['36'],
            'email' => $row['37'],
            'km' => $row['38'],
            'fleet_retail' => $row['39'],
            'bulan_service' => $row['40'],
            'tahun_service' => $row['41'],
            'pembelian_asal' => $row['42'],
        ]);
    }
}
