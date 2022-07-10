@php
function rupiah($angka){

$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
return $hasil_rupiah;

}
@endphp
<x-guest-layout>
  <div class="bg-white">
    <div class="pt-6">
      <nav aria-label="Breadcrumb">
        <ol role="list" class="max-w-2xl mx-auto px-4 flex items-center space-x-2 sm:px-6 lg:max-w-7xl lg:px-8">
          <li>
            <div class="flex items-center">
              <a href="#" class="mr-2 text-sm font-medium text-gray-900"> Product </a>
              <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-4 h-5 text-gray-300">
                <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
              </svg>
            </div>
          </li>
          <li class="text-sm">
            <a href="#" aria-current="page" class="font-medium text-gray-500 hover:text-gray-600"> {{ $data->name }} </a>
          </li>
        </ol>
      </nav>

      <!-- Image gallery -->
      <div class="mt-6 max-w-2xl mx-auto sm:px-6 lg:max-w-7xl lg:px-8">
        <img class="w-full" src="{{ $data->image }}" alt="">
      </div>

      <!-- Product info -->
      <div class="max-w-2xl mx-auto pt-10 pb-16 px-4 sm:px-6 lg:max-w-7xl lg:pt-16 lg:pb-24 lg:px-8 lg:grid lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8">
        <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
          <h1 class="text-2xl font-extrabold tracking-tight text-gray-900 sm:text-3xl">
            {{ $data->name }}
          </h1>
          <p>
            {{ $data->brand }}
          </p>
        </div>

        <!-- Options -->
        <div class="mt-4 lg:mt-0 lg:row-span-3">
          <h2 class="sr-only">Product information</h2>
          <p class="text-3xl text-gray-900">{{ rupiah($data->cost) }}</p>
          <div class="mt-10">
            <a href="https://api.whatsapp.com/send?phone={{ $settings->phone }}&text=Selamat%20Datang%20Di%20SUBDRIVEWEB%20Silahkan%20Isi%20Formulir%20Yang%20Sudah%20Disediakan%20Dibawah%20Ini%0ANama%20:%0AEmail%20:%0AJenis%20Kendaraan%20:%0ADurasi%20Sewa%20:%0ADeskripsi%20:%0A" target="_blank" class="text-white space-x-4 bg-green-600 hover:bg-green-600/90 focus:ring-4 focus:outline-none focus:ring-greenbg-green-600/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-greenbg-green-600/50 mr-2 mb-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
              </svg>
              <p>Pesan di Whatsapp</p>
            </a>
          </div>
        </div>


        <div class="py-10 lg:pt-6 lg:pb-16 lg:col-start-1 lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
          <!-- Description and details -->
          <div>
            <h3 class="sr-only">Description</h3>

            <div class="space-y-6">
              <p class="text-base text-gray-900 text-justify">{{ $data->description }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container mx-auto px-20 mb-10">
      @if(session('message'))
      <div class="alert alert-success shadow-lg">
        <div>
          <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          <span>{{ session('message') }}</span>
        </div>
      </div>
      @endif
    </div>
    <form class="container mx-auto px-20" method="POST" action="{{ route('product.order', $data->id) }}" enctype="multipart/form-data">
      @csrf
      <div class="mb-6">
        <label for="name" class="label">Nama Lengkap</label>
        <input type="text" id="name" name="name" class="input input-bordered w-full @error('name') input-error @enderror" value="{{ old('name') }}">
        <span></span>
        @error('name')
        <label class="label">
          <span class="label-text-alt text-red-600">{{ $message }}</span>
        </label>
        @enderror
      </div>
      <div class="mb-6">
        <label for="phone" class="label">Wa/Telp</label>
        <input type="number" name="phone" id="phone" class="input input-bordered w-full @error('phone') input-error @enderror" value="{{ old('phone') }}">
        <span class="text-gray-400">Pastikan No Wa / Telp aktif karena akan digunakan untuk konfirmasi pesanan anda.</span>
        @error('phone')
        <label class="label">
          <span class="label-text-alt text-red-600">{{ $message }}</span>
        </label>
        @enderror
      </div>
      <div class="mb-6">
        <label for="email" class="label">Email</label>
        <input type="text" id="email" name="email" class="input input-bordered w-full @error('email') input-error @enderror" value="{{ old('email') }}">
        <span class="text-gray-400">Pastikan Email aktif karena akan digunakan untuk konfirmasi pesanan anda.</span>
        @error('email')
        <label class="label">
          <span class="label-text-alt text-red-600">{{ $message }}</span>
        </label>
        @enderror
      </div>
      <div class="mb-6">
        <label for="transportation" class="label">Jenis Kendaraan</label>
        <select class="select w-full select-primary text-gray-400" name="transportation" id="transportation">
          @foreach($warehouse as $vehicle)
          <option value="{{ $vehicle->id }}" @selected($vehicle->id == $data->id)>
            {{ $vehicle->name }}
          </option>
          @endforeach
        </select>
        <span class="text-gray-400"></span>
      </div>
      <div class="mb-6">
        <label for="duration" class="label">Durasi Sewa</label>
        <select class="select w-full select-primary text-gray-400" name="duration" id="duration">
          <option value="12 jam">12 jam</option>
          <option value="24 jam">24 jam</option>
        </select>
        <span></span>
      </div>
      <div class="mb-6">
        <label for="description" class="label">Deskripsi</label>
        <textarea class="textarea textarea-bordered w-full @error('description') input-error @enderror" name="description" id="description" cols="30" rows="3" value="{{ old('description') }}"></textarea>
        @error('description')
        <label class="label">
          <span class="label-text-alt text-red-600">{{ $message }}</span>
        </label>
        @enderror
      </div>
      <button class="btn btn-primary mb-6">Simpan</button>
    </form>
  </div>
</x-guest-layout>