<?php

namespace App\Livewire;

use App\Models\Products;
use Livewire\Component;

class GridViewExample extends Component
{   
    
    public function render()
    {
        $products = Products::all();
        return view('livewire.grid-view-example');
    }
}
