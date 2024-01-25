@livewireScripts
<x-slot name="header"></x-slot>
<x-app-layout>
    <div class="p-5 m-5 gap-2">
        <div class="mb-10 text-3xl font-bold text-orange-600">
            Seluruh Product
        </div>

        <livewire:product-order-counter />

        <livewire:table-layout/>
        
        
    </div>
</x-app-layout>
