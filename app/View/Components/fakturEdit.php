<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Barang;
use App\Faktur;


class fakturEdit extends Component
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
        return view('components.faktur-edit', [
            'fakturs' => $fakturs,
            'barangs' => $barangs
        ]);
    }
}
