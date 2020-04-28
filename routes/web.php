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

Route::get('/supplier', 'SuppliersController@index');
Route::get('/barang', 'BarangsController@index');
Route::get('/gudang', 'GudangsController@index');
Route::get('/pengirim', 'PengirimsController@index');
Route::get('/akun', 'AkunsController@index');
Route::get('/pajak', 'PajaksController@index');
Route::get('/jurnal', 'JurnalsController@index');
Route::get('/pemesanan', 'PemesanansController@index');
Route::get('/penerimaan', 'PenerimaansController@index');
Route::get('/permintaan', 'PermintaansController@index');
Route::get('/faktur', 'FaktursController@index');
Route::get('/retur', 'RetursController@index');
Route::get('/hutang', 'HutangsController@index');
Route::get('/pembayaran', 'PembayaransController@index');


// Route::get('/supplier', function () {
//     return view('manajemendata.supplier');
// });

// Route::get('/pengirim', function () {
//     return view('manajemendata.pengirim');
// });

// Route::get('/supplier/create', 'DataMastersController@tambahsp');
// Route::post('/supplier', 'DataMastersController@savesp');
// Route::get('/pengirim/create', 'DataMastersController@tambahpengirim');
// Route::post('/pengirim', 'DataMastersController@savepengirim');
