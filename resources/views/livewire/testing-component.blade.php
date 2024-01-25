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
        <input type="text" id="title" wire:model="title"> 
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

    <form action="">
        <label for="name">Name:</label>
        @validate('name')
        <input type="text" id="name" wire:model="name">
        <br>
        <label for="email">Email:</label>
        <input type="text" id="email" wire:model="email">
        <br>
        <label for="password">Password:</label>
        <input type="text" id="password" wire:model="password">
        <br>
        <button class="py-2 px-4 bg-white hover:bg-slate-600 hover:duration-150 text-lg rounded-md"
            wire:click.prevent="createNewUserUsingForm">
            Create New User
        </button>
    </form>
    <hr>
    <div>
        @foreach ($user as $listUser)
            <p>
                {{ $listUser->name }}
            </p>
        @endforeach
    </div>
</div>
