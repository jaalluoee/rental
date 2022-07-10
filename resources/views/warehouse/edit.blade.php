<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form method="POST" action="{{ route('warehouse.update', $result->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-6">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama Produk</label>
                    <input type="text" id="name" name="name" value="{{ $result->name }}" class="input input-bordered w-full @error('name') input-error @enderror">
                    <span></span>
                    @error('name')
                    <label class="label">
                        <span class="label-text-alt text-red-600">{{ $message }}</span>
                    </label>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tipe</label>
                    <input type="text" name="type" id="type" value="{{ $result->type }}" class="input input-bordered w-full @error('type') input-error @enderror">
                    <span></span>
                    @error('type')
                    <label class="label">
                        <span class="label-text-alt text-red-600">{{ $message }}</span>
                    </label>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Brand</label>
                    <input name="brand" type="text" id="brand" value="{{ $result->brand }}" class="input input-bordered w-full @error('brand') input-error @enderror">
                    <span></span>
                    @error('brand')
                    <label class="label">
                        <span class="label-text-alt text-red-600">{{ $message }}</span>
                    </label>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="stock" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Stock</label>
                    <input name="stock" type="number" id="stock" value="{{ $result->stock }}" class="input input-bordered w-full @error('stock') input-error @enderror">
                    <span></span>
                    @error('stock')
                    <label class="label">
                        <span class="label-text-alt text-red-600">{{ $message }}</span>
                    </label>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="year" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tahun Pembelian</label>
                    <input name="year" type="number" id="year" value="{{ $result->year }}" class="input input-bordered w-full @error('year') input-error @enderror">
                    <span></span>
                    @error('year')
                    <label class="label">
                        <span class="label-text-alt text-red-600">{{ $message }}</span>
                    </label>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Harga Pembelian</label>
                    <input name="price" type="number" id="price" value="{{ $result->price }}" class="input input-bordered w-full @error('price') input-error @enderror">
                    <span></span>
                    @error('price')
                    <label class="label">
                        <span class="label-text-alt text-red-600">{{ $message }}</span>
                    </label>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="cost" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Harga Sewa</label>
                    <input name="cost" type="number" id="cost" value="{{ $result->cost }}" class="input input-bordered w-full @error('cost') input-error @enderror">
                    <span></span>
                    @error('cost')
                    <label class="label">
                        <span class="label-text-alt text-red-600">{{ $message }}</span>
                    </label>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="license_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Plat kendaraan</label>
                    <input name="license_number" type="text" id="license_number" value="{{ $result->license_number }}" class="input input-bordered w-full @error('license_number') input-error @enderror">
                    <span></span>
                    @error('license_number')
                    <label class="label">
                        <span class="label-text-alt text-red-600">{{ $message }}</span>
                    </label>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Gambar</label>
                    <input type="file" name="image" id="image" class="input input-bordered w-full">
                </div>
                <div class="mb-6">
                    <label for="description" class="label">Deskripsi</label>
                    <textarea class="textarea textarea-bordered w-full @error('description') input-error @enderror"  name="description" id="description" cols="30" rows="3">{{$result->description}}</textarea>
                    <span></span> 
                    @error('description')
                    <label class="label">
                        <span class="label-text-alt text-red-600">{{ $message }}</span>
                    </label>
                    @enderror
                </div>
                <button class="btn btn-primary">Simpan</button>
            </form>

        </div>
    </div>
</x-app-layout>