@extends('layouts.admin', ['activeTab' => 'reports'])

@section('title', 'Admin - Laporan Platform')

@section('content')

<div class="w-full space-y-6">
    
    <!-- Header Area -->
    <div class="mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Laporan Platform</h1>
        <p class="text-sm text-gray-500 mt-1">Analisis performa bisnis dan sistem real-time.</p>
    </div>

    <!-- Toggle Buttons -->
    <div class="bg-white p-1.5 rounded-full flex gap-1 inline-flex shadow-sm border border-gray-100">
        <button class="px-6 py-2 bg-[#E9631A] text-white text-sm font-semibold rounded-full shadow-sm">
            Bulanan
        </button>
        <button class="px-6 py-2 text-gray-500 hover:text-gray-700 hover:bg-gray-50 text-sm font-medium rounded-full transition-colors">
            Mingguan
        </button>
        <button class="px-6 py-2 text-gray-500 hover:text-gray-700 hover:bg-gray-50 text-sm font-medium rounded-full transition-colors">
            Harian
        </button>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

        <!-- Trend Pendapatan -->
        <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100 flex flex-col justify-between">
            <div class="flex justify-between items-center mb-6">
                <h3 class="font-bold text-gray-800 text-sm">Trend Pendapatan</h3>
                <i class="fa-solid fa-ellipsis-vertical text-gray-400"></i>
            </div>
            
            <!-- Chart Placeholder -->
            <div class="h-32 bg-[#F4F7FF] rounded-2xl flex items-end justify-center gap-3 p-4 mb-6">
                <div class="w-10 bg-[#FFC5A8] h-12 rounded-t-lg"></div>
                <div class="w-10 bg-[#E9631A] h-20 rounded-t-lg"></div>
                <div class="w-10 bg-[#FFC5A8] h-10 rounded-t-lg"></div>
                <div class="w-10 bg-[#E9631A] h-24 rounded-t-lg"></div>
                <div class="w-10 bg-[#FFC5A8] h-16 rounded-t-lg"></div>
            </div>

            <div class="grid grid-cols-3 gap-3">
                <div class="bg-[#F4F7FF] rounded-xl p-3 flex flex-col justify-center">
                    <span class="text-[10px] text-gray-500 font-medium mb-1">Total Revenue</span>
                    <span class="text-sm font-bold text-[#E9631A]">Rp 2.4B</span>
                </div>
                <div class="bg-[#F4F7FF] rounded-xl p-3 flex flex-col justify-center">
                    <span class="text-[10px] text-gray-500 font-medium mb-1">Booking</span>
                    <span class="text-sm font-bold text-[#E9631A]">12,402</span>
                </div>
                <div class="bg-[#EAF3FF] rounded-xl p-3 flex flex-col justify-center">
                    <span class="text-[10px] text-gray-500 font-medium mb-1">Growth</span>
                    <span class="text-sm font-bold text-blue-600">+12.5%</span>
                </div>
            </div>
        </div>

        <!-- Sistem Performa -->
        <div class="bg-[#242A38] rounded-3xl p-6 shadow-md border border-[#3A4150] flex flex-col">
            <div class="flex justify-between items-center mb-6">
                <h3 class="font-bold text-white text-sm">Sistem Performa</h3>
                <i class="fa-solid fa-server text-gray-400"></i>
            </div>

            <div class="space-y-5 mb-auto">
                <!-- Uptime Server -->
                <div>
                    <div class="flex justify-between text-xs mb-2">
                        <span class="text-gray-300">Uptime Server</span>
                        <span class="text-white font-medium">99.98%</span>
                    </div>
                    <div class="w-full bg-gray-700 rounded-full h-1.5">
                        <div class="bg-[#FF9B6A] h-1.5 rounded-full" style="width: 99%"></div>
                    </div>
                </div>
                
                <!-- API Latency -->
                <div>
                    <div class="flex justify-between text-xs mb-2">
                        <span class="text-gray-300">API Latency</span>
                        <span class="text-white font-medium">43ms</span>
                    </div>
                    <div class="w-full bg-gray-700 rounded-full h-1.5">
                        <div class="bg-blue-400 h-1.5 rounded-full" style="width: 30%"></div>
                    </div>
                </div>

                <!-- Storage Used -->
                <div>
                    <div class="flex justify-between text-xs mb-2">
                        <span class="text-gray-300">Storage Used</span>
                        <span class="text-white font-medium">64%</span>
                    </div>
                    <div class="w-full bg-gray-700 rounded-full h-1.5">
                        <div class="bg-white h-1.5 rounded-full" style="width: 64%"></div>
                    </div>
                </div>
            </div>

            <button class="w-full mt-6 py-3 bg-[#C05014] hover:bg-[#A64511] text-white text-sm font-semibold rounded-xl transition-colors">
                Lihat Detail Server
            </button>
        </div>

        <!-- Tren Pertumbuhan -->
        <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100">
            <div class="flex justify-between items-center mb-6">
                <h3 class="font-bold text-gray-800 text-sm">Tren Pertumbuhan</h3>
                <div class="flex gap-1">
                    <div class="w-2 h-2 rounded-full bg-[#E9631A]"></div>
                    <div class="w-2 h-2 rounded-full bg-[#E9631A]/50"></div>
                    <div class="w-2 h-2 rounded-full bg-blue-600"></div>
                </div>
            </div>

            <div class="space-y-4">
                <div class="flex items-center gap-4 p-4 rounded-2xl bg-white border border-gray-50 shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 rounded-xl bg-[#FFEDDF] text-[#E9631A] flex items-center justify-center">
                        <i class="fa-solid fa-users"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="text-xs font-bold text-gray-800">User Baru</h4>
                        <p class="text-[10px] text-gray-500">2,450 bulan ini</p>
                    </div>
                    <div class="text-xs font-bold text-[#E9631A] flex items-center gap-1">
                        +15% <i class="fa-solid fa-arrow-trend-up"></i>
                    </div>
                </div>

                <div class="flex items-center gap-4 p-4 rounded-2xl bg-white border border-gray-50 shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 rounded-xl bg-cyan-50 text-cyan-600 flex items-center justify-center">
                        <i class="fa-solid fa-shop"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="text-xs font-bold text-gray-800">Host Baru</h4>
                        <p class="text-[10px] text-gray-500">128 host baru terdaftar</p>
                    </div>
                    <div class="text-xs font-bold text-cyan-600 flex items-center gap-1">
                        +5% <i class="fa-solid fa-arrow-trend-up"></i>
                    </div>
                </div>

                <div class="flex items-center gap-4 p-4 rounded-2xl bg-white border border-gray-50 shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center">
                        <i class="fa-solid fa-building"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="text-xs font-bold text-gray-800">Properti</h4>
                        <p class="text-[10px] text-gray-500">542 unit aktif</p>
                    </div>
                    <div class="text-xs font-bold text-blue-600 flex items-center gap-1">
                        +12% <i class="fa-solid fa-arrow-trend-up"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Statistik Komplain -->
        <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100 flex flex-col">
            <div class="flex justify-between items-center mb-6">
                <h3 class="font-bold text-gray-800 text-sm">Statistik Komplain</h3>
                <i class="fa-solid fa-triangle-exclamation text-red-500"></i>
            </div>

            <div class="flex gap-4 h-full">
                <!-- Open Tickets Card -->
                <div class="flex-1 bg-[#FFF5F5] border border-red-100 rounded-2xl flex flex-col items-center justify-center p-6 text-center">
                    <span class="text-4xl font-bold text-red-500 mb-1">12</span>
                    <span class="text-xs font-medium text-red-500">Open<br>Tickets</span>
                </div>
                
                <!-- Right column -->
                <div class="flex-1 flex flex-col gap-4">
                    <div class="flex-1 bg-[#F4F7FF] rounded-2xl flex flex-col justify-center p-4">
                        <span class="text-[11px] text-gray-500 font-medium mb-1">Resolved</span>
                        <div class="flex items-end gap-2">
                            <span class="text-lg font-bold text-gray-800">94%</span>
                            <span class="text-xs font-bold text-blue-600 mb-0.5 flex items-center gap-0.5">
                                <i class="fa-solid fa-arrow-up text-[10px]"></i> 2.1%
                            </span>
                        </div>
                    </div>
                    
                    <div class="flex-1 bg-[#F4F7FF] rounded-2xl flex flex-col justify-center p-4">
                        <span class="text-[11px] text-gray-500 font-medium mb-1">Avg. Response</span>
                        <span class="text-lg font-bold text-gray-800">1.2h</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sebaran Reserved Regional -->
        <div class="bg-white rounded-3xl p-6 shadow-sm border border-gray-100 lg:col-span-2">
            <h3 class="font-bold text-gray-800 text-sm mb-4">Sebaran Reserved Regional</h3>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Map Area Placeholder -->
                <div class="relative h-64 bg-slate-800 rounded-2xl overflow-hidden group">
                    <div class="absolute inset-0 bg-gradient-to-br from-slate-700 to-slate-900 opacity-80"></div>
                    <!-- Simulate map dots -->
                    <div class="absolute inset-0 flex items-center justify-center opacity-40 group-hover:opacity-60 transition-opacity">
                        <i class="fa-solid fa-map text-white text-6xl"></i>
                    </div>
                    <div class="absolute bottom-1/3 left-1/2 w-4 h-4 bg-[#FFC5A8] rounded-full animate-ping"></div>
                    <div class="absolute bottom-1/3 left-1/2 w-4 h-4 bg-[#E9631A] rounded-full"></div>
                    
                    <div class="absolute bottom-4 left-4 bg-white/90 backdrop-blur-sm px-4 py-3 rounded-xl shadow-lg border border-white/20">
                        <span class="text-[10px] text-gray-500 block mb-0.5">Hotspot Teraktif</span>
                        <span class="text-sm font-bold text-[#E9631A]">Jakarta Selatan</span>
                    </div>
                </div>

                <!-- Top 5 Lokasi List -->
                <div class="flex flex-col justify-center">
                    <h4 class="text-xs font-medium text-gray-400 mb-5 uppercase tracking-wider">Top 5 Lokasi</h4>
                    
                    <div class="space-y-5">
                        <div>
                            <div class="flex justify-between text-xs mb-2">
                                <span class="text-gray-700 font-medium">Jakarta Selatan</span>
                                <span class="text-[#E9631A] font-bold bg-[#FFEDDF] px-2 py-0.5 rounded text-[10px]">32%</span>
                            </div>
                            <div class="w-full bg-gray-100 rounded-full h-1.5">
                                <div class="bg-[#E9631A] h-1.5 rounded-full" style="width: 32%"></div>
                            </div>
                        </div>

                        <div>
                            <div class="flex justify-between text-xs mb-2">
                                <span class="text-gray-700 font-medium">Bali - Canggu</span>
                                <span class="text-cyan-600 font-bold bg-cyan-50 px-2 py-0.5 rounded text-[10px]">28%</span>
                            </div>
                            <div class="w-full bg-gray-100 rounded-full h-1.5">
                                <div class="bg-cyan-500 h-1.5 rounded-full" style="width: 28%"></div>
                            </div>
                        </div>

                        <div>
                            <div class="flex justify-between text-xs mb-2">
                                <span class="text-gray-700 font-medium">Bandung Kota</span>
                                <span class="text-blue-600 font-bold bg-blue-50 px-2 py-0.5 rounded text-[10px]">15%</span>
                            </div>
                            <div class="w-full bg-gray-100 rounded-full h-1.5">
                                <div class="bg-blue-500 h-1.5 rounded-full" style="width: 15%"></div>
                            </div>
                        </div>

                        <div>
                            <div class="flex justify-between text-xs mb-2">
                                <span class="text-gray-700 font-medium">Yogyakarta</span>
                                <span class="text-purple-600 font-bold bg-purple-50 px-2 py-0.5 rounded text-[10px]">12%</span>
                            </div>
                            <div class="w-full bg-gray-100 rounded-full h-1.5">
                                <div class="bg-[#A84A1A] h-1.5 rounded-full" style="width: 12%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
