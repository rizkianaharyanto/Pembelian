<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Faktur extends Model
{
    use SoftDeletes;
    public function jurnal()
    {
        return $this->belongsTo('App\Jurnal');
    }

    public function pemesanan()
    {
        return $this->hasOne('App\Pemesanan');
    }

    public function retur()
    {
        return $this->hasOne('App\Retur');
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
