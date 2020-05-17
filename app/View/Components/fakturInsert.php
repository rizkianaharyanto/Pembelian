<?php

namespace App\View\Components;

use App\Barang;
use App\Gudang;
use App\Supplier;
use Illuminate\View\Component;

class fakturInsert extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.faktur-insert',);
    }
    
    public function gudangs()
    {
        return Gudang::get();
    }

    public function suppliers()
    {
        return Supplier::get();
    }

    public function barangs()
    {
        return Barang::get();
    }
}
