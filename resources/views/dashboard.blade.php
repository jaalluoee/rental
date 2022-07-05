@php

use App\Models\Order;
use App\Models\Warehouse;
use App\Models\User;

@endphp

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    SELAMAT DATANG DI SUBDRIVEWEB
                </div>
                <div class="stats shadow w-full">

                    <div class="stat place-items-center">
                        <div class="stat-title">Penyewa</div>
                        <div class="stat-value">{{ Order::count() }}</div>
                        <!-- <div class="stat-desc">Januari sampai dengan Februari</div> -->
                    </div>
                    <div class="stat place-items-center">
                        <div class="stat-title">Kendaraan</div>
                        <div class="stat-value text-secondary">{{ Warehouse::count() }}</div>
                        <!-- <div class="stat-desc text-secondary">↗︎ 40 (2%)</div> -->
                    </div>

                    <div class="stat place-items-center">
                        <div class="stat-title">Pengguna</div>
                        <div class="stat-value">{{ User::count() }}</div>
                        <!-- <div class="stat-desc">↘︎ 90 (14%)</div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-slot:script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js" integrity="sha512-sW/w8s4RWTdFFSduOTGtk4isV1+190E/GghVffMA9XczdJ2MDzSzLEubKAs5h0wzgSJOQTRYyaz73L3d6RtJSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script>
            const ctx = document.getElementById('myChart').getContext('2d');
            const myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                    datasets: [{
                        label: '# of Votes',
                        data: [12, 19, 3, 5, 2, 3],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>
        </x-slot>
</x-app-layout>