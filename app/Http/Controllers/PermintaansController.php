<?php

namespace App\Http\Controllers;

use App\Permintaan;
use App\Barang;
use App\Gudang;
use App\Supplier;
use Illuminate\Http\Request;

class PermintaansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permintaans = Permintaan::all();
        return view('pembelian.permintaan.permintaan', compact('permintaans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pembelian.permintaan.permintaaninsert', [
            'suppliers' => Supplier::all(),
            'barangs' => Barang::all(),
            'gudangs' => Gudang::all()
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
        // dd($request);
        $permintaan = Permintaan::create([
            'kode_permintaan' => $request->kode_permintaan,
            'supplier_id' => $request->supplier_id,
            'alamat_supplier' => 'alamat',
            'gudang' => $request->gudang,
            'tanggal' => $request->tanggal,
            'diskon' => $request->diskon,
            'biaya_lain' => $request->biaya_lain,
            'total_jenis_barang' => 3,
            'total_harga' => 1000,
        ]);

        foreach ($request->barang_id as $index => $id){

            $permintaan->barangs()->attach($id, [
            'jumlah_barang' => $request->jumlah_barang[$index], 
            'harga' => $request->harga[$index]
            ]);
        }
        return redirect('/permintaans');

        
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Permintaan  $permintaan
     * @return \Illuminate\Http\Response
     */
    public function show(Permintaan $permintaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Permintaan  $permintaan
     * @return \Illuminate\Http\Response
     */
    public function edit(Permintaan $permintaan)
    {
        return view('pembelian.permintaan.permintaanedit', [
            'permintaan' => $permintaan,
            'suppliers' => Supplier::all(),
            'barangs' => Barang::all(),
            'gudangs' => Gudang::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Permintaan  $permintaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permintaan $permintaan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Permintaan  $permintaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permintaan $permintaan)
    {
        Permintaan::destroy($permintaan->id);
        return redirect('/permintaans');
    }
}
