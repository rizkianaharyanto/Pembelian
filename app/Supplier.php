<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $guarded = ['id'];
    public function pengirims()
    {
        return $this->hasMany('App\Pengirim');
    }

    public function permintaan()
    {
        return $this->hasMany('App\Permintaan');
    }

    public function pemesanans()
    {
        return $this->hasMany('App\Pemesanan');
    }

    public function penerimaans()
    {
        return $this->hasMany('App\Penerimaan');
    }

    public function fakturs()
    {
        return $this->hasMany('App\Faktur');
    }

    public function returs()
    {
        return $this->hasMany('App\Retur');
    }

    public function hutang()
    {
        return $this->hasOne('App\Hutang');
    }

    public function pembayarans()
    {
        return $this->hasMany('App\Pembayaran');
    }

    public function barangs()
    {
        return $this->hasMany('App\Barang');
    }
}
