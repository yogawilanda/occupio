<x-slot name="header"></x-slot>
<x-app-layout>
    <div class="grid grid-cols-1 md:grid-cols-6 h-screen">
        {{-- Sidebar --}}

        <livewire:manage-button-dashboard-component />
        <!-- Add more links as needed -->

        {{-- Main Content Area --}}
        <div class="md:col-span-5 h-full">
            <div class="py-12 h-full">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 h-full">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden rounded sm:rounded-lg h-full">

                        {{-- Title --}}
                        <div class="p-6 text-4xl text-white">
                            {{ __('Dashboard') }}
                        </div>

                        {{-- Greetings --}}
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            {{ __('Selamat Datang, ' . Str::ucfirst(Auth::user()->name)) }}
                        </div>

                        <livewire:testing-component title="">

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
