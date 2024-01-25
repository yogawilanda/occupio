<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TableLayout extends Component
{
    public $perPage = 5;
    public function render()
    {
        $productController = app('App\Http\Controllers\ProductController');
        $products = $this->perPage === 'all'
        ? $productController->getProducts(PHP_INT_MAX)->all()
        : $productController->getProducts($this->perPage);
        
        return view('livewire.table-layout', [
            'products' => $products,
        ]);
    }
}
