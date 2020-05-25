<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    public function supplier()
    {
        return $this->belongsTo('App\Supplier');
    }
    
    public function permintaans()
    {
        return $this->belongsToMany('App\Permintaan', 'permintaan_details')->withPivot('jumlah_barang', 'harga')->withTimestamps();
    }

    public function pemesanans()
    {
        return $this->belongsToMany('App\Pemesanan', 'pemesanan_details')->withTimestamps()->withPivot('jumlah_barang', 'harga');
    }

    public function penerimaans()
    {
        return $this->belongsToMany('App\Penerimaan', 'penerimaan_details')->withPivot('jumlah_barang', 'harga')->withTimestamps();
    }

    public function fakturs()
    {
        return $this->belongsToMany('App\Faktur', 'faktur_details');
    }

    public function returs()
    {
        return $this->belongsToMany('App\Retur', 'retur_details');
    }
}
