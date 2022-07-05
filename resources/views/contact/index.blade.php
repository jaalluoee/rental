<x-guest-layout>
    @php
    function rupiah($angka){

    $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
    return $hasil_rupiah;

    }
    @endphp

    <html lang="en">

    <body>
        <main>
            <div>
                <iframe src="{{ $settings->maps }}" class="h-72 w-full" frameborder="0"></iframe>
                <div class="container mx-auto px-10 py-20">
                    <h1 class="text-3xl font-extrabold">
                        {{ $settings->name }}
                    </h1>
                    <h2>
                        {{ $settings->email }}
                    </h2>
                    <h2>
                        {{ $settings->phone }}
                    </h2>
                    <h2>
                        {{ $settings->address }}
                    </h2>
                </div>
            </div>
        </main>
    </body>
    </html>
</x-guest-layout>