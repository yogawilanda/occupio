<?php

namespace App\Livewire;

use App\Models\Products;
use Livewire\Component;
use Livewire\WithPagination;

class TransactionListViewComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $products = Products::paginate(5);
        return view('livewire.transaction-list-view-component')->with(
            [
                'products' => $products
            ]
        );
    }
}
