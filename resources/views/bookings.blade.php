@extends('layouts.app', ['activeTab' => 'bookings'])

@section('title', 'Pesanan Saya - NginUp')

@section('content')

    <div class="px-4 md:px-12 py-6 max-w-3xl mx-auto w-full pb-24 md:pb-6">
        
        {{-- Header Section --}}
        <div class="mb-6">
            <h1 class="text-2xl md:text-3xl font-extrabold text-[#1c333a] tracking-tight">Pesanan Saya</h1>
            <p class="text-gray-500 text-sm mt-1">Kelola tiket dan properti favorit kamu.</p>
        </div>

        {{-- Tabs --}}
        <div class="flex gap-6 border-b border-gray-200 mb-6">
            <button class="pb-3 text-brand-orange font-bold border-b-2 border-brand-orange text-sm relative">
                Active Bookings (1)
            </button>
            <button class="pb-3 text-gray-400 font-semibold text-sm hover:text-gray-600 transition-colors">
                Past Bookings
            </button>
        </div>

        {{-- Active Booking Card: The Grand Horizon Resort --}}
        <div class="bg-white rounded-[24px] overflow-hidden shadow-[0_2px_15px_rgba(0,0,0,0.04)] border border-gray-100 mb-6">
            {{-- Image & Badge --}}
            <div class="relative h-48 w-full">
                <img src="https://images.unsplash.com/photo-1540541338287-41700207dee6?q=80&w=800&auto=format&fit=crop" class="w-full h-full object-cover">
                <div class="absolute top-4 left-4 bg-brand-orange text-white text-[10px] font-bold px-2.5 py-1 rounded-md tracking-wider">
                    Upcoming
                </div>
            </div>

            {{-- Info --}}
            <div class="p-5">
                <div class="flex justify-between items-start mb-1">
                    <h2 class="text-lg font-bold text-gray-900">The Grand Horizon Resort</h2>
                    <div class="flex items-center gap-1 text-sm font-bold text-[#1c333a]">
                        <i class="fa-solid fa-star text-brand-orange text-xs"></i> 4.8
                    </div>
                </div>
                <p class="text-sm text-gray-500 mb-4 flex items-center gap-1.5">
                    <i class="fa-solid fa-location-dot text-gray-400"></i> Seminyak, Bali
                </p>

                {{-- Dates --}}
                <div class="grid grid-cols-2 gap-4 mb-4">
                    <div>
                        <span class="text-[10px] text-gray-400 font-bold uppercase tracking-wider block">Check In</span>
                        <span class="text-sm font-bold text-gray-800 mt-0.5 block">14 Dec 2024</span>
                    </div>
                    <div>
                        <span class="text-[10px] text-gray-400 font-bold uppercase tracking-wider block">Check Out</span>
                        <span class="text-sm font-bold text-gray-800 mt-0.5 block">20 Dec 2024</span>
                    </div>
                </div>

                <div class="flex justify-between items-center pt-4 border-t border-gray-100">
                    <div>
                        <span class="text-[10px] text-gray-400 font-bold uppercase tracking-wider block">Booking ID</span>
                        <span class="text-sm font-bold text-gray-800 mt-0.5 block">NGN-88291-UBD</span>
                    </div>
                    <a href="/booking-detail" class="bg-brand-orange hover:bg-brand-orange-hover text-white px-5 py-2 rounded-xl text-sm font-bold transition-all shadow-md shadow-brand-orange/20 active:scale-95">
                        View Details
                    </a>
                </div>
            </div>
        </div>

        {{-- Booking Status Card --}}
        <div class="bg-blue-50/50 rounded-[20px] p-5 mb-6 border border-blue-100">
            <h3 class="font-bold text-gray-900 mb-1">Booking Status</h3>
            <p class="text-sm text-gray-600 mb-4">You stay at The Grand Horizon is confirmed. Complete extra verification to speed up check-in.</p>
            
            <div class="mb-4">
                <div class="flex justify-between text-xs font-bold mb-1.5">
                    <span class="text-gray-500">Verification Progress</span>
                    <span class="text-blue-600">70%</span>
                </div>
                <div class="w-full h-1.5 bg-blue-100 rounded-full overflow-hidden">
                    <div class="h-full bg-blue-500 rounded-full" style="width: 70%"></div>
                </div>
            </div>

            <button class="w-full py-2.5 bg-transparent border border-blue-200 text-blue-600 hover:bg-blue-50 font-bold text-sm rounded-xl transition-colors">
                Complete Verification
            </button>
        </div>

        {{-- Help Links --}}
        <div class="bg-gray-50 rounded-[20px] p-5 mb-6 border border-gray-100">
            <h3 class="font-bold text-gray-900 text-sm mb-3">Need Help?</h3>
            <div class="flex flex-col gap-3">
                <a href="#" class="flex items-center gap-3 text-sm text-gray-700 hover:text-brand-orange font-medium transition-colors">
                    <i class="fa-regular fa-comment-dots text-gray-400 w-5"></i>
                    Contact Host
                </a>
                <a href="#" class="flex items-center gap-3 text-sm text-gray-700 hover:text-brand-orange font-medium transition-colors">
                    <i class="fa-solid fa-clock-rotate-left text-gray-400 w-5"></i>
                    Cancellation Policy
                </a>
            </div>
        </div>

        {{-- Upcoming Booking 2: Eco-Stay Bamboo Forest --}}
        <div class="bg-white rounded-[24px] overflow-hidden shadow-[0_2px_15px_rgba(0,0,0,0.04)] border border-gray-100 mb-8">
            <div class="relative h-32 w-full">
                <img src="https://images.unsplash.com/photo-1510798831971-661eb04b3739?q=80&w=800&auto=format&fit=crop" class="w-full h-full object-cover">
                <div class="absolute top-4 left-4 bg-blue-500 text-white text-[10px] font-bold px-2.5 py-1 rounded-md tracking-wider">
                    Confirmed
                </div>
            </div>
            <div class="p-5">
                <h2 class="text-lg font-bold text-gray-900">Eco-Stay Bamboo Forest</h2>
                <p class="text-sm text-gray-500 mb-4">Ubud, Bali • 2 Nights</p>
                
                <div class="flex justify-between items-center mb-4">
                    <span class="text-sm font-bold text-gray-800">28 Oct - 30 Oct</span>
                    <a href="/booking-detail" class="text-brand-orange text-xs font-bold hover:underline">View Details</a>
                </div>

                {{-- Cancellation warning box inside --}}
                <div class="bg-orange-50/50 border border-orange-100 rounded-xl p-4 flex flex-col items-center justify-center text-center mt-2 border-dashed">
                    <div class="w-8 h-8 rounded-full bg-orange-100 text-brand-orange flex items-center justify-center mb-2">
                        <i class="fa-solid fa-exclamation text-xs"></i>
                    </div>
                    <span class="text-sm font-bold text-gray-800 block">Strict Cancellation Policy</span>
                    <span class="text-xs text-gray-500 mt-1 block">Free cancellation until tomorrow</span>
                </div>
            </div>
        </div>

        {{-- Riwayat Perjalanan (List) --}}
        <div>
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-bold text-gray-900">Riwayat Perjalanan</h3>
                <a href="#" class="text-brand-orange text-xs font-bold hover:underline">View All Past <i class="fa-solid fa-chevron-right text-[10px] ml-1"></i></a>
            </div>

            <div class="flex flex-col gap-3">
                {{-- Item 1 --}}
                <div class="flex items-center gap-4 bg-white p-3 rounded-2xl border border-gray-100">
                    <div class="w-16 h-16 rounded-xl overflow-hidden shrink-0">
                        <img src="https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?q=80&w=200&auto=format&fit=crop" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <span class="text-[9px] text-gray-400 font-bold uppercase tracking-wider block">Completed • Oct 2024</span>
                        <h4 class="font-bold text-gray-900 text-sm mt-0.5">Urban Loft Jakarta</h4>
                        <div class="flex items-center gap-1 mt-1">
                            <i class="fa-solid fa-pen text-brand-orange text-[10px]"></i>
                            <span class="text-xs text-brand-orange font-semibold">Write a Review</span>
                        </div>
                    </div>
                </div>

                {{-- Item 2 --}}
                <div class="flex items-center gap-4 bg-white p-3 rounded-2xl border border-gray-100">
                    <div class="w-16 h-16 rounded-xl overflow-hidden shrink-0">
                        <img src="https://images.unsplash.com/photo-1512918728675-ed5a9ecdebfd?q=80&w=200&auto=format&fit=crop" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <span class="text-[9px] text-gray-400 font-bold uppercase tracking-wider block">Completed • Aug 2024</span>
                        <h4 class="font-bold text-gray-900 text-sm mt-0.5">The Heritage Suites</h4>
                        <div class="flex items-center gap-1 mt-1">
                            <i class="fa-solid fa-pen text-brand-orange text-[10px]"></i>
                            <span class="text-xs text-brand-orange font-semibold">Write a Review</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
