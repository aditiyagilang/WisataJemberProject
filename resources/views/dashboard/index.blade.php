<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage='dashboard'></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Dashboard"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <div class="text-center pt-3">
                                <div class="row mt-3">
                                    <div class="col-1">
                                        <div class="profile-img" style="width: 30px; height: 30px; display: flex; justify-content: center; margin: 0 auto;">
                                            <img src="{{ asset('assets/img/icons/flags/icon_coin.png') }}" alt="profile-img" />
                                        </div>
                                    </div>
                                    <div class="col-10">
                                        <h4 class="text-center">Rp. 1.000.000</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr style="border-top: 2px solid #255734;">
                        <div class="card-footer p-1" style="display: flex; align-items: center; justify-content: center;">
                            <p class="mb-3">Pendapatan Hari Ini</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <div class="text-center pt-3">
                                <div class="row mt-3">
                                    <div class="col-5 d-flex justify-content-center align-items-center">
                                        <div class="profile-img" style="width: 30px; height: 30px;">
                                            <img src="{{ asset('assets/img/icons/flags/icon_cart.png') }}" alt="profile-img" />
                                        </div>
                                    </div>
                                    <div class="col-5 d-flex justify-content-center align-items-center">
                                        <h4 class="text-center">8</h4>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <hr style="border-top: 2px solid #255734;">
                        <div class="card-footer p-1" style="display: flex; align-items: center; justify-content: center;">
                            <p class="mb-3">Total Pesanan Hari Ini</p>
                        </div>
                    </div>
                </div>



                <div class="col-xl-4 col-sm-8 ">
                    <div class="row mt-3">
                        <div class="card">
                            <div class="card-header m-0 p-0">
                                <div class="text-center ">
                                    <div class="row mt-3">
                                        <div class="col-6">
                                            <p class="text-center fs-5">Jumlah Customer :</p>
                                        </div>
                                        <div class="col-4">
                                            <p class="text-center fs-5">{{$userUserCounts}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="card">
                            <div class="card-header m-0 p-0">
                                <div class="text-center ">
                                    <div class="row mt-3">
                                        <div class="col-6">
                                            <p class="text-center fs-5">Jumlah Admin : </p>
                                        </div>
                                        <div class="col-4">
                                            <p class="text-center fs-5">{{$adminUserCounts}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-12 mt-4 mb-3">
                    <div class="card z-index-2 ">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                            <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1">
                                <div class="chart">
                                    <canvas id="chart-line-tasks" class="chart-canvas" height="500"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h6 class="mb-0 ">Grafik Penjualan</h6>
                            <p class="text-sm ">Hasil Penjualan Tahunan</p>
                            <hr class="dark horizontal">
                            <div class="d-flex ">
                                <i class="material-icons text-sm my-auto me-1">schedule</i>
                                <p class="mb-0 text-sm">Terbaru</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <x-footers.auth></x-footers.auth>
        </div>
    </main>
    <x-plugins></x-plugins>
    </div>
    @push('js')
    <script src="{{ asset('assets') }}/js/plugins/chartjs.min.js"></script>
    <script>
        var ctx3 = document.getElementById("chart-line-tasks").getContext("2d");

        new Chart(ctx3, {
            type: "line",
            data: {
                labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Mobile apps",
                    tension: 0,
                    borderWidth: 0,
                    pointRadius: 5,
                    pointBackgroundColor: "rgba(255, 255, 255, .8)",
                    pointBorderColor: "transparent",
                    borderColor: "rgba(255, 255, 255, .8)",
                    borderWidth: 4,
                    backgroundColor: "transparent",
                    fill: true,
                    data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                    maxBarThickness: 6

                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5],
                            color: 'rgba(255, 255, 255, .2)'
                        },
                        ticks: {
                            display: true,
                            padding: 10,
                            color: '#f8f9fa',
                            font: {
                                size: 14,
                                weight: 300,
                                family: "Roboto",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            color: '#f8f9fa',
                            padding: 10,
                            font: {
                                size: 14,
                                weight: 300,
                                family: "Roboto",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                },
            },
        });
    </script>
    @endpush
</x-layout>
