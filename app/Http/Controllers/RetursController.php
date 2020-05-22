<?php

namespace App\Http\Controllers;

use App\Retur;
use App\Barang;
use App\Gudang;
use App\Supplier;
use App\Akun;
use Illuminate\Http\Request;

class RetursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $returs = Retur::all();
        return view('pembelian.retur.retur', compact('returs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pembelian.retur.returinsert', [
            'suppliers' => Supplier::all(),
            'barangs' => Barang::all(),
            'gudangs'=> Gudang::all(),
            'akuns'=> Akun::all(),
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
     * @param  \App\Retur  $retur
     * @return \Illuminate\Http\Response
     */
    public function show(Retur $retur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Retur  $retur
     * @return \Illuminate\Http\Response
     */
    public function edit(Retur $retur)
    {
        return view('pembelian.retur.returedit', [
            'retur' => $retur,
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
     * @param  \App\Retur  $retur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Retur $retur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Retur  $retur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Retur $retur)
    {
        Retur::destroy($retur->id);
        return redirect('/returs');
    }
}
