<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penerimaan extends Model
{
    public function jurnal()
    {
        return $this->belongsTo('App\Jurnal');
    }

    public function pemesanan()
    {
        return $this->belongsTo('App\Pemesanan');
    }

    public function faktur()
    {
        return $this->belongsTo('App\Faktur');
    }

    public function supplier()
    {
        return $this->belongsTo('App\Supplier');
    }

    public function barangs()
    {
        return $this->belongsToMany('App\Barang', 'pemesanan_details');
    }
}
