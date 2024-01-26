@livewireScripts
<x-slot name="header"></x-slot>
<x-app-layout>
    <div class="p-5 m-5 gap-2">

        <div class="mb-10 text-3xl font-bold dark:text-white text-neutral-800">
            Seluruh Produk
        </div>

        <div class="flex flex-wrap">
            {{-- <livewire:grid-view-component > --}}
            <livewire:transaction-list-view-component >

            {{-- <div class="w-full md:w-1/2"> --}}
                {{-- <livewire:product-form /> --}}
            {{-- </div> --}}

            {{-- <livewire:product-order-counter /> --}}

            {{-- <livewire:table-layout /> --}}
            {{-- @livewire('table-layout', ['model' => 'product']) --}}

        </div>
</x-app-layout>
