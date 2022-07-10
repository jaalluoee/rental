<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form method="POST" action="{{ route('warehouse.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-6">
                    <label for="name" class="label">Nama Produk</label>
                    <input type="text" id="name" name="name" class="input input-bordered w-full @error('name') input-error @enderror" value="{{ old('name') }}">
                    <span></span>
                    @error('name')
                    <label class="label">
                        <span class="label-text-alt text-red-600">{{ $message }}</span>
                    </label>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="type" class="label">Tipe</label>
                    <input type="text" name="type" id="type" class="input input-bordered w-full @error('type') input-error @enderror" value="{{ old('type') }}">
                    <span></span>
                    @error('type')
                    <label class="label">
                        <span class="label-text-alt text-red-600">{{ $message }}</span>
                    </label>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="brand" class="label">Brand</label>
                    <input name="brand" type="text" id="brand" class="input input-bordered w-full @error('brand') input-error @enderror" value="{{ old('brand') }}">
                    <span></span>
                    @error('brand')
                    <label class="label">
                        <span class="label-text-alt text-red-600">{{ $message }}</span>
                    </label>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="stock" class="label">Stock</label>
                    <input name="stock" type="number" id="stock" class="input input-bordered w-full @error('stock') input-error @enderror" value="{{ old('stock') }}">
                    <span></span>
                    @error('stock')
                    <label class="label">
                        <span class="label-text-alt text-red-600">{{ $message }}</span>
                    </label>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="year" class="label">Tahun Pembelian</label>
                    <input name="year" type="number" id="year" class="input input-bordered w-full @error('year') input-error @enderror" value="{{ old('year') }}">
                    <span></span>
                    @error('year')
                    <label class="label">
                        <span class="label-text-alt text-red-600">{{ $message }}</span>
                    </label>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="price" class="label">Harga Pembelian</label>
                    <input name="price" type="number" id="price" class="input input-bordered w-full @error('price') input-error @enderror" value="{{ old('price') }}">
                    <span></span>
                    @error('price')
                    <label class="label">
                        <span class="label-text-alt text-red-600">{{ $message }}</span>
                    </label>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="cost" class="label">Harga Sewa </label>
                    <input name="cost" type="number" id="cost" class="input input-bordered w-full @error('cost') input-error @enderror" value="{{ old('cost') }}">
                    <span></span>
                    @error('cost')
                    <label class="label">
                        <span class="label-text-alt text-red-600">{{ $message }}</span>
                    </label>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="license_number" class="label">Plat Kendaraan</label>
                    <input name="license_number" type="text" id="license_number" class="input input-bordered w-full @error('license_number') input-error @enderror" value="{{ old('license_number') }}">
                    <span></span>
                    @error('license_number')
                    <label class="label">
                        <span class="label-text-alt text-red-600">{{ $message }}</span>
                    </label>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="image" class="label">Gambar</label>
                    <input type="file" name="image" id="image" class="input input-bordered w-full" value="{{ old('image') }}">
                    <span></span>
                </div>
                <div class="mb-6">
                    <label for="description" class="label">Deskripsi</label>
                    <textarea class="textarea textarea-bordered w-full @error('description') input-error @enderror" name="description" id="description" cols="30" rows="3"></textarea>
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