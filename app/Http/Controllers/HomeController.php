<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $hitung_kendaraan = DB::table('masterdata')->count();
        $hitung_pengguna = DB::table('masterdata')->distinct('EquipmentNo')->count('EquipmentNo');
        $modal = "";
        return view('v2.home', ['dicari' => '', 'hitung_kendaraan' => $hitung_kendaraan, 'hitung_pengguna' => $hitung_pengguna, 'modal' => $modal]);
    }
    public function caridata(request $request)
    {
        $dicari = $request->search;
        $find = DB::table('data_cleansing')->where('equipment_no', $dicari)->orwhere('police_reg_no', $dicari)->orderby('id', 'desc')->first();
        if (!$find) {
            $modal = "showalertempty";
            return view('v2.home', ['dicari' => $dicari, 'modal' => $modal]);
        } else {
            $modal = 0;
            $findall = DB::table('data_cleansing')->where('police_reg_no', $find->police_reg_no)->distinct()->get();
            $findallcount = DB::table('data_cleansing')->where('police_reg_no', $find->police_reg_no)->distinct()->count();
            $gbsb = DB::table('gbsb')->where('vin',$find->equipment_no)->first();
            $pkbfunneling = DB::table('pkbfunneling')->where('vin',$find->equipment_no)->first();
            $pkbfunnelingrec = DB::table('pkbfunneling')->where('vin',$find->equipment_no)->orderBy('vincount','asc')->get();
            $dec = DB::table('data_dec')->where('chassis_no',$find->equipment_no)->first();
            $tintouch = DB::table('tintouch')->where('vin',$find->equipment_no)->first();
            $voc = DB::table('voc')->where('police_reg_no',$find->police_reg_no)->first();
            return view('v2.dashboardsearch', ['dicari' => $dicari, 'find' => $find, 'jumlah' => $findallcount, 'findall' => $findall, 'gbsb' =>$gbsb, 'pkbfunneling' =>$pkbfunneling, 'pkbfunnelingrec' =>$pkbfunnelingrec, 'dec' => $dec, 'tintouch' => $tintouch, 'voc' => $voc,'modalempty' => $modal]);
        }
    }
}
