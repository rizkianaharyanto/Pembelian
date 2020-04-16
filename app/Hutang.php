<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hutang extends Model
{
    public function supplier()
    {
        return $this->belongsTo('App\Supplier');
    }

    public function pembayarans()
    {
        return $this->belongsToMany('App\Pembayaran', 'pembayaran_hutang_details');
    }
}
