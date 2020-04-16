<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faktur extends Model
{
    public function jurnal()
    {
        return $this->belongsTo('App\Jurnal');
    }

    public function penerimaans()
    {
        return $this->hasMany('App\Penerimaan');
    }

    public function pemesanans()
    {
        return $this->hasMany('App\Pemesanan');
    }

    public function returs()
    {
        return $this->hasMany('App\Retur');
    }

    public function supplier()
    {
        return $this->belongsTo('App\Supplier');
    }

    public function barangs()
    {
        return $this->belongsToMany('App\Barang', 'faktur_details');
    }
}
