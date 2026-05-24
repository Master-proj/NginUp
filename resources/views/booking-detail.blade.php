@extends('layouts.app', ['activeTab' => 'bookings'])

@section('title', 'Booking Detail - NginUp')

@section('content')

    {{-- Top navigation with back button --}}
    <div class="sticky top-0 bg-white/80 backdrop-blur-md z-40 border-b border-gray-100 px-4 py-4 flex items-center justify-between md:hidden">
        <a href="/bookings" class="w-8 h-8 flex items-center justify-center rounded-full hover:bg-gray-100 transition-colors">
            <i class="fa-solid fa-arrow-left text-gray-700"></i>
        </a>
        <span class="font-bold text-gray-900 text-lg">Booking Detail</span>
        <div class="w-8"></div>
    </div>

    <div class="md:px-12 md:py-8 max-w-3xl mx-auto w-full pb-24 md:pb-6 bg-[#F8F9FA] md:bg-transparent min-h-screen">
        
        <div class="bg-white md:rounded-[32px] md:shadow-sm md:border md:border-gray-100 overflow-hidden pb-8">
            
            {{-- Image Header --}}
            <div class="relative h-64 md:h-80 w-full">
                <img src="https://images.unsplash.com/photo-1540541338287-41700207dee6?q=80&w=1200&auto=format&fit=crop" class="w-full h-full object-cover">
                <div class="absolute top-4 left-4 bg-brand-orange text-white text-[10px] font-bold px-3 py-1.5 rounded-full tracking-wider shadow-md">
                    <i class="fa-solid fa-circle-check mr-1"></i>
                    Status Konfirmasi
                </div>
            </div>

            <div class="px-5 md:px-8 pt-6">
                
                {{-- Title Area --}}
                <div class="mb-6 border-b border-gray-100 pb-6">
                    <span class="text-[10px] text-gray-400 font-bold tracking-widest uppercase mb-1 block">Resort & Villa • Detail Reservasi</span>
                    <h1 class="text-2xl font-extrabold text-gray-900 mb-2">Villa Ubud Terrace Heritage</h1>
                    <p class="text-sm text-gray-500 flex items-center gap-1.5">
                        <i class="fa-solid fa-location-dot text-gray-400"></i>
                        Jl. Raya Sanggingan, Kedewatan, Ubud, Bali 80571
                    </p>
                </div>

                {{-- Date Cards --}}
                <div class="flex gap-4 mb-8">
                    <div class="flex-1 bg-blue-50/50 border border-blue-100 rounded-2xl p-4 flex flex-col justify-center">
                        <div class="flex items-center gap-2 mb-2">
                            <div class="w-8 h-8 rounded-full bg-blue-100 flex items-center justify-center text-blue-600">
                                <i class="fa-regular fa-calendar-check"></i>
                            </div>
                            <span class="text-xs font-bold text-gray-500 uppercase tracking-wider">Check In</span>
                        </div>
                        <span class="text-sm font-bold text-gray-900 block">13 Dec 2023</span>
                        <span class="text-xs text-gray-500 mt-0.5 block">Dari pukul 14:00</span>
                    </div>

                    <div class="flex-1 bg-orange-50/50 border border-orange-100 rounded-2xl p-4 flex flex-col justify-center">
                        <div class="flex items-center gap-2 mb-2">
                            <div class="w-8 h-8 rounded-full bg-orange-100 flex items-center justify-center text-brand-orange">
                                <i class="fa-regular fa-calendar-xmark"></i>
                            </div>
                            <span class="text-xs font-bold text-gray-500 uppercase tracking-wider">Check Out</span>
                        </div>
                        <span class="text-sm font-bold text-gray-900 block">16 Dec 2023</span>
                        <span class="text-xs text-gray-500 mt-0.5 block">Sebelum pukul 12:00</span>
                    </div>
                </div>

                {{-- Rincian Tamu --}}
                <div class="mb-8">
                    <h3 class="text-lg font-bold text-gray-900 mb-4">Rincian Tamu</h3>
                    <div class="flex flex-col gap-3">
                        <div class="flex justify-between items-center py-2 border-b border-gray-50">
                            <span class="text-sm text-gray-500">Tamu Utama</span>
                            <span class="text-sm font-bold text-gray-900">Alex Traveler</span>
                        </div>
                        <div class="flex justify-between items-center py-2 border-b border-gray-50">
                            <span class="text-sm text-gray-500">Jumlah Tamu</span>
                            <span class="text-sm font-bold text-gray-900">2 Dewasa, 1 Anak</span>
                        </div>
                        <div class="flex justify-between items-center py-2">
                            <span class="text-sm text-gray-500">Spesial req.</span>
                            <span class="text-sm font-bold text-gray-900 text-right">Honeymoon Setup with Private Pool</span>
                        </div>
                    </div>
                </div>

                {{-- Instruksi Check-in --}}
                <div class="mb-8">
                    <h3 class="text-lg font-bold text-gray-900 mb-4 flex items-center gap-2">
                        <i class="fa-solid fa-diamond-turn-right text-brand-orange text-sm"></i>
                        Instruksi Check-in
                    </h3>
                    <ol class="list-decimal pl-5 text-sm text-gray-600 flex flex-col gap-2.5 marker:text-gray-400 marker:font-bold">
                        <li>Lakukan verifikasi identitas (KTP/Paspor) melalui app.</li>
                        <li>Ambil kunci fisik di resepsionis pada saat kedatangan.</li>
                        <li>Semua fasilitas resort (SPA, Restoran) bisa diakses menggunakan kartu kamar.</li>
                    </ol>
                </div>

                {{-- QR Code / Booking ID area --}}
                <div class="bg-gray-50 border border-gray-100 rounded-3xl p-6 flex flex-col items-center justify-center text-center mb-8 shadow-sm">
                    <span class="text-[10px] text-gray-400 font-bold tracking-widest uppercase mb-1">Booking ID</span>
                    <h2 class="text-2xl font-black text-gray-900 tracking-wider mb-4">NGN-88291-UBD</h2>
                    
                    <div class="w-32 h-32 bg-white rounded-xl flex items-center justify-center mb-5 shadow-sm border border-gray-100 p-2">
                        {{-- Mock QR code --}}
                        <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=NGN-88291-UBD" alt="QR Code" class="w-full h-full object-contain mix-blend-multiply opacity-80">
                    </div>
                    
                    <p class="text-[10px] text-gray-500 mb-4 px-4 leading-relaxed">
                        Tunjukkan QR Code ini kepada resepsionis di properti saat proses check-in.
                    </p>
                    
                    <button class="w-full bg-brand-orange hover:bg-brand-orange-hover active:scale-95 text-white py-3.5 rounded-xl font-bold transition-all shadow-md shadow-brand-orange/20">
                        Cetak E-Voucher
                    </button>
                </div>

                {{-- Kontak Host --}}
                <div class="mb-8 border-t border-gray-100 pt-8">
                    <span class="text-[10px] text-gray-400 font-bold tracking-widest uppercase mb-4 block">Kontak Host</span>
                    <div class="flex items-center gap-4 mb-4">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" class="w-12 h-12 rounded-full object-cover">
                        <div>
                            <h4 class="font-bold text-gray-900 text-sm">Wayan Sukarmo</h4>
                            <p class="text-xs text-gray-500">"Selamat datang di Bali!"</p>
                        </div>
                    </div>
                    <div class="flex gap-3">
                        <button class="flex-1 border border-gray-200 py-2.5 rounded-xl text-sm font-semibold text-gray-700 hover:bg-gray-50 flex items-center justify-center gap-2 transition-colors">
                            <i class="fa-regular fa-message"></i> Chat
                        </button>
                        <button class="flex-1 border border-gray-200 py-2.5 rounded-xl text-sm font-semibold text-gray-700 hover:bg-gray-50 flex items-center justify-center gap-2 transition-colors">
                            <i class="fa-solid fa-phone"></i> Telepon
                        </button>
                    </div>
                </div>

                {{-- Lokasi Properti --}}
                <div class="border-t border-gray-100 pt-8">
                    <span class="text-[10px] text-gray-400 font-bold tracking-widest uppercase mb-4 block">Lokasi Properti</span>
                    <div class="w-full h-40 bg-gray-200 rounded-2xl mb-4 overflow-hidden relative border border-gray-100">
                        <img src="https://images.unsplash.com/photo-1524661135-423995f22d0b?q=80&w=800&auto=format&fit=crop" class="w-full h-full object-cover grayscale opacity-80" alt="Map">
                        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-brand-orange text-3xl drop-shadow-md">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                    </div>
                    <p class="text-xs text-gray-600 mb-4 leading-relaxed">
                        Jl. Raya Sanggingan, Kedewatan, Ubud, Kabupaten Gianyar, Bali 80571
                    </p>
                    <button class="w-full bg-[#1c333a] hover:bg-black active:scale-95 text-white py-3.5 rounded-xl font-bold transition-all flex justify-center items-center gap-2">
                        <i class="fa-regular fa-map"></i> Buka Map
                    </button>
                </div>

            </div>
        </div>

    </div>

@endsection
