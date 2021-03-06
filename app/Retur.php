<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Retur extends Model
{
    use SoftDeletes;
    public function jurnal()
    {
        return $this->belongsTo('App\Jurnal');
    }

    public function faktur()
    {
        return $this->hasOne('App\Faktur');
    }

    public function supplier()
    {
        return $this->belongsTo('App\Supplier');
    }

    public function barangs()
    {
        return $this->belongsToMany('App\Barang', 'retur_details');
    }
}
