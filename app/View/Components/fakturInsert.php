<?php

namespace App\View\Components;

use App\Barang;
use App\Faktur;
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
        $fakturs=Faktur::get();
        $barangs=Barang::get();
        return view('components.faktur-insert', [
            'fakturs' => $fakturs,
            'barangs' => $barangs
        ]);
    }
    
    // public function fakturs()
    // {
    //     return Faktur::get();
    // }
}
