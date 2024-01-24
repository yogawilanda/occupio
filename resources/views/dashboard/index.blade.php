<x-slot name="header"></x-slot>
<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden  rounded sm:rounded-lg ">
                
                {{-- Greetingsnya disini --}}
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __('Selamat Datang, ' . Str::ucfirst(Auth::user()->name)) }}
                </div>

                {{-- Quick Menu / dir: livewire/manage-button... --}}
                <livewire:manage-button-dashboard-component />

                {{-- Data Visualization --}}
                {{-- TODO;  Komponen Data Visualization--}}

                
            </div>
        </div>
    </div>
</x-app-layout>
