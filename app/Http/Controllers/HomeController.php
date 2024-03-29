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
        return view('dashboard',['dicari' => '','hitung_kendaraan' => $hitung_kendaraan,'hitung_pengguna' => $hitung_pengguna,'modal' => $modal]);
    }
    public function caridata(request $request)
    {
        $dicari = $request->search;
        $hitung_kendaraan = DB::table('masterdata')->count();
        $hitung_pengguna = DB::table('masterdata')->distinct('EquipmentNo')->count('EquipmentNo');
        $find = DB::table('masterdata')->where('dummy',$dicari)->orwhere('PoliceRegNo',$dicari)->orwhere('EquipmentNo',$dicari)->orderby('id','desc')->first();
        $find2 = DB::table('masterdata')->where('dummy',$dicari)->orwhere('PoliceRegNo',$dicari)->orwhere('EquipmentNo',$dicari)->orderby('id','desc')->count();
        if($find2 == 0)
        {
            $modal = "showalertempty";
            return view('dashboard',['dicari' => $dicari,'hitung_kendaraan' => $hitung_kendaraan,'hitung_pengguna' => $hitung_pengguna,'modal' => $modal]);
        }
        $idken = $find->CustomerID;
  $hitung = DB::table('masterdata')->where('dummy',$dicari)->orwhere('PoliceRegNo',$dicari)->orwhere('EquipmentNo',$dicari)->orderby('id','desc')->count();
        $hitung = DB::table('masterdata')->where('dummy',$dicari)->orwhere('PoliceRegNo',$dicari)->orwhere('CustomerID',$idken)->orderby('id','desc')->distinct('PoliceRegNo','EquipmentNo','TipeKendaraan','TahunProduksi','NextPotency')->count();
        $findfriend = DB::table('masterdata')->where('dummy',$dicari)->orwhere('PoliceRegNo',$dicari)->orwhere('CustomerID',$idken)->orderby('id','desc')->distinct('PoliceRegNo','EquipmentNo','TipeKendaraan','TahunProduksi','NextPotency')->get();
        $modal = 0;
        if($hitung > 0)
        {
            return view('dashboardsearch',['dicari' => $dicari,'hitung' => $hitung,'hitung_kendaraan' => $hitung_kendaraan,'hitung_pengguna' => $hitung_pengguna,'find' => $find,'friend' => $findfriend,'modalempty' => $modal]);
        }
        else
        {
            $modal = "showalertempty";
            return view('dashboardsearch',['dicari' => $dicari,'hitung_kendaraan' => $hitung_kendaraan,'hitung_pengguna' => $hitung_pengguna,'modalempty' => $modal]);
        }
    }
}
