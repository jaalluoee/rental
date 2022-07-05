<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Management User
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="table w-full">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Nama Pengguna
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Phone
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Email
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
                                <a href="{{ route('order.show', $result->id) }}">
                                    {{ $result->name }}
                                </a>
                            </th>
                            <td class="px-6 py-4">
                                {{ $result->phone }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $result->email }}
                            </td>
                            <td class="px-6 py-4">
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex gap-5">
                                    <form method="POST" action="{{ route('order.delete', $result->id) }}">
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