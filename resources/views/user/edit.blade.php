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
            <form method="POST" action="{{ route('user.update',$data->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-6">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama User</label>
                    <input type="text" id="name" name="name" class="input input-bordered w-full" value="{{ $data->name }}">
                    <span></span>
                </div>
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email</label>
                    <input type="email" name="email" id="email" class="input input-bordered w-full" value="{{ $data->email }}">
                    <span></span>
                </div>
                <div class="mb-6">
                    <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Gambar</label>
                    <input type="file" name="image" id="image" class="input input-bordered w-full" value="{{ $data->image }}">
                    <span></span>
                </div>
                <div class="mb-6">
                    <label for="phone" class="label">Nomor HP</label>
                    <input name="phone" type="number" id="phone" class="input input-bordered w-full" value="{{ $data->phone  }}">
                    <span></span>
                </div>
                <div class="mb-6">
                    <label for="gender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Jenis Kelamain</label>
                    <select class="select select-primary w-full" name="gender" id="gender">
                        <option value="laki laki" @selected($data->gender=='laki laki')>laki laki</option>
                        <option value="perempuan" @selected($data->gender=='perempuan')>perempuan</option>
                    </select>
                    <span></span>
                </div>
                <div class="mb-6">
                    <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Alamat</label>
                    <input type="text" id="address" name="address" class="input input-bordered w-full" value="{{ $data->address }}">
                    <span></span>
                </div>
                <div class="mb-6">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Password</label>
                    <input name="password" type="password" id="password" class="input input-bordered w-full" value="">
                    <span></span>
                </div>
                <button class="btn btn-primary">Simpan</button>
            </form>

        </div>
    </div>
</x-app-layout>