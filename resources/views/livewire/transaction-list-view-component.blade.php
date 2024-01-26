{{-- <div> --}}
{{-- @livewire('transaction-list') --}}
{{-- </div> --}}

{{-- <template wire:key="transaction-list"> --}}
<ul class="list-none  divide-gray-200 w-full">
    <div class="dark:text-white text-2xl text-black mb-3">
        Transaksi
    </div>

    @if ($products->isEmpty() || $products->count() == 0 || $products==null || $products=="UNDEFINED")
        <div class="flex items-center justify-center w-full h-64">
            <div class="flex flex-col items-center justify-center">
                <svg class="w-16 h-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                        d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
                <span class="mt-2 text-sm text-gray-500">No transactions found</span>
            </div>
        </div>
    @elseif ($products->isNotEmpty())
        @foreach ($products as $product)
            <div class="mb-2">
                <li class="flex items-center gap-4 justify-between py-3 px-4 bg-white hover:bg-gray-100 rounded">
                    <div class="flex flex-col w-full">
                        <h3 class="font-bold text-base text-gray-900">{{ $product->product_name }}</h3>
                        <span class="text-sm text-gray-500">{{ $product->created_at->format('M d, Y H:m:s') }}</span>
                    </div>

                    {{-- Status --}}
                    <div class="{{ $product->status == 'paid' ? 'text-red' : 'text-green' }}">
                        @if ($product->status == 'paid')
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg>
                            Paid
                        @else
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Pending
                        @endif
                    </div>

                    <div class="flex items-center justify-end">
                        <span class="mr-4 text-sm text-gray-700">{{ $product->status }}</span>
                        <button wire:click="showDetails({{ $product->id }})"
                            class="inline-flex items-center px-4 py-2 text-base font-bold text-white bg-blue-500 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring">
                            Details
                            <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 7l5 5m0 0l-5 5m5-5v-8M6 18H8M6 6H8" />
                            </svg>
                        </button>
                    </div>
                </li>
            </div>
        @endforeach

        <div>
            {{ $products->links() }}
        </div>
    @endif

</ul>
{{-- </template> --}}

{{-- <x-details-popup :products="$transaction" /> --}}
