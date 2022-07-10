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
            <div class="bg-opacity-20 hero min-h-screen bg-base-200 relative">
                <div style="background-image: url('https://api.lorem.space/image/car?w=600&h=400')" class="absolute inset-0 bg-no-repeat bg-cover opacity-20"></div>
                <div class="hero-content space-x-5">
                        <div class="w-1/2">
                            <img class="w-20" src="" alt="">
                            <h1 class="text-5xl font-bold mb-5">Subdriveweb</h1>
                            <h2 class="text-justify">Subdrive Web merupakan jasa layanan penyewaan kendaraan yang bekerja sama dengan rental-rental mobil dan motor di Surabaya untuk menawarkan jasa rental mobil kepada calon pelanggan khususnya bagi para turis asing maupun dalam negeri yang hendak berwisata di kota Surabaya. Subdrive Web mempertemukan partner-partner penyedia jasa rental mobil/ motor online yang ingin memasarkan mobil dan calon penyewa mobil yang ingin mendapatkan mobil/ motor sesuai pilihan.</h2>
                            <b>Keunggulan Subdriveweb</b>
                            <h2 class="text-justify">Layanan mudah diakses, fleksibel, mampu menampilkan harga yang beragam, dan meliputi banyak varian kendaraan. Dibandingkan dengan layanan serupa, Subdriveweb benar-benar mendata setiap kendaraan secara detail. Subdriveweb menyediakan informasi lengkap mulai dari kondisi umum kendaraan, list yang tersedia saat ini dsb. Dengan menggunakan layanan jasa Subrdrivyang perjalanan liburan anda menjadi berkesan dan menyenangkan. </h2>
                        </div>
                    <div class="w-1/2 pt-5">
                        <b>Visi :</b>
                        <h2 class="text-justify">Menjadikan layanan penyewaan transportasi yang berfokus pada peningkatan pelayanan pariwisata di Kota Surabaya, yang aman, mudah dan terpercaya</h2>
                        <b>Misi :</b>
                        <ol class="list-decimal">
                            <li class="text-justify">
                                Membuat perjalanan menjadi nyaman serta menghadirkan kepuasan pelanggan
                            </li>
                            <li class="text-justify">
                                Berkomitmen meningkatkan tingkat layanan pariwisata di Surabaya dalam bidang transportasi
                            </li>
                            <li class="text-justify">
                                Menarik minat turis dalam negeri maupun manca negara dalam hal pelayanan liburan di daerah Surabaya agar dapat memudahkan perjalanan
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </main>

    </body>

    </html>
</x-guest-layout>