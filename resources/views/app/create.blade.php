<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form method="POST" action="{{ route('app.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-6">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama</label>
                    <input type="text" id="name" name="name" class="input input-bordered w-full @error('name') input-error @enderror" value="{{ old('name') }}">
                    <span></span>
                    @error('name')
                    <label class="label">
                        <span class="label-text-alt text-red-600">{{ $message }}</span>
                    </label>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email</label>
                    <input type="email" name="email" id="email" class="input input-bordered w-full @error('email') input-error @enderror" value="{{ old('email') }}">
                    <span></span>
                    @error('email')
                    <label class="label">
                        <span class="label-text-alt text-red-600">{{ $message }}</span>
                    </label>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nomor</label>
                    <input type="number" name="phone" id="phone" class="input input-bordered w-full @error('phone') input-error @enderror" value="{{ old('phone') }}">
                    <span></span>
                    @error('phone')
                    <label class="label">
                        <span class="label-text-alt text-red-600">{{ $message }}</span>
                    </label>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Alamat</label>
                    <input name="address" type="text" id="address" class="input input-bordered w-full @error('address') input-error @enderror" value="{{ old('address') }}">
                    <span></span>
                    @error('address')
                    <label class="label">
                        <span class="label-text-alt text-red-600">{{ $message }}</span>
                    </label>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Gambar</label>
                    <input type="file" id="image" name="image" class="input input-bordered w-full" value="{{ old('image') }}">
                    <span></span>
                </div>
                <div class="mb-6">
                    <label for="maps" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Maps</label>
                    <input type="text" id="maps" name="maps" class="input input-bordered w-full @error('maps') input-error @enderror" value="{{ old('maps') }}">
                    <span></span>
                    @error('maps')
                    <label class="label">
                        <span class="label-text-alt text-red-600">{{ $message }}</span>
                    </label>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="description" class="label">Deskripsi</label>
                    <textarea class="textarea textarea-bordered w-full @error('description') input-error @enderror" name="description" id="description" cols="30" rows="3"></textarea>
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