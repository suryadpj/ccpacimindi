<?php

namespace App\Http\Controllers;

use App\Imports\ImportDataDec;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Validator;
use App\Models\Dec;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class DecController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            $dt = Dec::
            query();
            return DataTables::of($dt)
                ->make();
        }
        return view('v2.importdec');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => ':attribute wajib diinput',
            'file.required' => 'File belum anda lampirkan',
        ];
        $rules = array(
            'file'       =>  'required',
        );

        $error = Validator::make($request->all(), $rules,$messages);
        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }
        
        Excel::import(new ImportDataDec, $request->file('file')->store('temp'));
        
        return response()->json(['success' => 'Data berhasil ditambahkan.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
