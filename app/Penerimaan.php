<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Penerimaan extends Model
{
    use SoftDeletes;
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
