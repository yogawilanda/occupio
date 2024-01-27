<div class="flex text-center my-6 justify-center gap-6">
    <div>
        <button wire:click="increment" class="px-11 py-2 bg-orange-400">
            Tambahkan
        </button>
    </div>
    <div>
        <h1 class="text-xl text-white px-11 py-2">{{ $count }}</h1>
        {{-- Todo, jika ditambahkan value, secara otomatis akan menambahkan yang bawah --}}
        <input type="text" value="{{ $count }}">
        <h1 class="text-xl text-white px-11 py-2 wire:model='{{$count}}'">{{ $incrementValue * $harga }}</h1>


        <div>
            <input type="text" wire:model="namaProduk" value="{{ $namaProduk }}">
            <input type="text" wire:model="stokProduk" value="{{ $stokProduk }}">
            <button type="submit" wire:click="masukkanDataProdukMelaluiButton">Tambah Produk</button>
        </div>
    </div>
</div>
