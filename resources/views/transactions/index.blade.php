@livewireScripts
<x-slot name="header"></x-slot>
<x-app-layout>
    <div class="p-5 m-5 gap-2">
        <div class="mb-10 text-3xl font-bold text-orange-600">
            Penjualan
        </div>

        <div class="p-6 dark:text-white text-black">
            {{ __('Pendapatan anda hari ini :') }}
            {{ __(number_format(DB::table('products')->whereDate('created_at', today())->sum('price'))) }}
        </div>

        <div class="p-6 dark:text-white text-black">
            {{ __('Lihat Pendapatan pada tanggal 24 Januari 2024:') }}
            {{ __('Rp. ' .number_format(DB::table('products')->whereDate('created_at', '2024-01-24')->sum('price'))) }}
        </div>

        <div class="p-6 dark:text-white text-black">
            {{ __('Total Pendapatan Anda Selama Ini :') }}
            {{ __(DB::table('products')->sum('price')) }}
        </div>

    </div>
</x-app-layout>
