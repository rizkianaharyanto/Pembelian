<?php

namespace App\Http\Controllers;

use App\Pemesanan;
use App\Barang;
use App\Gudang;
use App\Supplier;
use App\Permintaan;
use Illuminate\Http\Request;

class PemesanansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pemesanans = Pemesanan::all();
        return view('pembelian.pemesanan.pemesanan', compact('pemesanans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $permintaans = Permintaan::all();
        // dd($permintaans);
        return view('pembelian.pemesanan.pemesananinsert', [
            'suppliers' => Supplier::all(),
            'permintaans' => Permintaan::all(),
            'barangs' => Barang::all(),
            'gudangs'=> Gudang::all()
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
     * @param  \App\Pemesanan  $pemesanan
     * @return \Illuminate\Http\Response
     */
    public function show(Pemesanan $pemesanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pemesanan  $pemesanan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pemesanan $pemesanan)
    {
        return view('pembelian.pemesanan.pemesananedit', [
            'pemesanan' => $pemesanan,
            'suppliers' => Supplier::all(),
            'permintaans' => Permintaan::all(),
            'barangs' => Barang::all(),
            'gudangs'=> Gudang::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pemesanan  $pemesanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pemesanan $pemesanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pemesanan  $pemesanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pemesanan $pemesanan)
    {
        Pemesanan::destroy($pemesanan->id);
        return redirect('/pemesanans');
    }
}
