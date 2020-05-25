<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Permintaan extends Model
{
    use SoftDeletes;
    protected $guarded = ['id'];
    public function pemesanan()
    {
        return $this->belongsTo('App\Pemesanan');
    }

    public function supplier()
    {
        return $this->belongsTo('App\Supplier');
    }

    public function barangs()
    {
        return $this->belongsToMany('App\Barang', 'permintaan_details')->withPivot('jumlah_barang', 'harga')->withTimestamps();
    }
}
