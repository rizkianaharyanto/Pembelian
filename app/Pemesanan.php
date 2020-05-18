<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pemesanan extends Model
{
    use SoftDeletes;
    public function permintaans()
    {
        return $this->hasMany('App\Permintaan');
    }

    public function penerimaans()
    {
        return $this->hasMany('App\Penerimaan');
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
