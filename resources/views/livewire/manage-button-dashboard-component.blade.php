<div class="md:col-span-1 bg-gray-800 text-white p-4 h-full hidden md:block">
    <ul class="flex flex-col justify-start pd-4 gap-4">
        <div class="gap-x-4 px-4 md:px-5">
            <button wire:click="manageUser"
                class="w-full px-6 py-3 bg-orange-500 text-white font-semibold rounded hover:bg-blue-600 transition duration-300 ease-in-out transform hover:scale-105">
                Manage User
            </button>
            <button wire:click="manageProduct"
                class="w-full px-6 py-3 bg-orange-500 text-white font-semibold rounded hover:bg-blue-600 transition duration-300 ease-in-out transform hover:scale-105">Manage
                Product</button>
            <button wire:click="manageOrder"
                class="w-full px-6 py-3 bg-orange-500 text-white font-semibold rounded hover:bg-blue-600 transition duration-300 ease-in-out transform hover:scale-105">Manage
                Order</button>
            <button wire:click="managePayment"
                class="w-full px-6 py-3 bg-orange-500 text-white font-semibold rounded hover:bg-blue-600 transition duration-300 ease-in-out transform hover:scale-105">Manage
                Payment</button>
            <button wire:click="manageReport"
                class="w-full px-6 py-3 bg-orange-500 text-white font-semibold rounded hover:bg-blue-600 transition duration-300 ease-in-out transform hover:scale-105">Manage
                Report</button>
            <button wire:click="manageSetting"
                class="w-full px-6 py-3 bg-orange-500 text-white font-semibold rounded hover:bg-blue-600 transition duration-300 ease-in-out transform hover:scale-105">Manage
                Setting</button>
            <button wire:click="manageProfile"
                class="w-full px-6 py-3 bg-orange-500 text-white font-semibold rounded hover:bg-blue-600 transition duration-300 ease-in-out transform hover:scale-105">Manage
                Profile</button>
        </div>
    </ul>
</div>
