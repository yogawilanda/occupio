<div class="">
    <div class="container grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 w-1/2">
        @foreach ($products as $product)
            <div class="product-card rounded-lg overflow-hidden shadow-md hover:shadow-lg">
                
                <img src="{{ $product->image }}" alt="" class="object-cover h-48 w-full">
                
                <div class="p-4 dark:text-white dark:bg-neutral-800 ">
                    <p class="font-bold mb-2 text-lg text-black dark:text-neutral-200">{{ $product->product_name }}</p>
                    <span class="text-gray-700">{{ $product->price }}</span>
                    <p class="text-gray-500 text-sm mt-2 overflow-hidden whitespace-nowrap overflow-ellipsis">{{ $product->description }}
                    </p>
                    <div class="actions">
                        <button wire:click="addToCart({{ $product->id }})"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-2">Add to cart</button>

                        <input type="number"
                            class="mt-4 bg-white dark:bg-neutral-800 hover:bg-blue-700 text-neutral-800  dark:text-white font-bold  rounded"
                            wire:model="quantity" value="0">
                        <input type="hidden" value="{{ $product->id }}" wire:model="product_id">
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="justify-center mt-4">
        {{ $products->links() }}
    </div>
</div>
