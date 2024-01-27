<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;

class ProductOrderCounter extends Component
{   
    public $count = 0;

    // public int $count = 0;
    public string $namaProduk = "";
    public string $stokProduk = "";
    
    // public string $stokProduk; // Ini ga bisa, karena livewire perlu tau tipe data dari variabelnya dan tidak boleh NULL!


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
    
    public string|int $incrementValue = 0;

    public string|int $harga = 20000;

    
    public function render()
    {
        return view('livewire.product-order-counter');
    }
}
