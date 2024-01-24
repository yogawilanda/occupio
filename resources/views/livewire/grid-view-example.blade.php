<!-- resources/views/livewire/grid-view-example.blade.php -->

<div class="grid gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 px-2 md:px-5">
    {{-- Small button --}}
    <button wire:click="manageUser" class="w-full bg-orange-500 text-white rounded p-4 hover:bg-blue-600 transition duration-300 ease-in-out transform hover:scale-105">
        <i class="fas fa-user fa-2x mb-2"></i>
        <span class="text-sm">Manage User</span>
    </button>

    {{-- Manage Product Button --}}
    <button wire:click="manageProduct" class="w-full bg-orange-500 text-white rounded p-4 hover:bg-blue-600 transition duration-300 ease-in-out transform hover:scale-105">
        <i class="fas fa-box fa-2x mb-2"></i>
        <span class="text-sm">Manage Product</span>
    </button>

    {{-- Manage Order Button --}}
    <button wire:click="manageOrder" class="w-full bg-orange-500 text-white rounded p-4 hover:bg-blue-600 transition duration-300 ease-in-out transform hover:scale-105">
        <i class="fas fa-shopping-cart fa-2x mb-2"></i>
        <span class="text-sm">Manage Order</span>
    </button>

    {{-- Manage Payment Button --}}
    <button wire:click="managePayment" class="w-full bg-orange-500 text-white rounded p-4 hover:bg-blue-600 transition duration-300 ease-in-out transform hover:scale-105">
        <i class="fas fa-credit-card fa-2x mb-2"></i>
        <span class="text-sm">Manage Payment</span>
    </button>

    {{-- Manage Report Button --}}
    <button wire:click="manageReport" class="w-full bg-orange-500 text-white rounded p-4 hover:bg-blue-600 transition duration-300 ease-in-out transform hover:scale-105">
        <i class="fas fa-chart-bar fa-2x mb-2"></i>
        <span class="text-sm">Manage Report</span>
    </button>

    {{-- Manage Setting Button --}}
    <button wire:click="manageSetting" class="w-full bg-orange-500 text-white rounded p-4 hover:bg-blue-600 transition duration-300 ease-in-out transform hover:scale-105">
        <i class="fas fa-cog fa-2x mb-2"></i>
        <span class="text-sm">Manage Setting</span>
    </button>

    {{-- Manage Profile Button --}}
    <button wire:click="manageProfile" class="w-full bg-orange-500 text-white rounded p-4 hover:bg-blue-600 transition duration-300 ease-in-out transform hover:scale-105">
        <i class="fas fa-user-circle fa-2x mb-2"></i>
        <span class="text-sm">Manage Profile</span>
    </button>
</div>
