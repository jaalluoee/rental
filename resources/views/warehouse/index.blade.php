<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-start">
                <a href="{{ route('warehouse.create') }}" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    Tambah Data
                </a>
            </div>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="table w-full">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Product name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Color
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Color
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Category
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Price
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($results as $result)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="link">
                                <a href="{{ route('warehouse.detail', $result->id) }}">
                                    {{ $result->name }}
                                </a>
                            </th>
                            <td class="px-6 py-4">
                                {{ $result->type }}
                            </td>
                            <td>
                                <img width="100" class="w-24" src="{{ $result->image }}" alt="">
                            </td>
                            <td class="px-6 py-4">
                                {{ $result->brand }}
                            </td>
                            <td class="px-6 py-4">
                                Rp. {{ $result->cost }}
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex gap-5">
                                    <a class="font-medium text-blue-600 dark:text-blue-500 hover:underline" href="{{ route('warehouse.edit', $result->id) }}">Edit</a>
                                    <form method="POST" action="{{ route('warehouse.delete', $result->id) }}">
                                        @method('delete')
                                        @csrf
                                        <button class="font-medium text-red-600 dark:text-red-500 hover:underline">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>