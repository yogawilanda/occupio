<?php

namespace App\Livewire;

use App\Models\Products;
use Livewire\Component;
use Livewire\WithPagination;

class TableLayout extends Component
{
    use WithPagination;
    public function render()
    {
        $products = Products::paginate(5);
        return view('livewire.table-layout')->with([
            'products' => $products,
        ]);
    }
}
