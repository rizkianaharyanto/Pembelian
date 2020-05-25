<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Penerimaan extends Model
{
    use SoftDeletes;
    protected $guarded = ['id'];
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
        return $this->belongsToMany('App\Barang', 'penerimaan_details')->withPivot('jumlah_barang', 'harga')->withTimestamps();
    }
}
