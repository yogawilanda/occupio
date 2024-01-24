@livewireScripts
<x-slot name="header"></x-slot>
<x-app-layout>
    <div class="p-5 m-5 gap-2">
        <div class="mb-10 text-3xl font-bold text-orange-600">
            Seluruh Product
        </div>

        <livewire:product-order-counter />

        <div class="mb-5 justify-center">
            <a href="{{ route('product.create') }}" class="bg-orange-500 hover:bg-white-700 text-white font-bold py-2 px-4 rounded">
                Add Product
            </a>
        </div>

        <div class="overflow-x-auto rounded bg-gray-800 border">
            <table class="min-w-full px-5">
                <thead>
                    <tr>
                        <th class="text-left px-3 py-2">Name</th>
                        <th class="text-left px-3 py-2">Price</th>
                        <th class="text-left px-3 py-2">Description</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr class="sm:hover:bg-gray-100">
                            <td class="border-t px-3 py-2 sm:border-none sm:table-cell">{{ $product->product_name }}</td>
                            <td class="border-t px-3 py-2 sm:border-none sm:table-cell">{{ $product->price }}</td>
                            <td class="border-t px-3 py-2 sm:border-none sm:table-cell">{{ $product->description }}</td>
                        </tr>
                        <tr class="hidden sm:hover:bg-gray-100">
                            <td colspan="3" class="border-t px-3 py-2">Details: {{ $product->description }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="justify-around mt-4">
            {{ $products->links() }}
        </div>
    </div>
</x-app-layout>
