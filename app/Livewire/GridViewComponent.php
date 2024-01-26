<?php

namespace App\Livewire;

use App\Models\Products;
use Livewire\Component;

class GridViewComponent extends Component
{
    public function render()
    {
        $products = Products::paginate(5);
        return view('livewire.grid-view-component')->with(
            [
                'products' => $products
            ]
        );
    }
}
