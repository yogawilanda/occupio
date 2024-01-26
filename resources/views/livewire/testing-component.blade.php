<div class="px-5">
    {{-- <div class="mt-5 text-3xl text-white">
        Contoh Pemanggilan Parameter dari Livewire
    </div>
    {{ $name }}
    {{ $author }}

    <div class="text-4xl text-white">
        Contoh Testing Array
    </div>

    @foreach ($arrays as $array)
        <div class="px-5 text-white">
            {{ $array }}
        </div>
    @endforeach --}}


    {{-- <form>
        <label for="title">Title:</label>
        <input type="text" id="title" wire:model.live="title"> 
        {{ $title }}
    </form> --}}

    {{-- <div class="text-4xl text-white">
        Contoh Posting Data
    </div> --}}

    {{-- User Counter --}}
    <div class="text-4xl text-white">
        Jumlah Pengguna : {{ $user->count() }}
    </div>

    {{-- <button class="py-2 px-4 bg-white hover:bg-slate-600 hover:duration-150 text-lg rounded-md"
    wire:click="createNewUser"
    >
        Create New User
    </button> --}}

    {{-- Form Untuk Membuat User Secara Manual --}}
    <div class="">
        <form action="">
            <div class="container mx-auto p-4">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label for="name" class="block text-sm font-medium text-white">Name:</label>
                        <input type="text" id="name" wire:model.live="name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        @error('name')
                            <div class="text-red-500 mt-2">
                                <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>
        
                    <div>
                        <label for="email" class="block text-sm font-medium text-white">Email:</label>
                        <input type="text" id="email" wire:model.live="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        @error('email')
                            <div class="text-red-500 mt-2">
                                <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>
        
                    <div>
                        <label for="password" class="block text-sm font-medium text-white">Password:</label>
                        <input type="text" id="password" wire:model.live="password" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        @error('password')
                            <div class="text-red-500 mt-2">
                                <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>
                </div>
        
                <button type="submit" class="mt-4 py-2 px-4 bg-white hover:bg-slate-600 hover:duration-150 text-lg rounded-md">
                    Create New User
                </button>
            </div>
        </form>
    </div>

    <hr>

    <div>
        @foreach ($user as $listUser)
            <p>
                {{ $listUser->name }}
            </p>
        @endforeach
    </div>


</div>
