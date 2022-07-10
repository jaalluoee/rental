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
                <div class="container mx-10 px-10 py-20">
                    <h1 class="text-3xl font-extrabold">
                        {{ $settings->name }}
                    </h1>
                    <table width="800">
                        <tr>
                            <td>Email</td>
                            <td>: {{ $settings->email }}</td>
                        </tr>
                        <tr>
                            <td>Phone</td>
                            <td>: {{ $settings->phone }}</td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td>: {{ $settings->address }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </main>
    </body>
    </html>
</x-guest-layout>