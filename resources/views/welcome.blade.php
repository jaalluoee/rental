<x-guest-layout>
@php
function rupiah($angka){

$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
return $hasil_rupiah;

}
@endphp
    <main>
        <div class="bg-opacity-20 hero min-h-screen bg-base-200 relative">
            <div style="background-image: url('https://api.lorem.space/image/car?w=600&h=400')" class="absolute inset-0 bg-no-repeat bg-cover opacity-20"></div>
            <div class="hero-content">
                <div class="w-1/2">
                    <h1 class="text-5xl font-bold">Rental Mobil Murah di Surabaya</h1>
                    <p class="py-6 text-justify">{{ $settings->description }}</p>
                    <a href="{{ route('product.index') }}" class="btn btn-primary">Lihat Kendaraan</a>
                </div>
                <div class="w-1/2">

                </div>
            </div>
        </div>
        <div class="container mx-auto px-20 py-32 grid gap-5 md:grid-cols-4">
            @foreach($data as $key=>$value)
            <div class="card glass">
                <figure><img class="w-full h-52" src="{{ $value->image }}" alt="car!"></figure>
                <div class="card-body">
                    <h2 class="card-title">{{ $value->name }}</h2>
                    <p>{{ rupiah($value->cost) }}</p>
                    <p class="text-justify">{{ $value->description }}</p>
                    <div class="card-actions justify-end">
                        <a href="{{ route('product.show', $value->id) }}" class="btn btn-primary">Lihat Kendaraan</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </main>
</x-guest-layout>