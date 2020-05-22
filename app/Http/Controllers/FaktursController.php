<?php

namespace App\Http\Controllers;

use App\Faktur;
use App\Penerimaan;
use App\Barang;
use App\Gudang;
use App\Supplier;
use App\Akun;
use Illuminate\Http\Request;

class FaktursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fakturs = Faktur::all();
        return view('pembelian.faktur.faktur', compact('fakturs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pembelian.faktur.fakturinsert', [
            'penerimaans' => Penerimaan::all(),
            'suppliers' => Supplier::all(),
            'barangs' => Barang::all(),
            'gudangs'=> Gudang::all(),
            'akuns'=> Akun::all()
        ]);
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
     * @param  \App\Faktur  $faktur
     * @return \Illuminate\Http\Response
     */
    public function show(Faktur $faktur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Faktur  $faktur
     * @return \Illuminate\Http\Response
     */
    public function edit(Faktur $faktur)
    {
        return view('pembelian.faktur.fakturedit', [
            'faktur' => $faktur,
            'penerimaans' => Penerimaan::all(),
            'suppliers' => Supplier::all(),
            'barangs' => Barang::all(),
            'gudangs'=> Gudang::all(),
            'akuns'=> Akun::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Faktur  $faktur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faktur $faktur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Faktur  $faktur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faktur $faktur)
    {
        Faktur::destroy($faktur->id);
        return redirect('/fakturs');
    }
}
