<div class="flex text-center my-6 justify-center gap-6">
    <div>
        <button wire:click="increment" class="px-11 py-2 bg-orange-400">
            Tambahkan
        </button>
    </div>
    <div>
        <h1 class="text-xl text-white px-11 py-2">{{ $count }}</h1>
    </div>
</div>
