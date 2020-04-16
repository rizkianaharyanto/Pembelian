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
        return $this->belongsToMany('App\Permintaan', 'permintaan_details');
    }

    public function pemesanans()
    {
        return $this->belongsToMany('App\Pemesanan', 'pemesanan_details');
    }

    public function penerimaans()
    {
        return $this->belongsToMany('App\Penerimaan', 'penerimaan_details');
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
