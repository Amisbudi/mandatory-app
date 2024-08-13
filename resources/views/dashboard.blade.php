<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <div class="flex items-center justify-between">
                <div>{{ __('Dashboard') }}</div>
                <div class="flex gap-3">
                    <button class="bg-[#4B90FE] text-sm text-white p-2 rounded-[10px]">
                        Manage Dashboard
                    </button>
                    <x-dropdown>
                        <x-slot name="trigger">
                            <button
                                class="inline-flex items-center px-3 bg-[#cecdcd] py-3 border border-transparent text-sm leading-4 font-medium rounded-md text-[#6B869D] dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                <div>All Dashboard</div>

                                <div class="ms-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('dashboard')">
                                {{ __('Perhitungan') }}
                            </x-dropdown-link>
                        </x-slot>
                    </x-dropdown>
                    <button class="bg-[#4B90FE] text-sm text-white p-2 rounded-[10px]">
                        <div class="flex items-center gap-3">
                            <div class="pt-1"><i class="fi fi-br-plus"></i></div>
                            <div>Add Assets</div>
                        </div>
                    </button>
                </div>
            </div>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-6 gap-5">
                <div class="flex items-center">
                    <div class="bg-sky-500 h-14 w-14 -mr-5 align-top z-10 rounded-md flex items-center justify-center">
                        <img src="{{ asset('assets/img/Vector.png') }}" class="w-6" alt="" srcset="">
                    </div>
                    <div class="bg-white rounded-full dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg border ">
                        <div class="py-6 pr-6 text-center w-[280px] text-gray-900 dark:text-gray-100">
                            <div class="text-[24px] font-bold">6</div>
                            <div class="text-[20px] font-bold">My Assets</div>
                        </div>
                    </div>
                </div>
                <div class="flex items-center">
                    <div class="bg-sky-500 h-14 w-14 -mr-5 align-top z-10 rounded-md flex items-center justify-center">
                        <img src="{{ asset('assets/img/Vector.png') }}" class="w-6" alt="" srcset="">
                    </div>
                    <div class="bg-white rounded-full dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg border ">
                        <div class="py-6 pr-6 text-center w-[280px] text-gray-900 dark:text-gray-100">
                            <div class="text-[24px] font-bold">8</div>
                            <div class="text-[20px] font-bold">Total Assets</div>
                        </div>
                    </div>
                </div>
                <div class="flex items-center">
                    <div class="bg-sky-500 h-14 w-14 -mr-5 align-top z-10 rounded-md flex items-center justify-center">
                        <img src="{{ asset('assets/img/Vector.png') }}" class="w-6" alt="" srcset="">
                    </div>
                    <div class="bg-white rounded-full dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg border ">
                        <div class="py-6 pr-6 text-center w-[280px] text-gray-900 dark:text-gray-100">
                            <div class="text-[24px] font-bold">4</div>
                            <div class="text-[20px] font-bold">Total Users</div>
                        </div>
                    </div>
                </div>
                <div class="flex items-center">
                    <div class="bg-sky-500 h-14 w-14 -mr-5 align-top z-10 rounded-md flex items-center justify-center">
                        <img src="{{ asset('assets/img/Vector.png') }}" class="w-6" alt="" srcset="">
                    </div>
                    <div class="bg-white rounded-full dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg border ">
                        <div class="py-6 pr-6 text-center w-[280px] text-gray-900 dark:text-gray-100">
                            <div class="text-[24px] font-bold">22</div>
                            <div class="text-[20px] font-bold">Total Employee</div>
                        </div>
                    </div>
                </div>
                <div class="flex items-center">
                    <div class="bg-sky-500 h-14 w-14 -mr-5 align-top z-10 rounded-md flex items-center justify-center">
                        <img src="{{ asset('assets/img/Vector.png') }}" class="w-6" alt="" srcset="">
                    </div>
                    <div class="bg-white rounded-full dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg border ">
                        <div class="py-6 pr-6 text-center w-[280px] text-gray-900 dark:text-gray-100">
                            <div class="text-[24px] font-bold">9</div>
                            <div class="text-[20px] font-bold">My Ticket</div>
                        </div>
                    </div>
                </div>
                <div class="flex items-center">
                    <div class="bg-sky-500 h-14 w-14 -mr-5 align-top z-10 rounded-md flex items-center justify-center">
                        <img src="{{ asset('assets/img/Vector.png') }}" class="w-6" alt="" srcset="">
                    </div>
                    <div class="bg-white rounded-full dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg border ">
                        <div class="py-6 pr-6 text-center w-[280px] text-gray-900 dark:text-gray-100">
                            <div class="text-[24px] font-bold">9</div>
                            <div class="text-[20px] font-bold">Total Audited Assets</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-8xl mt-10 mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-4 gap-5">
                <div class="bg-white rounded-full dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg border ">
                    <div class="text-center flex items-center justify-center text-gray-900 dark:text-gray-100">
                        <div id="calendar" class="w-full"></div>
                    </div>
                </div>
                <div class="bg-white rounded-full dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg border">
                    <div
                        class="px-6 py-4 text-[20px] text-white text-center bg-[#4B90FE] text-gray-900 dark:text-gray-100">
                        Asset Category by Location
                    </div>
                    <div class="flex items-center justify-center py-14">
                        <img src="{{ asset('assets/img/dashboard.png') }}" class="w-[150px]" alt="">
                    </div>
                </div>
                <div class="bg-white rounded-full dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg border">
                    <div
                        class="px-6 py-4 text-[20px] text-white text-center bg-[#4B90FE] text-gray-900 dark:text-gray-100">
                        Asset Category by Location
                    </div>
                    <div class="flex items-center justify-center py-14">
                        <img src="{{ asset('assets/img/dashboard.png') }}" class="w-[150px]" alt="">
                    </div>
                </div>
                <div class="bg-white rounded-full dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg border">
                    <div
                        class="px-6 py-4 text-[20px] text-white text-center bg-[#4B90FE] text-gray-900 dark:text-gray-100">
                        Asset Category by Location
                    </div>
                    <div class="flex items-center justify-center pt-6 ml-32" style="width: 40%;">
                        <canvas id="myPieChart1"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-8xl mt-10 mx-auto sm:px-6 lg:px-8">

            <div class="grid grid-cols-4 gap-5">
                <div class="bg-white rounded-full dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg border">
                    <div
                        class="px-6 py-4 text-[20px] text-white text-center bg-[#4B90FE] text-gray-900 dark:text-gray-100">
                        Asset Category by Location
                    </div>
                    <div class="flex items-center justify-center py-14">
                        <img src="{{ asset('assets/img/dashboard.png') }}" class="w-[150px]" alt="">
                    </div>
                </div>
                <div class="bg-white rounded-full dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg border">
                    <div
                        class="px-6 py-4 text-[20px] text-white text-center bg-[#4B90FE] text-gray-900 dark:text-gray-100">
                        Asset Category by Location
                    </div>
                    <div class="flex items-center justify-center pt-6 ml-32" style="width: 40%;">
                        <canvas id="myPieChart2"></canvas>
                    </div>
                </div>
                <div class="bg-white rounded-full dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg border">
                    <div
                        class="px-6 py-4 text-[20px] text-white text-center bg-[#4B90FE] text-gray-900 dark:text-gray-100">
                        Asset Category by Location
                    </div>
                    <div class="flex items-center justify-center py-14">
                        <img src="{{ asset('assets/img/dashboard.png') }}" class="w-[150px]" alt="">
                    </div>
                </div>
                <div class="bg-white rounded-full dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg border">
                    <div
                        class="px-6 py-4 text-[20px] text-white text-center bg-[#4B90FE] text-gray-900 dark:text-gray-100">
                        Asset Category by Location
                    </div>
                    <div class="flex items-center justify-center py-14">
                        <img src="{{ asset('assets/img/dashboard.png') }}" class="w-[150px]" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-8xl mt-10 mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-4 gap-5">
                <div class="bg-white rounded-full dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg border">
                    <div
                        class="px-6 py-4 text-[20px] text-white text-center bg-[#4B90FE] text-gray-900 dark:text-gray-100">
                        Asset Category by Location
                    </div>
                    <div class="flex items-center justify-center pt-6 ml-32" style="width: 40%;">
                        <canvas id="myPieChart3"></canvas>
                    </div>
                </div>
                <div class="bg-white rounded-full dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg border">
                    <div
                        class="px-6 py-4 text-[20px] text-white text-center bg-[#4B90FE] text-gray-900 dark:text-gray-100">
                        Asset Category by Location
                    </div>
                    <div class="flex items-center justify-center py-14">
                        <img src="{{ asset('assets/img/dashboard.png') }}" class="w-[150px]" alt="">
                    </div>
                </div>
                <div class="bg-white rounded-full dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg border">
                    <div
                        class="px-6 py-4 text-[20px] text-white text-center bg-[#4B90FE] text-gray-900 dark:text-gray-100">
                        Asset Category by Location
                    </div>
                    <div class="flex items-center justify-center py-14">
                        <img src="{{ asset('assets/img/dashboard.png') }}" class="w-[150px]" alt="">
                    </div>
                </div>
                <div class="bg-white rounded-full dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg border">
                    <div
                        class="px-6 py-4 text-[20px] text-white text-center bg-[#4B90FE] text-gray-900 dark:text-gray-100">
                        Asset Category by Location
                    </div>
                    <div class="flex items-center justify-center pt-6 ml-32" style="width: 40%;">
                        <canvas id="myPieChart4"></canvas>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const calendar = new VanillaCalendar('#calendar', {
                // Konfigurasi tambahan jika diperlukan
            });
            calendar.init();
        });
    </script>
    <script>
        // Ambil elemen canvas dari HTML
        var ctx = document.getElementById('myPieChart1').getContext('2d');

        // Buat diagram pai menggunakan Chart.js
        var myPieChart = new Chart(ctx, {
            type: 'pie', // Tipe chart yang digunakan
            data: {
                datasets: [{
                    label: 'Jumlah',
                    data: [10, 20, 30], // Data untuk diagram pai
                    backgroundColor: [ // Warna untuk setiap bagian pai
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)'
                    ],
                    borderColor: [ // Warna border untuk setiap bagian pai
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltip: {
                        callbacks: {
                            label: function(tooltipItem) {
                                return tooltipItem.label + ': ' + tooltipItem.raw;
                            }
                        }
                    }
                }
            }
        });
    </script>
    <script>
        // Ambil elemen canvas dari HTML
        var ctx = document.getElementById('myPieChart2').getContext('2d');

        // Buat diagram pai menggunakan Chart.js
        var myPieChart = new Chart(ctx, {
            type: 'pie', // Tipe chart yang digunakan
            data: {
                datasets: [{
                    label: 'Jumlah',
                    data: [10, 20, 30], // Data untuk diagram pai
                    backgroundColor: [ // Warna untuk setiap bagian pai
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)'
                    ],
                    borderColor: [ // Warna border untuk setiap bagian pai
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltip: {
                        callbacks: {
                            label: function(tooltipItem) {
                                return tooltipItem.label + ': ' + tooltipItem.raw;
                            }
                        }
                    }
                }
            }
        });
    </script>
    <script>
        // Ambil elemen canvas dari HTML
        var ctx = document.getElementById('myPieChart3').getContext('2d');

        // Buat diagram pai menggunakan Chart.js
        var myPieChart = new Chart(ctx, {
            type: 'pie', // Tipe chart yang digunakan
            data: {
                datasets: [{
                    label: 'Jumlah',
                    data: [10, 20, 30], // Data untuk diagram pai
                    backgroundColor: [ // Warna untuk setiap bagian pai
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)'
                    ],
                    borderColor: [ // Warna border untuk setiap bagian pai
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltip: {
                        callbacks: {
                            label: function(tooltipItem) {
                                return tooltipItem.label + ': ' + tooltipItem.raw;
                            }
                        }
                    }
                }
            }
        });
    </script>
    <script>
        // Ambil elemen canvas dari HTML
        var ctx = document.getElementById('myPieChart4').getContext('2d');

        // Buat diagram pai menggunakan Chart.js
        var myPieChart = new Chart(ctx, {
            type: 'pie', // Tipe chart yang digunakan
            data: {
                datasets: [{
                    label: 'Jumlah',
                    data: [10, 20, 30], // Data untuk diagram pai
                    backgroundColor: [ // Warna untuk setiap bagian pai
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)'
                    ],
                    borderColor: [ // Warna border untuk setiap bagian pai
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltip: {
                        callbacks: {
                            label: function(tooltipItem) {
                                return tooltipItem.label + ': ' + tooltipItem.raw;
                            }
                        }
                    }
                }
            }
        });
    </script>
</x-app-layout>
