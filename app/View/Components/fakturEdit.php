<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Barang;
use App\Faktur;
use App\Gudang;

class fakturEdit extends Component
{
    public $id;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.faktur-edit');
    }

    // public function getone($id)
    // {
    //     $getone = Faktur::find($id);
    //     return redirect('/fakturs', $getone);
    // }

    public function faktur()
    {
        return Faktur::find($this->id);
    }

    public function gudangs()
    {
        return Gudang::get();
    }

    public function barangs()
    {
        return Barang::get();
    }
}
