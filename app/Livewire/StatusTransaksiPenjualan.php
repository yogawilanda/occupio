<?php

namespace App\Livewire;

use Livewire\Component;

class StatusTransaksiPenjualan extends Component
{   
    public $selectedNutrisari = [];

    public function addNutrisari()
    {
        // Pastikan tidak memilih lebih dari 3 Nutrisari
        if (count($this->selectedNutrisari) < 3) {
            $this->selectedNutrisari[] = 'Nutrisari'; // Ganti ini dengan logika pilihan Nutrisari Anda
        }
    }

    public function submitSelection()
    {
        // Proses pengiriman pilihan Nutrisari, sesuaikan sesuai kebutuhan
        // ...

    }

    public function render()
    {
        return view('livewire.status-transaksi-penjualan');
    }
}
