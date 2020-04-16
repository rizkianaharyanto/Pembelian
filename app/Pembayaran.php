<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    public function jurnal()
    {
        return $this->belongsTo('App\Jurnal');
    }

    public function supplier()
    {
        return $this->belongsTo('App\Supplier');
    }

    public function hutangs()
    {
        return $this->belongsToMany('App\Hutang', 'pembayaran_hutang_details');
    }
}
