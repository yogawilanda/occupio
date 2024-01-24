<x-slot name="header"></x-slot>
<x-app-layout>
    <!-- Hero Section -->
    <div class="bg-cover bg-center relative h-80" style="background-image: url('your-image-url.jpg');">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="absolute inset-0 flex items-center justify-center">
            <div class="text-center text-white">
                
                <h1 class="text-4xl font-bold mb-4">
                    {{ __('Welcome to Your App') }}
                </h1>

                <p class="text-lg mb-6">
                    {{ __('Discover the amazing features of our app.') }}
                </p>

                <a href="{{ route('dashboard') }}"
                    class="px-6 py-3 bg-orange-500 text-white font-semibold rounded-full hover:bg-blue-600 transition duration-300 ease-in-out transform hover:scale-105">
                    {{ __('Get Started') }}
                </a>

            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto mt-8 px-5">
        <!-- Card Section -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 ">
            <!-- Card 1 -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm rounded-md sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2 class="text-xl font-semibold mb-4">{{ __('Cashier App') }}</h2>
                    <p>{{ __('.') }}</p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm rounded-md sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2 class="text-xl font-semibold mb-4">{{ __('Wingraha') }}</h2>
                    <p>{{ __('Description of Feature 2 goes here.') }}</p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2 class="text-xl font-semibold mb-4">{{ __('KPR Kalkulator') }}</h2>
                    <p>{{ __('Description of Feature 3 goes here.') }}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
