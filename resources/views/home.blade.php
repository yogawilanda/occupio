<x-app-layout>
    <!-- Hero Section -->
    <div class=" bg-cover bg-center relative h-lvh">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="absolute inset-0 flex items-center justify-center">
            <div class="text-center text-white">
                
                <h1 class="font-bold mb-4 lg:text-5xl md:text-4xl text-3xl">
                    {{ __('Stay Productive. Leave Repetitive Task.') }}
                </h1>

                <p class="text-lg mb-6 px-6">
                    {{ __('Automate your workflow and spend more time with your beloved one.') }}
                </p>

                <a href="{{ route('dashboard.index') }}"
                    class="px-6 py-3 bg-orange-500 text-white font-semibold rounded-full hover:bg-blue-600 transition duration-300 ease-in-out transform hover:scale-105">
                    {{ __('Get Started') }}
                </a>

            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="mx-auto mt-8 px-5 h-full">
        <!-- Card Section -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 ">
            <!-- Card 1 -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm rounded-md sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2 class="text-xl font-semibold mb-4">{{ __('Klerki') }}</h2>
                    <p>{{ __('Your POS Automation with AI Powered. For Small to Medium Business, growth helper.') }}</p>
                    <button class="mt-6">
                        <a href="{{ route('dashboard.index') }}"
                            class="px-6 py-3 bg-orange-500 text-white font-semibold rounded hover:bg-blue-600 transition duration-300 ease-in-out transform hover:scale-105">
                            {{ __('Go To SpacyCalc') }}
                        </a>
                    </button>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm rounded-md sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2 class="text-xl font-semibold mb-4">{{ __('Wingraha') }}</h2>
                    <p>{{ __('Description of Feature 2 goes here.') }}</p>
                    <button class="mt-6">
                        <a href="{{ route('dashboard.index') }}"
                            class="px-6 py-3 bg-orange-500 text-white font-semibold rounded hover:bg-blue-600 transition duration-300 ease-in-out transform hover:scale-105">
                            {{ __('Go To SpacyCalc') }}
                        </a>
                    </button>
                </div>
                
            </div>

            <!-- Card 3 -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden rounded-md shadow-sm sm:rounded-lg mb-6">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2 class="text-xl font-semibold mb-4">{{ __('SpacyCalc') }}</h2>
                    <p>{{ __('Spend less to calculate your investment.') }}</p>
                    <button class="mt-6">
                        <a href="{{ route('dashboard.index') }}"
                            class="px-6 py-3 bg-orange-500 text-white font-semibold rounded hover:bg-blue-600 transition duration-300 ease-in-out transform hover:scale-105">
                            {{ __('Go To SpacyCalc') }}
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
