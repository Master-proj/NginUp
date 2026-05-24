@extends('layouts.app', ['activeTab' => 'home'])

@section('title', 'Home - NginUp')

@section('content')

    {{-- Hero --}}
    <section class="relative min-h-[600px] md:min-h-[550px] bg-black flex flex-col items-center justify-center pt-16 pb-20 md:pt-20 md:pb-24 px-4 overflow-hidden">

        <img
            src="{{ asset('hero.jpg') }}"
            class="absolute inset-0 w-full h-full object-cover opacity-60"
        >

        <div class="absolute inset-0 bg-black/40"></div>

        {{-- Content Wrapper --}}
        <div class="relative z-10 w-full max-w-md flex flex-col items-center gap-6 text-center">
            <h1 class="text-white text-3xl md:text-5xl font-bold leading-snug">
                Temukan Petualangan Berikutnya
            </h1>
            {{-- Search Box --}}
            <div class="w-full">
                <div class="bg-white rounded-[28px] shadow-[0_10px_40px_rgba(0,0,0,0.08)] border border-gray-100 p-5 flex flex-col gap-4">

                    {{-- Destinasi --}}
                    <a href="/search" class="flex items-center gap-4 px-4 py-3.5 bg-white border border-[#F3E3DB] hover:border-brand-orange/40 rounded-[20px] cursor-pointer transition-all duration-300 group">
                        <div class="text-brand-green/90 group-hover:text-brand-orange transition-colors shrink-0">
                            <i class="fa-solid fa-location-dot text-2xl"></i>
                        </div>
                        <div class="flex flex-col text-left">
                            <span class="text-[10px] font-bold text-[#8C6D60] uppercase tracking-wider leading-none">Destinasi</span>
                            <span class="text-[15px] md:text-base font-semibold text-brand-green mt-1.5 leading-none">Mau menginap di mana?</span>
                        </div>
                    </a>
                    {{-- Check-In & Check-Out --}}
                    <div class="grid grid-cols-2 gap-3">          
                        {{-- Check-In --}}
                        <a href="/pilih-tanggal" class="flex items-center gap-3 px-3 py-3.5 bg-white border border-[#F3E3DB] hover:border-brand-orange/40 rounded-[20px] cursor-pointer transition-all duration-300 group">
                            <div class="text-brand-green/90 group-hover:text-brand-orange transition-colors shrink-0">
                                <i class="fa-regular fa-calendar-days text-xl"></i>
                            </div>
                            <div class="flex flex-col text-left">
                                <span class="text-[9px] md:text-[10px] font-bold text-[#8C6D60] uppercase tracking-wider leading-none">Check-In</span>
                                <span class="text-[13px] md:text-sm font-semibold text-brand-green mt-1.5 leading-none">Pilih Tanggal</span>
                            </div>
                        </a>

                        {{-- Check-Out --}}
                        <a href="/pilih-tanggal" class="flex items-center gap-3 px-3 py-3.5 bg-white border border-[#F3E3DB] hover:border-brand-orange/40 rounded-[20px] cursor-pointer transition-all duration-300 group">
                            <div class="text-brand-green/90 group-hover:text-brand-orange transition-colors shrink-0">
                                <i class="fa-regular fa-calendar-days text-xl"></i>
                            </div>
                            <div class="flex flex-col text-left">
                                <span class="text-[9px] md:text-[10px] font-bold text-[#8C6D60] uppercase tracking-wider leading-none">Check-Out</span>
                                <span class="text-[13px] md:text-sm font-semibold text-brand-green mt-1.5 leading-none">Pilih Tanggal</span>
                            </div>
                        </a>

                    </div>

                    {{-- Tamu --}}
                    <a href="/pilih-tanggal" class="flex items-center gap-4 px-4 py-3.5 bg-white border border-[#F3E3DB] hover:border-brand-orange/40 rounded-[20px] cursor-pointer transition-all duration-300 group">
                        <div class="text-brand-green/90 group-hover:text-brand-orange transition-colors shrink-0">
                            <i class="fa-solid fa-user-group text-xl"></i>
                        </div>
                        <div class="flex flex-col text-left">
                            <span class="text-[10px] font-bold text-[#8C6D60] uppercase tracking-wider leading-none">Tamu</span>
                            <span class="text-[15px] md:text-base font-semibold text-brand-green mt-1.5 leading-none">Jumlah Tamu</span>
                        </div>
                    </a>

                    {{-- Button Cari --}}
                    <a href="/search" class="w-full bg-brand-orange hover:bg-brand-orange-hover active:scale-[0.98] text-white py-4 rounded-[20px] font-bold flex items-center justify-center gap-2 shadow-[0_4px_14px_rgba(233,99,26,0.3)] hover:shadow-[0_6px_20px_rgba(233,99,26,0.4)] transition-all duration-300 text-center">
                        <i class="fa-solid fa-magnifying-glass text-lg"></i>
                        <span class="text-base">Cari</span>
                    </a>

                </div>

            </div>

        </div>

    </section>

    {{-- Category --}}
    <section class="px-6 md:px-12 mt-12">

        <div class="flex text-sm text-gray-700 overflow-x-auto gap-16 md:gap-24 pb-4 hide-scrollbar">

            <div class="flex flex-col items-center min-w-[70px] cursor-pointer group">
                <div class="w-14 h-14 rounded-full bg-brand-orange/10 flex items-center justify-center group-hover:bg-brand-orange/20 transition-colors">
                    <i class="fa-solid fa-building text-xl text-brand-orange"></i>
                </div>
                <p class="mt-2 font-medium">Apartemen</p>
            </div>

            <div class="flex flex-col items-center min-w-[70px] cursor-pointer group">
                <div class="w-14 h-14 rounded-full bg-gray-50 flex items-center justify-center group-hover:bg-gray-100 transition-colors">
                    <i class="fa-solid fa-city text-xl text-gray-500 group-hover:text-gray-700 transition-colors"></i>
                </div>
                <p class="mt-2 font-medium">Villa</p>
            </div>

            <div class="flex flex-col items-center min-w-[70px] cursor-pointer group">
                <div class="w-14 h-14 rounded-full bg-gray-50 flex items-center justify-center group-hover:bg-gray-100 transition-colors">
                    <i class="fa-solid fa-house text-xl text-gray-500 group-hover:text-gray-700 transition-colors"></i>
                </div>
                <p class="mt-2 font-medium">Kabin</p>
            </div>

            <div class="flex flex-col items-center min-w-[70px] cursor-pointer group">
                <div class="w-14 h-14 rounded-full bg-gray-50 flex items-center justify-center group-hover:bg-gray-100 transition-colors">
                    <i class="fa-solid fa-umbrella-beach text-xl text-gray-500 group-hover:text-gray-700 transition-colors"></i>
                </div>
                <p class="mt-2 font-medium">Resort</p>
            </div>

        </div>

    </section>

    {{-- Properti Pilihan --}}
    <section class="px-6 md:px-12 mt-12 pb-12">

        <div class="flex justify-between items-end mb-6">
            <div>
                <h2 class="text-2xl md:text-3xl font-bold text-gray-800">
                    Properti Pilihan
                </h2>
                <p class="text-sm md:text-base text-gray-500 mt-2">
                    Akomodasi eksklusif dengan standar kenyamanan tinggi.
                </p>
            </div>
            <button class="text-brand-orange font-medium hover:underline">
                Lihat Semua
            </button>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            
            {{-- Card 1 --}}
            <div class="bg-white border border-gray-200 rounded-[24px] overflow-hidden shadow-sm hover:shadow-md transition-shadow relative flex flex-col">
                {{-- Image Container --}}
                <a href="/detail" class="h-56 w-full relative block">
                    <img src="https://images.unsplash.com/photo-1494526585095-c41746248156?q=80&w=1200&auto=format&fit=crop" class="w-full h-full object-cover">
                    
                    {{-- Verified Host Badge --}}
                    <div class="absolute top-4 left-4 bg-white px-3 py-1 rounded-full flex items-center gap-1 shadow-sm">
                        <i class="fa-solid fa-circle-check text-brand-orange-hover text-xs"></i>
                        <span class="text-[10px] font-bold text-gray-800">VERIFIED HOST</span>
                    </div>

                    {{-- Heart Icon --}}
                    <button onclick="event.preventDefault(); event.stopPropagation();" class="absolute top-4 right-4 w-8 h-8 bg-black/30 backdrop-blur-sm rounded-full flex items-center justify-center text-white hover:bg-black/50 transition-colors">
                        <i class="fa-regular fa-heart"></i>
                    </button>
                </a>

                {{-- Content --}}
                <div class="p-5 flex flex-col flex-1">
                    
                    {{-- Title & Rating --}}
                    <div class="flex justify-between items-start mb-1">
                        <h3 class="text-xl font-bold text-gray-900">Skyline Loft Suite</h3>
                        <div class="flex items-center gap-1 bg-brand-green/10 px-2 py-1 rounded-md text-sm font-medium text-[#1c333a]">
                            <i class="fa-solid fa-star text-brand-green text-[10px]"></i> 4.92
                        </div>
                    </div>

                    {{-- Location --}}
                    <p class="text-sm text-gray-500 mb-4">Jakarta Pusat, Indonesia</p>

                    {{-- Amenities --}}
                    <div class="flex items-center gap-4 text-sm text-gray-600 mb-4">
                        <div class="flex items-center gap-1"><i class="fa-solid fa-bed"></i> 1 Bed</div>
                        <div class="flex items-center gap-1"><i class="fa-solid fa-wifi"></i> Free WiFi</div>
                        <div class="flex items-center gap-1"><i class="fa-solid fa-city"></i> City View</div>
                    </div>

                    <div class="mt-auto"></div>
                    <hr class="border-gray-200 mb-4">

                    {{-- Footer: Price & Button --}}
                    <div class="flex justify-between items-center">
                        <div>
                            <span class="text-xl font-bold text-brand-orange-hover">Rp 1.250.000</span>
                            <span class="text-sm text-gray-500"> / malam</span>
                        </div>
                        <a href="/detail" class="bg-brand-orange hover:bg-brand-orange-hover text-white px-5 py-2 rounded-xl font-bold transition-colors inline-block text-center">
                            Book Now
                        </a>
                    </div>
                </div>
            </div>

            {{-- Card 2 --}}
            <div class="bg-white border border-gray-200 rounded-[24px] overflow-hidden shadow-sm hover:shadow-md transition-shadow relative flex flex-col">
                {{-- Image Container --}}
                <a href="/detail" class="h-56 w-full relative block">
                    <img src="https://images.unsplash.com/photo-1573843981267-be1999ff37cd?q=80&w=1200&auto=format&fit=crop" class="w-full h-full object-cover">
                    
                    {{-- Verified Host Badge --}}
                    <div class="absolute top-4 left-4 bg-white px-3 py-1 rounded-full flex items-center gap-1 shadow-sm">
                        <i class="fa-solid fa-circle-check text-brand-orange-hover text-xs"></i>
                        <span class="text-[10px] font-bold text-gray-800">VERIFIED HOST</span>
                    </div>

                    {{-- Heart Icon --}}
                    <button onclick="event.preventDefault(); event.stopPropagation();" class="absolute top-4 right-4 w-8 h-8 bg-black/30 backdrop-blur-sm rounded-full flex items-center justify-center text-white hover:bg-black/50 transition-colors">
                        <i class="fa-regular fa-heart"></i>
                    </button>
                </a>

                {{-- Content --}}
                <div class="p-5 flex flex-col flex-1">
                    
                    {{-- Title & Rating --}}
                    <div class="flex justify-between items-start mb-1">
                        <h3 class="text-xl font-bold text-gray-900">Coral Bay Resort</h3>
                        <div class="flex items-center gap-1 bg-brand-green/10 px-2 py-1 rounded-md text-sm font-medium text-[#1c333a]">
                            <i class="fa-solid fa-star text-brand-green text-[10px]"></i> 4.85
                        </div>
                    </div>

                    {{-- Location --}}
                    <p class="text-sm text-gray-500 mb-4">Lombok, NTB</p>

                    {{-- Amenities --}}
                    <div class="flex items-center gap-4 text-sm text-gray-600 mb-4">
                        <div class="flex items-center gap-1"><i class="fa-solid fa-bed"></i> 2 Beds</div>
                        <div class="flex items-center gap-1"><i class="fa-solid fa-water-ladder"></i> Pool</div>
                        <div class="flex items-center gap-1"><i class="fa-solid fa-umbrella-beach"></i> Beach Access</div>
                    </div>

                    <div class="mt-auto"></div>
                    <hr class="border-gray-200 mb-4">

                    {{-- Footer: Price & Button --}}
                    <div class="flex justify-between items-center">
                        <div>
                            <span class="text-xl font-bold text-brand-orange-hover">Rp 2.100.000</span>
                            <span class="text-sm text-gray-500"> / malam</span>
                        </div>
                        <a href="/detail" class="bg-brand-orange hover:bg-brand-orange-hover text-white px-5 py-2 rounded-xl font-bold transition-colors inline-block text-center">
                            Book Now
                        </a>
                    </div>
                </div>
            </div>

        </div>

    </section>

    {{-- Rekomendasi Untukmu --}}
    <section class="px-6 md:px-12 pb-24 md:pb-12">

        <div class="mb-6">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-900">
                Rekomendasi Untukmu
            </h2>
        </div>

        <div class="flex overflow-x-auto gap-4 md:gap-6 hide-scrollbar pb-4">
            
            {{-- Card 1 --}}
            <div class="flex-none w-[280px] md:w-[320px] bg-white border border-gray-200 rounded-[24px] overflow-hidden shadow-sm hover:shadow-md transition-shadow relative flex flex-col">
                <a href="/detail" class="h-48 w-full relative block">
                    <img src="https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover">
                    <div class="absolute top-4 left-4 bg-white px-3 py-1 rounded-full flex items-center gap-1 shadow-sm">
                        <i class="fa-solid fa-circle-check text-brand-orange-hover text-xs"></i>
                        <span class="text-[10px] font-bold text-gray-800">VERIFIED HOST</span>
                    </div>
                    <button onclick="event.preventDefault(); event.stopPropagation();" class="absolute top-4 right-4 w-8 h-8 bg-black/30 backdrop-blur-sm rounded-full flex items-center justify-center text-white hover:bg-black/50 transition-colors">
                        <i class="fa-regular fa-heart text-sm"></i>
                    </button>
                </a>
                <div class="p-5 flex flex-col flex-1">
                    <div class="flex justify-between items-start mb-1">
                        <h3 class="text-lg font-bold text-gray-900 truncate">Minimalist Studio</h3>
                        <div class="flex items-center gap-1 bg-brand-green/10 px-2 py-1 rounded-md text-xs font-medium text-[#1c333a] shrink-0">
                            <i class="fa-solid fa-star text-brand-green text-[10px]"></i> 4.9
                        </div>
                    </div>
                    <p class="text-sm text-gray-500 mb-4">Gading Serpong, Tangerang</p>
                    <div class="flex items-center gap-3 text-xs text-gray-600 mb-4">
                        <div class="flex items-center gap-1"><i class="fa-solid fa-bed"></i> 1 Bed</div>
                        <div class="flex items-center gap-1"><i class="fa-solid fa-wifi"></i> WiFi</div>
                    </div>
                    <div class="mt-auto"></div>
                    <hr class="border-gray-200 mb-4">
                    <div class="flex justify-between items-center">
                        <div>
                            <span class="text-lg font-bold text-brand-orange-hover">Rp 650rb</span>
                            <span class="text-xs text-gray-500"> / malam</span>
                        </div>
                        <a href="/detail" class="bg-brand-orange hover:bg-brand-orange-hover text-white px-4 py-2 rounded-xl text-sm font-bold transition-colors inline-block text-center">
                            Book Now
                        </a>
                    </div>
                </div>
            </div>

            {{-- Card 3 --}}
            <div class="flex-none w-[280px] md:w-[320px] bg-white border border-gray-200 rounded-[24px] overflow-hidden shadow-sm hover:shadow-md transition-shadow relative flex flex-col">
                <a href="/detail" class="h-48 w-full relative block">
                    <img src="https://images.unsplash.com/photo-1512918728675-ed5a9ecdebfd?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover">
                    <div class="absolute top-4 left-4 bg-white px-3 py-1 rounded-full flex items-center gap-1 shadow-sm">
                        <i class="fa-solid fa-circle-check text-brand-orange-hover text-xs"></i>
                        <span class="text-[10px] font-bold text-gray-800">VERIFIED HOST</span>
                    </div>
                    <button onclick="event.preventDefault(); event.stopPropagation();" class="absolute top-4 right-4 w-8 h-8 bg-black/30 backdrop-blur-sm rounded-full flex items-center justify-center text-white hover:bg-black/50 transition-colors">
                        <i class="fa-regular fa-heart text-sm"></i>
                    </button>
                </a>
                <div class="p-5 flex flex-col flex-1">
                    <div class="flex justify-between items-start mb-1">
                        <h3 class="text-lg font-bold text-gray-900 truncate">Urban Loft</h3>
                        <div class="flex items-center gap-1 bg-brand-green/10 px-2 py-1 rounded-md text-xs font-medium text-[#1c333a] shrink-0">
                            <i class="fa-solid fa-star text-brand-green text-[10px]"></i> 4.7
                        </div>
                    </div>
                    <p class="text-sm text-gray-500 mb-4">Bandung, Jawa Barat</p>
                    <div class="flex items-center gap-3 text-xs text-gray-600 mb-4">
                        <div class="flex items-center gap-1"><i class="fa-solid fa-bed"></i> 1 Bed</div>
                        <div class="flex items-center gap-1"><i class="fa-solid fa-city"></i> City View</div>
                    </div>
                    <div class="mt-auto"></div>
                    <hr class="border-gray-200 mb-4">
                    <div class="flex justify-between items-center">
                        <div>
                            <span class="text-lg font-bold text-brand-orange-hover">Rp 550rb</span>
                            <span class="text-xs text-gray-500"> / malam</span>
                        </div>
                        <a href="/detail" class="bg-brand-orange hover:bg-brand-orange-hover text-white px-4 py-2 rounded-xl text-sm font-bold transition-colors inline-block text-center">
                            Book Now
                        </a>
                    </div>
                </div>
            </div>
            {{-- Card 5 --}}
            <div class="flex-none w-[280px] md:w-[320px] bg-white border border-gray-200 rounded-[24px] overflow-hidden shadow-sm hover:shadow-md transition-shadow relative flex flex-col">
                <a href="/detail" class="h-48 w-full relative block">
                    <img src="https://images.unsplash.com/photo-1449844908441-8829872d2607?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover">
                    <div class="absolute top-4 left-4 bg-white px-3 py-1 rounded-full flex items-center gap-1 shadow-sm">
                        <i class="fa-solid fa-circle-check text-brand-orange-hover text-xs"></i>
                        <span class="text-[10px] font-bold text-gray-800">VERIFIED HOST</span>
                    </div>
                    <button onclick="event.preventDefault(); event.stopPropagation();" class="absolute top-4 right-4 w-8 h-8 bg-black/30 backdrop-blur-sm rounded-full flex items-center justify-center text-white hover:bg-black/50 transition-colors">
                        <i class="fa-regular fa-heart text-sm"></i>
                    </button>
                </a>
                <div class="p-5 flex flex-col flex-1">
                    <div class="flex justify-between items-start mb-1">
                        <h3 class="text-lg font-bold text-gray-900 truncate">City Center Suite</h3>
                        <div class="flex items-center gap-1 bg-brand-green/10 px-2 py-1 rounded-md text-xs font-medium text-[#1c333a] shrink-0">
                            <i class="fa-solid fa-star text-brand-green text-[10px]"></i> 4.6
                        </div>
                    </div>
                    <p class="text-sm text-gray-500 mb-4">SCBD, Jakarta</p>
                    <div class="flex items-center gap-3 text-xs text-gray-600 mb-4">
                        <div class="flex items-center gap-1"><i class="fa-solid fa-bed"></i> 1 Bed</div>
                        <div class="flex items-center gap-1"><i class="fa-solid fa-dumbbell"></i> Gym</div>
                    </div>
                    <div class="mt-auto"></div>
                    <hr class="border-gray-200 mb-4">
                    <div class="flex justify-between items-center">
                        <div>
                            <span class="text-lg font-bold text-brand-orange-hover">Rp 950rb</span>
                            <span class="text-xs text-gray-500"> / malam</span>
                        </div>
                        <a href="/detail" class="bg-brand-orange hover:bg-brand-orange-hover text-white px-4 py-2 rounded-xl text-sm font-bold transition-colors inline-block text-center">
                            Book Now
                        </a>
                    </div>
                </div>
            </div>

        </div>

    </section>

@endsection