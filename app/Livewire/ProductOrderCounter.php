<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;

class ProductOrderCounter extends Component
{   
    public $count = 0;

    public string $namaProduk = "";
    public string $stokProduk = "";
    
    public string|int $incrementValue = 0;
    public string|int $harga = 20000;
    
    
    public function masukkanDataProdukMelaluiButton()
    {
        $this->namaProduk = "HEHEHEEHEHqweqwe"; // Assign from request data
        $this->stokProduk = "HEHEHEEHEH"; // Assign from request data
    }

    public function increment()
    {
        $this->count++;
        // Use $incrementValue as needed

        $this->incrementValue = $this->count; // Update the public property
    }

    public function decrement()
    {

        // Jika sudah 0, maka tidak bisa dikurangi lagi
        if ($this->count == 0) {
            return;
        }

        // Use  as needed
        $this->count--;

        $this->incrementValue = $this->count;
    }
    
    

    
    public function render()
    {
        return view('livewire.product-order-counter');
    }
}
