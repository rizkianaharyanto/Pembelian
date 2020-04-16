<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengirim extends Model
{
    public function supplier()
    {
        return $this->belongsTo('App\Supplier');
    }
}
