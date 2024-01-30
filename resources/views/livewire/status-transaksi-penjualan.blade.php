{{-- Layer Container --}}
<div class="border-black p-2">
    <button wire:click="addItem">Tambah Item</button>
    <button wire:click="submitSelection">Kirim Pilihan</button>

    {{-- Row layer - Tab Transaksi Penjualan --}}
    <div class="flex space-x-4 justify-between">
        <div class="border-black p-1">
            <button wire:click="semua-penjualan"
                class="w-full px-6 py-3 bg-orange-500 text-white font-semibold rounded hover:bg-blue-600 transition duration-300 ease-in-out transform hover:scale-105">
                Semua
            </button>
        </div>
        <div class="border-black p-1">
            <button wire:click="pending-status-penjualan"
                class="w-full px-6 py-3 bg-orange-500 text-white font-semibold rounded hover:bg-blue-600 transition duration-300 ease-in-out transform hover:scale-105">
                Pending
            </button>
        </div>
        <div class="border-black p-1">
            <button wire:click="lunas-status-penjualan"
                class="w-full px-6 py-3 bg-orange-500 text-white font-semibold rounded hover:bg-blue-600 transition duration-300 ease-in-out transform hover:scale-105">
                Lunas
            </button>
        </div>
    </div>

    
</div>
