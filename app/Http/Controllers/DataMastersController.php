<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Akun;
use App\Barang;
use App\Gudang;
use App\Pajak;
use App\Supplier;
use App\Pengirim;

class DataMastersController extends Controller
{
    public function tambahsp()
    {
        return view('coba.i_supplier');
    }
    public function savesp(Request $request)
    {
        $supplier = new Supplier;
        $supplier->nama_supplier = $request->nama;
        $supplier->telp_supplier = $request->telp;
        $supplier->email_supplier = $request->email;
        $supplier->alamat_supplier = $request->alamat;

        $supplier->save();
        return redirect('/supplier');
    }
    
    public function tambahpengirim()
    {
        return view('coba.i_pengirim');
    }
    public function savepengirim(Request $request)
    {
        $pengirim = new Pengirim;
        $pengirim->nama_pengirim = $request->nama;
        $pengirim->telp_pengirim = $request->telp;
        $pengirim->email_pengirim = $request->email;

        $pengirim->save();
        return redirect('/pengirim');
    }
    
    public function tambahbarang()
    {
        return view('coba.i_supplier');
    }
    public function tambahgudang()
    {
        return view('coba.i_supplier');
    }
    public function tambahpajak()
    {
        return view('coba.i_supplier');
    }
    public function tambahakun()
    {
        return view('coba.i_supplier');
    }
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
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
