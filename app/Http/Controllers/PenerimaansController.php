<?php

namespace App\Http\Controllers;

use App\Penerimaan;
use App\Barang;
use App\Gudang;
use App\Pemesanan;
use App\Supplier;
use Illuminate\Http\Request;

class PenerimaansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penerimaans = Penerimaan::all();
        return view('pembelian.penerimaan.penerimaan', compact('penerimaans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pembelian.penerimaan.penerimaaninsert', [
            'pemesanans' => Pemesanan::all(),
            'suppliers' => Supplier::all(),
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
        $penerimaan = Penerimaan::create([
            'kode_penerimaan' => $request->kode_penerimaan,
            'supplier_id' => $request->supplier_id,
            'gudang' => $request->gudang,
            'tanggal' => $request->tanggal,
            'diskon' => $request->diskon,
            'biaya_lain' => $request->biaya_lain,
            'total_jenis_barang' => 3,
            'total_harga' => 1000,
        ]);

        foreach ($request->barang_id as $index => $id) {

            $penerimaan->barangs()->attach($id, [
                'jumlah_barang' => $request->jumlah_barang[$index],
                'harga' => $request->harga[$index]
            ]);
        }
        return redirect('/penerimaans');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Penerimaan  $penerimaan
     * @return \Illuminate\Http\Response
     */
    public function show(Penerimaan $penerimaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Penerimaan  $penerimaan
     * @return \Illuminate\Http\Response
     */
    public function edit(Penerimaan $penerimaan)
    {
        return view('pembelian.penerimaan.penerimaanedit', [
            'penerimaan' => $penerimaan,
            'suppliers' => Supplier::all(),
            'barangs' => Barang::all(),
            'gudangs'=> Gudang::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Penerimaan  $penerimaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penerimaan $penerimaan)
    {
        Penerimaan::where('id', $penerimaan->id)
            ->update([
                'kode_penerimaan' => $request->kode_penerimaan,
                'supplier_id' => $request->supplier_id,
                'gudang' => $request->gudang,
                'tanggal' => $request->tanggal,
                'diskon' => $request->diskon,
                'biaya_lain' => $request->biaya_lain,
                'total_jenis_barang' => 3,
                'total_harga' => 1000,
            ]);
        foreach ($request->barang_id as $index => $id) {
            $penerimaan->barangs()->detach($id, [
                'jumlah_barang' => $request->jumlah_barang[$index],
                'harga' => $request->harga[$index]
            ]);
            $penerimaan->barangs()->attach($id, [
                'jumlah_barang' => $request->jumlah_barang[$index],
                'harga' => $request->harga[$index]
            ]);
        }
        return redirect('/penerimaans');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Penerimaan  $penerimaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penerimaan $penerimaan)
    {
        Penerimaan::destroy($penerimaan->id);
        return redirect('/penerimaans');
    }
}
