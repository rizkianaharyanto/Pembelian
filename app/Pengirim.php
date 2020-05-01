<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengirim extends Model
{
    protected $guarded = ['id'];
    public function supplier()
    {
        return $this->belongsTo('App\Supplier');
    }
}
