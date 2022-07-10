<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form method="POST" action="{{ route('user.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-6">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama User</label>
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
                    <label for="phone" class="label">Nomor HP</label>
                    <input name="phone" type="number" id="phone" class="input input-bordered w-full @error('phone') input-error @enderror" value="{{ old('phone') }}">
                    <span></span>
                    @error('phone')
                    <label class="label">
                        <span class="label-text-alt text-red-600">{{ $message }}</span>
                    </label>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Gambar</label>
                    <input type="file" name="image" id="image" class="input input-bordered w-full" value="{{ old('image') }}">
                    <span></span>
                </div>
                <div class="mb-6">
                    <label for="gender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Jenis Kelamain</label>
                    <select class="select select-primary w-full" name="gender" id="gender">
                        <option value="laki laki">laki laki</option>
                        <option value="perempuan">perempuan</option>
                    </select>
                    <span></span>
                </div>
                <div class="mb-6">
                    <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Alamat</label>
                    <input type="text" id="address" name="address" class="input input-bordered w-full @error('address') input-error @enderror" value="{{ old('address') }}">
                    <span></span>
                    @error('address')
                    <label class="label">
                        <span class="label-text-alt text-red-600">{{ $message }}</span>
                    </label>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Password</label>
                    <input name="password" type="password" id="password" class="input input-bordered w-full @error('password') input-error @enderror" value="{{ old('password') }}">
                    <span></span>
                    @error('password')
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