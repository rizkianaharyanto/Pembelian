<?php

namespace App\Http\Controllers;

use App\Pengirim;
use Illuminate\Http\Request;

class PengirimsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengirims = Pengirim::all();
        return view('manajemendata.pengirim', compact('pengirims'));
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
        Pengirim::create($request->all());
        return redirect('/pengirims');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pengirim  $pengirim
     * @return \Illuminate\Http\Response
     */
    public function show(Pengirim $pengirim)
    {
        $pengirim = Pengirim::find($pengirim);
        return $pengirim;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pengirim  $pengirim
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengirim $pengirim)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pengirim  $pengirim
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengirim $pengirim)
    {
        Pengirim::where('id', $pengirim->id)
            ->update([
                'nama_pengirim' => $request->nama_pengirim,
                'telp_pengirim' => $request->telp_pengirim,
                'email_pengirim' => $request->email_pengirim,
            ]);

        return redirect('/pengirims');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pengirim  $pengirim
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengirim $pengirim)
    {
        //
    }
}
