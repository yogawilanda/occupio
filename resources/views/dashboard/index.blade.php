<x-slot name="header"></x-slot>
<x-app-layout>
    <div class="grid grid-cols-1 md:grid-cols-6 gap-4 h-screen">
        {{-- Sidebar --}}
        <div class="md:col-span-1 bg-gray-800 text-white p-4 h-full hidden md:block">
            {{-- Your sidebar content goes here --}}
            <ul class="flex flex-col justify-start">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Manage Users</a></li>
                <li><a href="#">Manage Products</a></li>
                <!-- Add more links as needed -->
            </ul>
        </div>

        {{-- Main Content Area --}}
        <div class="md:col-span-5 h-full">
            <div class="py-12 h-full">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 h-full">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden rounded sm:rounded-lg h-full">
                        
                        {{-- Greetings --}}
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            {{ __('Selamat Datang, ' . Str::ucfirst(Auth::user()->name)) }}
                        </div>

                        {{-- Quick Menu --}}
                        <livewire:manage-button-dashboard-component />

                        {{-- Data Visualization --}}
                        {{-- TODO: Komponen Data Visualization --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
