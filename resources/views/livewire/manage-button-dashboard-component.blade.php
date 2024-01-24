<!-- resources/views/livewire/manage-buttons.blade.php -->

<div class="gap-4 px-2 md:px-5 flex-col items-center list-item">
    {{-- Small button --}}
    <button wire:click="manageUser"
        class="w-full md:w-auto px-6 py-3 bg-orange-500 text-white font-semibold rounded hover:bg-blue-600 transition duration-300 ease-in-out transform hover:scale-105 mb-2 md:mb-0">Manage
        User</button>

    {{-- Manage Product Button --}}
    <button wire:click="manageProduct"
        class="w-full md:w-auto px-6 py-3 bg-orange-500 text-white font-semibold rounded hover:bg-blue-600 transition duration-300 ease-in-out transform hover:scale-105 mb-2 md:mb-0">
        Manage Product
    </button>

    {{-- Manage Order Button --}}
    <button wire:click="manageOrder"
        class="w-full md:w-auto px-6 py-3 bg-orange-500 text-white font-semibold rounded hover:bg-blue-600 transition duration-300 ease-in-out transform hover:scale-105 mb-2 md:mb-0">Manage
        Order</button>

    {{-- Manage Payment Button --}}
    <button wire:click="managePayment"
        class="w-full md:w-auto px-6 py-3 bg-orange-500 text-white font-semibold rounded hover:bg-blue-600 transition duration-300 ease-in-out transform hover:scale-105 mb-2 md:mb-0">Manage
        Payment</button>

    {{-- Manage Report Button --}}
    <button wire:click="manageReport"
        class="w-full md:w-auto px-6 py-3 bg-orange-500 text-white font-semibold rounded hover:bg-blue-600 transition duration-300 ease-in-out transform hover:scale-105 mb-2 md:mb-0">Manage
        Report</button>

    {{-- Manage Setting Button --}}
    <button wire:click="manageSetting"
        class="w-full md:w-auto px-6 py-3 bg-orange-500 text-white font-semibold rounded hover:bg-blue-600 transition duration-300 ease-in-out transform hover:scale-105 mb-2 md:mb-0">Manage
        Setting</button>

    {{-- Manage Profile Button --}}
    <button wire:click="manageProfile"
        class="w-full md:w-auto px-6 py-3 bg-orange-500 text-white font-semibold rounded hover:bg-blue-600 transition duration-300 ease-in-out transform hover:scale-105 mb-2 md:mb-0">Manage
        Profile</button>
</div>


