<x-slot name="header"></x-slot>
<x-app-layout>
    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden  rounded sm:rounded-lg ">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __('Selamat Datang, ' . Str::ucfirst(Auth::user()->name)) }}
                </div>

                <div class="container">
                    <table class="overflow-x" border="1">
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                            <tr class="overflow-x-auto">
                                <td class="px-5 text-white "> {{ Auth::user()->id }} </td>
                                <td class="px-5 text-white "> {{ Auth::user()->name }} </td>
                                <td class="px-5 text-white "> {{ Auth::user()->email }} </td>
                                <td class="px-5 text-white "> {{ Auth::user()->password }} </td>
                            </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
