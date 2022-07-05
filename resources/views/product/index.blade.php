<x-guest-layout>
    @php
    function rupiah($angka){

    $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
    return $hasil_rupiah;

    }
    @endphp
    <div class="bg-white">
        <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
            <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">Daftar Kendaraan</h2>

            <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                @foreach($results as $data)
                <div class="group relative">
                    <div class="w-full min-h-52 bg-gray-200 rounded-md overflow-hidden group-hover:opacity-75 lg:h-52 lg:aspect-none">
                        <img src="{{ $data->image }}" alt="Front of men&#039;s Basic Tee in black." class="w-full h-full object-center object-cover lg:w-full lg:h-full">
                    </div>
                    <div class="mt-4 flex justify-between">
                        <div>
                            <h3 class="text-sm text-gray-700">
                                <a href="{{ route('product.show', $data->id) }}">
                                    <span aria-hidden="true" class="absolute inset-0"></span>
                                    {{ $data->name }}
                                </a>
                            </h3>
                            <p class="mt-1 text-sm text-gray-500">{{ $data->brand }}</p>
                        </div>
                        <p class="text-sm font-medium text-gray-900">{{ rupiah($data->cost) }}</p>
                    </div>
                </div>
                @endforeach
                <!-- More products... -->
            </div>
        </div>
    </div>

</x-guest-layout>