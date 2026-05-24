<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    @vite('resources/css/app.css')
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <title>Detail Penginapan - NginUp</title>
</head>
<body class="bg-white text-gray-800">

    {{-- Navbar --}}
    <nav class="flex justify-between items-center px-4 md:px-12 py-4 bg-white border-b sticky top-0 z-50">
        <a href="/home" class="flex items-center gap-2 text-gray-600 hover:text-brand-orange-hover transition-colors">
            <i class="fa-solid fa-arrow-left text-xl"></i>
        </a>
        <a href="/home" class="flex items-center gap-2 text-2xl font-bold text-brand-orange-hover">
            NginUp
        </a>
        <div class="flex items-center gap-4 text-gray-600">
            <button class="hover:text-brand-orange-hover transition-colors"><i class="fa-solid fa-share-nodes text-xl"></i></button>
            <button class="hover:text-red-500 transition-colors"><i class="fa-regular fa-heart text-xl"></i></button>
        </div>
    </nav>

    <main class="max-w-7xl mx-auto px-4 md:px-12 py-6">

        {{-- Main Image (Desktop & Mobile) --}}
        <div class="w-full h-[300px] md:h-[500px] rounded-2xl overflow-hidden mb-8">
            <img src="https://images.unsplash.com/photo-1540541338287-41700207dee6?q=80&w=1200&auto=format&fit=crop" alt="Villa Ubud Terrace Heritage" class="w-full h-full object-cover">
        </div>

        {{-- Header Info --}}
        <div class="flex flex-col md:flex-row gap-8">
            
            {{-- Left Content --}}
            <div class="flex-1">
                
                {{-- Tags --}}
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="bg-blue-50 text-blue-600 px-3 py-1 rounded-full text-sm font-medium flex items-center gap-1">
                        <i class="fa-solid fa-house-user"></i> Villa Keluarga
                    </span>
                    <span class="bg-blue-50 text-blue-600 px-3 py-1 rounded-full text-sm font-medium flex items-center gap-1">
                        <i class="fa-solid fa-spa"></i> Suasana Zen
                    </span>
                </div>

                {{-- Title & Location --}}
                <h1 class="text-3xl md:text-4xl font-bold mb-2">Villa Ubud Terrace Heritage</h1>
                <p class="text-gray-500 flex items-center gap-2 mb-8">
                    <i class="fa-solid fa-location-dot text-gray-400"></i> Ubud, Bali, Indonesia
                </p>

                {{-- Host Info --}}
                <div class="bg-blue-50/50 p-4 md:p-6 rounded-2xl flex items-center justify-between mb-8 border border-blue-100">
                    <div class="flex items-center gap-4">
                        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=100&auto=format&fit=crop" alt="Host Nyoman" class="w-14 h-14 rounded-full object-cover">
                        <div>
                            <p class="text-gray-500 text-sm">Dikelola oleh</p>
                            <h3 class="font-bold text-lg">Nyoman</h3>
                            <p class="text-gray-500 text-sm">Host sejak 2019 • Responsif 1 jam</p>
                        </div>
                    </div>
                    <button class="border border-gray-300 text-gray-700 bg-white px-4 py-2 rounded-xl font-medium hover:bg-gray-50 transition-colors">
                        Hubungi Host
                    </button>
                </div>

                {{-- Tentang Properti --}}
                <div class="mb-8">
                    <h2 class="text-2xl font-bold mb-4">Tentang Properti</h2>
                    <p class="text-gray-600 leading-relaxed mb-2">
                        Nikmati pengalaman menginap yang tak terlupakan di jantung Ubud. Villa ini menggabungkan arsitektur tradisional Bali yang autentik dengan kenyamanan fasilitas modern bintang lima. Dengan pemandangan terasering sawah yang memukau langsung dari kamar tidur utama, properti ini menawarkan ketenangan total bagi Anda yang mencari pelarian dari hiruk pikuk kota.
                    </p>
                    <button class="text-brand-orange-hover font-medium hover:underline flex items-center gap-1">
                        Baca selengkapnya <i class="fa-solid fa-chevron-right text-sm"></i>
                    </button>
                </div>

                {{-- Fasilitas Utama --}}
                <div class="mb-12">
                    <h2 class="text-2xl font-bold mb-4">Fasilitas Utama</h2>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                        
                        <div class="border rounded-xl p-4 flex flex-col items-center justify-center gap-2 text-center">
                            <i class="fa-solid fa-water-ladder text-2xl text-brand-orange-hover"></i>
                            <span class="font-medium text-gray-700 text-sm">Kolam Pribadi</span>
                        </div>
                        
                        <div class="border rounded-xl p-4 flex flex-col items-center justify-center gap-2 text-center">
                            <i class="fa-solid fa-wifi text-2xl text-brand-orange-hover"></i>
                            <span class="font-medium text-gray-700 text-sm">Wifi Kencang</span>
                        </div>
                        
                        <div class="border rounded-xl p-4 flex flex-col items-center justify-center gap-2 text-center">
                            <i class="fa-solid fa-kitchen-set text-2xl text-brand-orange-hover"></i>
                            <span class="font-medium text-gray-700 text-sm">Dapur Lengkap</span>
                        </div>
                        
                        <div class="border rounded-xl p-4 flex flex-col items-center justify-center gap-2 text-center">
                            <i class="fa-regular fa-snowflake text-2xl text-brand-orange-hover"></i>
                            <span class="font-medium text-gray-700 text-sm">Pendingin Ruangan</span>
                        </div>
                        
                        <div class="border rounded-xl p-4 flex flex-col items-center justify-center gap-2 text-center">
                            <i class="fa-solid fa-square-parking text-2xl text-brand-orange-hover"></i>
                            <span class="font-medium text-gray-700 text-sm">Parkir Gratis</span>
                        </div>
                        
                        <div class="border rounded-xl p-4 flex flex-col items-center justify-center gap-2 text-center">
                            <i class="fa-solid fa-bell-concierge text-2xl text-brand-orange-hover"></i>
                            <span class="font-medium text-gray-700 text-sm">Layanan Concierge</span>
                        </div>

                    </div>
                </div>

            </div>

            {{-- Right Content (Booking Card) --}}
            <div class="w-full md:w-[400px]">
                <div class="bg-white border rounded-2xl shadow-xl p-6 sticky top-24">
                    
                    <div class="flex justify-between items-end mb-6">
                        <div>
                            <span class="text-2xl font-bold">Rp 2.450.000</span>
                            <span class="text-gray-500 text-sm">/ malam</span>
                        </div>
                        <div class="flex items-center gap-1 font-medium">
                            <i class="fa-solid fa-star text-brand-orange text-sm"></i> 4.92
                        </div>
                    </div>

                    {{-- Booking Inputs --}}
                    <div class="border rounded-xl mb-6 overflow-hidden">
                        <div class="flex border-b">
                            <div class="flex-1 p-3 border-r cursor-pointer hover:bg-gray-50">
                                <p class="text-[10px] font-bold text-gray-500 uppercase tracking-wider mb-1">Check-In</p>
                                <p class="text-sm font-medium">12 Jun 2024</p>
                            </div>
                            <div class="flex-1 p-3 cursor-pointer hover:bg-gray-50">
                                <p class="text-[10px] font-bold text-gray-500 uppercase tracking-wider mb-1">Check-Out</p>
                                <p class="text-sm font-medium">15 Jun 2024</p>
                            </div>
                        </div>
                        <div class="p-3 cursor-pointer hover:bg-gray-50">
                            <p class="text-[10px] font-bold text-gray-500 uppercase tracking-wider mb-1">Tamu</p>
                            <p class="text-sm font-medium">2 Tamu Dewasa</p>
                        </div>
                    </div>

                    {{-- Price Breakdown --}}
                    <div class="flex flex-col gap-3 mb-6 border-b pb-6">
                        <div class="flex justify-between text-gray-600">
                            <span>Rp 2.450.000 x 3 malam</span>
                            <span>Rp 7.350.000</span>
                        </div>
                        <div class="flex justify-between text-gray-600">
                            <span class="underline decoration-dashed underline-offset-4 cursor-pointer">Biaya Layanan</span>
                            <span>Rp 150.000</span>
                        </div>
                        <div class="flex justify-between text-gray-600">
                            <span class="underline decoration-dashed underline-offset-4 cursor-pointer">Biaya Kebersihan</span>
                            <span>Rp 250.000</span>
                        </div>
                    </div>

                    {{-- Total --}}
                    <div class="flex justify-between font-bold text-lg mb-6">
                        <span>Total</span>
                        <span>Rp 7.750.000</span>
                    </div>

                    <a href="/checkout" class="w-full bg-brand-orange-hover hover:bg-[#a6410a] text-white font-bold py-4 rounded-xl transition-colors mb-4 block text-center">
                        Pesan Sekarang
                    </a>

                    <p class="text-center text-sm text-gray-500">Anda belum akan dikenakan biaya</p>

                </div>
            </div>

        </div>

    </main>

</body>
</html>
