<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if ($errors->any())
            <div class="alert alert-danger">
                <div class="alert alert-error shadow-lg">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            @endif
            <form method="POST" action="{{ route('warehouse.update', $result->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-6">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama Produk</label>
                    <input type="text" id="name" name="name" value="{{ $result->name }}" class="input input-bordered w-full">
                </div>
                <div class="mb-6">
                    <label for="type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tipe</label>
                    <input type="text" name="type" id="type" value="{{ $result->type }}" class="input input-bordered w-full">
                </div>
                <div class="mb-6">
                    <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Gambar</label>
                    <input type="file" name="image" id="image" class="input input-bordered w-full">
                </div>
                <div class="mb-6">
                    <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Brand</label>
                    <input name="brand" type="text" id="brand" value="{{ $result->brand }}" class="input input-bordered w-full">
                </div>
                <div class="mb-6">
                    <label for="stock" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Stock</label>
                    <input name="stock" type="number" id="stock" value="{{ $result->stock }}" class="input input-bordered w-full">
                </div>
                <div class="mb-6">
                    <label for="year" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tahun Pembelian</label>
                    <input name="year" type="number" id="year" value="{{ $result->year }}" class="input input-bordered w-full">
                </div>
                <div class="mb-6">
                    <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Harga Pembelian</label>
                    <input name="price" type="number" id="price" value="{{ $result->price }}" class="input input-bordered w-full">
                </div>
                <div class="mb-6">
                    <label for="cost" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Harga Sewa</label>
                    <input name="cost" type="number" id="cost" value="{{ $result->cost }}" class="input input-bordered w-full">
                </div>
                <div class="mb-6">
                    <label for="license_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Plat kendaraan</label>
                    <input name="license_number" type="text" id="license_number" value="{{ $result->license_number }}" class="input input-bordered w-full">
                </div>
                <div class="mb-6">
                    <label for="description" class="label">Deskripsi</label>
                    <textarea class="textarea textarea-bordered w-full"  name="description" id="description" cols="30" rows="3">{{$result->description}}</textarea> 
                </div>
                <button class="btn btn-primary">Simpan</button>
            </form>

        </div>
    </div>
</x-app-layout>