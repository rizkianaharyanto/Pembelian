<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

// Route::get('/supplier', function () {
//     return view('manajemendata.supplier');
// });

// Route::get('/pengirim', function () {
//     return view('manajemendata.pengirim');
// });

Route::get('/barang', function () {
    return view('manajemendata.barang');
});

Route::get('/gudang', function () {
    return view('manajemendata.gudang');
});

Route::get('/akun', function () {
    return view('manajemendata.akun');
});

Route::get('/pajak', function () {
    return view('manajemendata.pajak');
});

Route::get('/jurnal', function () {
    return view('jurnal');
});

Route::get('/pemesanan', function () {
    return view('pembelian.pemesanan');
});

Route::get('/penerimaan', function () {
    return view('pembelian.penerimaan');
});

Route::get('/permintaan', function () {
    return view('pembelian.permintaan');
});

Route::get('/faktur', function () {
    return view('pembelian.faktur');
});

Route::get('/retur', function () {
    return view('pembelian.retur');
});

Route::get('/hutang', function () {
    return view('hutang.hutang');
});

Route::get('/pembayaran', function () {
    return view('hutang.pembayaran');
});

Route::get('/supplier', function () {
    return view('manajemendata.supplier');
});
Route::get('/pengirim', function () {
    return view('manajemendata.pengirim');
});

Route::get('/supplier/create', 'DataMastersController@tambahsp');
Route::post('/supplier', 'DataMastersController@savesp');
Route::get('/pengirim/create', 'DataMastersController@tambahpengirim');
Route::post('/pengirim', 'DataMastersController@savepengirim');
