@extends('layouts.host', ['activeTab' => 'dashboard'])

@section('title', 'Dashboard - Host NginUp')
@section('page_title', '')

@section('content')

<div class="max-w-4xl mx-auto pt-6">

    {{-- Welcome Header --}}
    <div class="mb-6">
        <h1 class="text-2xl md:text-3xl font-bold text-[#1a2b3c] mb-1">Welcome back, Gibran!</h1>
        <p class="text-sm md:text-base text-gray-500">Check your performance for today.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
        
        {{-- Monthly Income Card --}}
        <div class="bg-white rounded-[24px] p-6 shadow-sm border border-gray-100 flex flex-col justify-between">
            <div>
                <h3 class="text-[10px] font-bold text-gray-400 tracking-wider uppercase mb-2">Monthly Income</h3>
                <div class="flex justify-between items-end">
                    <div>
                        <div class="text-3xl font-bold text-[#1a2b3c] mb-1">$12,840.50</div>
                        <div class="flex items-center gap-1 text-xs font-bold text-green-500">
                            <i class="fa-solid fa-arrow-trend-up"></i> 12.4%
                        </div>
                    </div>
                    {{-- Mini Bar Chart --}}
                    <div class="flex items-end gap-1.5 h-10 mb-1">
                        <div class="w-3 bg-brand-orange/20 rounded-sm h-[40%]"></div>
                        <div class="w-3 bg-brand-orange/40 rounded-sm h-[60%]"></div>
                        <div class="w-3 bg-brand-orange/70 rounded-sm h-[50%]"></div>
                        <div class="w-3 bg-brand-orange rounded-sm h-[100%] shadow-sm shadow-brand-orange/30"></div>
                    </div>
                </div>
            </div>
            
            <div class="mt-6 pt-4 border-t border-gray-100 text-center">
                <a href="/host/reports" class="text-xs font-bold text-brand-orange hover:text-brand-orange-hover transition-colors inline-flex items-center gap-1">
                    View Detailed Report <i class="fa-solid fa-chevron-right text-[10px]"></i>
                </a>
            </div>
        </div>

        <div class="flex flex-col gap-4">
            {{-- Active Bookings Card --}}
            <div class="bg-white rounded-[24px] p-6 shadow-sm border border-gray-100">
                <h3 class="text-[10px] font-bold text-gray-400 tracking-wider uppercase mb-2">Active Bookings</h3>
                <div class="text-3xl font-bold text-[#1a2b3c] mb-4">24</div>
                
                <div class="flex justify-between items-center mb-2">
                    <span class="text-[10px] font-bold text-gray-500">Occupancy Rate</span>
                    <span class="text-[10px] font-bold text-brand-orange">75%</span>
                </div>
                <div class="w-full h-2 bg-gray-100 rounded-full overflow-hidden">
                    <div class="h-full bg-brand-orange rounded-full shadow-sm shadow-brand-orange/30" style="width: 75%"></div>
                </div>
            </div>

            {{-- 2 Small Cards Row --}}
            <div class="grid grid-cols-2 gap-4">
                {{-- Rating Card --}}
                <div class="bg-white rounded-[24px] p-5 shadow-sm border border-gray-100 flex flex-col justify-between">
                    <h3 class="text-[10px] font-bold text-gray-400 tracking-wider uppercase mb-1">Rating</h3>
                    <div class="text-2xl font-bold text-[#1a2b3c] flex items-center gap-1 mb-3">
                        4.92 <i class="fa-solid fa-star text-brand-orange text-sm"></i>
                    </div>
                    <div class="flex -space-x-2">
                        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?q=80&w=100&auto=format&fit=crop" class="w-6 h-6 rounded-full border-2 border-white object-cover">
                        <img src="https://images.unsplash.com/photo-1599566150163-29194dcaad36?q=80&w=100&auto=format&fit=crop" class="w-6 h-6 rounded-full border-2 border-white object-cover">
                        <div class="w-6 h-6 rounded-full border-2 border-white bg-blue-100 text-blue-600 flex items-center justify-center text-[8px] font-bold z-10">+12</div>
                    </div>
                </div>

                {{-- Active Units Card --}}
                <div class="bg-white rounded-[24px] p-5 shadow-sm border border-gray-100 flex flex-col justify-between">
                    <h3 class="text-[10px] font-bold text-gray-400 tracking-wider uppercase mb-1">Active Units</h3>
                    <div class="text-2xl font-bold text-[#1a2b3c] mb-3">6</div>
                    <div class="flex gap-1.5">
                        <div class="w-6 h-6 rounded-lg bg-orange-50 flex items-center justify-center text-brand-orange text-[10px]">
                            <i class="fa-solid fa-chart-pie"></i>
                        </div>
                        <div class="w-6 h-6 rounded-lg bg-orange-50 flex items-center justify-center text-brand-orange text-[10px]">
                            <i class="fa-solid fa-house"></i>
                        </div>
                        <div class="w-6 h-6 rounded-lg bg-orange-50 flex items-center justify-center text-brand-orange text-[10px]">
                            <i class="fa-solid fa-building"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    {{-- Active Reservations --}}
    <div class="mb-8">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-base font-bold text-gray-800">Active Reservations</h2>
            <a href="/host/bookings" class="text-xs font-bold text-brand-orange hover:text-brand-orange-hover">View All</a>
        </div>

        <div class="flex flex-col gap-3">
            {{-- Reservation 1 --}}
            <div class="bg-white p-4 rounded-[20px] shadow-sm border border-gray-100 flex items-center justify-between hover:border-brand-orange/30 transition-colors cursor-pointer group">
                <div class="flex items-center gap-3">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=100&auto=format&fit=crop" class="w-12 h-12 rounded-full object-cover">
                    <div>
                        <h4 class="font-bold text-gray-900 text-sm">Sarah J.</h4>
                        <p class="text-[10px] text-gray-500">Villa Heritage • 12 - 15 Oct</p>
                    </div>
                </div>
                <div class="flex items-center gap-3">
                    <span class="px-2.5 py-1 bg-green-100 text-green-700 text-[9px] font-bold rounded-full">Checked In</span>
                    <button class="w-6 h-6 flex items-center justify-center text-gray-400 group-hover:text-gray-600 transition-colors">
                        <i class="fa-solid fa-ellipsis-vertical"></i>
                    </button>
                </div>
            </div>

            {{-- Reservation 2 --}}
            <div class="bg-white p-4 rounded-[20px] shadow-sm border border-gray-100 flex items-center justify-between hover:border-brand-orange/30 transition-colors cursor-pointer group">
                <div class="flex items-center gap-3">
                    <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80&w=100&auto=format&fit=crop" class="w-12 h-12 rounded-full object-cover">
                    <div>
                        <h4 class="font-bold text-gray-900 text-sm">Marco L.</h4>
                        <p class="text-[10px] text-gray-500">Suite Ubud • 18 - 20 Oct</p>
                    </div>
                </div>
                <div class="flex items-center gap-3">
                    <span class="px-2.5 py-1 bg-blue-100 text-blue-600 text-[9px] font-bold rounded-full">Upcoming</span>
                    <button class="w-6 h-6 flex items-center justify-center text-gray-400 group-hover:text-gray-600 transition-colors">
                        <i class="fa-solid fa-ellipsis-vertical"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    {{-- Pending Tasks --}}
    <div class="mb-8">
        <div class="bg-white rounded-[24px] p-6 shadow-sm border border-gray-100">
            <h3 class="text-[10px] font-bold text-[#8ba3b0] tracking-wider uppercase mb-5">PENDING TASKS</h3>
            
            <div class="flex flex-col gap-5">
                {{-- Task 1 --}}
                <div class="flex items-center justify-between cursor-pointer group">
                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 rounded-full bg-red-100 text-red-500 flex items-center justify-center">
                            <i class="fa-solid fa-file-invoice"></i>
                        </div>
                        <span class="text-sm font-semibold text-gray-800 group-hover:text-brand-orange transition-colors">Approve booking request</span>
                    </div>
                    <div class="w-2 h-2 rounded-full bg-brand-orange"></div>
                </div>

                {{-- Task 2 --}}
                <div class="flex items-center justify-between cursor-pointer group">
                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 rounded-full bg-blue-100 text-blue-400 flex items-center justify-center">
                            <i class="fa-regular fa-comment-dots"></i>
                        </div>
                        <span class="text-sm font-semibold text-gray-800 group-hover:text-brand-orange transition-colors">Reply guest messages</span>
                    </div>
                    <div class="bg-brand-orange text-white text-[10px] font-bold w-5 h-5 rounded-full flex items-center justify-center">3</div>
                </div>

                {{-- Task 3 (Disabled) --}}
                <div class="flex items-center justify-between opacity-50 cursor-not-allowed">
                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 rounded-full bg-gray-100 text-gray-400 flex items-center justify-center">
                            <i class="fa-solid fa-shield-halved"></i>
                        </div>
                        <span class="text-sm font-semibold text-gray-500">Complete verification</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
