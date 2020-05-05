<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pengirim extends Model
{
    protected $guarded = ['id'];
    use SoftDeletes;
    public function supplier()
    {
        return $this->belongsTo('App\Supplier');
    }
}
