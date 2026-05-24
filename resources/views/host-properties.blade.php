@extends('layouts.host', ['activeTab' => 'properties'])

@section('title', 'Properties - Host NginUp')
@section('page_title', 'Properties')

@section('content')

<div class="w-full max-w-7xl mx-auto pt-6" x-data="{ view: 'list', scrollToTop() { window.scrollTo({top:0, behavior:'smooth'}); const mainScroll = document.querySelector('main'); if(mainScroll) mainScroll.scrollTo({top:0, behavior:'smooth'}); } }">

    {{-- ========================================== --}}
    {{-- VIEW: LIST (PROPERTY PORTFOLIO)            --}}
    {{-- ========================================== --}}
    <div x-show="view === 'list'" x-transition.opacity.duration.300ms>
        
        {{-- Header --}}
        <div class="mb-6 flex flex-col md:flex-row md:justify-between md:items-end gap-4">
            <div>
                <h1 class="text-2xl md:text-3xl font-extrabold text-gray-900 mb-2">Property Portfolio</h1>
                <p class="text-sm text-gray-500">Manage your listings, track performance, and maximize your occupancy.</p>
            </div>
            <button class="px-4 py-2 bg-white border border-gray-200 text-gray-700 text-sm font-bold rounded-full flex items-center gap-2 hover:bg-gray-50 shadow-sm transition-colors md:w-auto w-full justify-center">
                <i class="fa-solid fa-filter"></i> Filter
            </button>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 pb-20 relative">
            
            {{-- Card 1: Coastal Vista Villa --}}
            <div class="bg-white rounded-[24px] overflow-hidden border border-gray-100 shadow-sm group">
                <div class="relative h-48 md:h-64">
                    <img src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?q=80&w=800&auto=format&fit=crop" class="w-full h-full object-cover">
                    <div class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm text-brand-orange text-[10px] font-bold px-3 py-1 rounded-full shadow-sm">
                        Active
                    </div>
                    <div class="absolute bottom-4 right-4 bg-brand-orange text-white text-sm font-bold px-3 py-1.5 rounded-lg shadow-md">
                        $450/night
                    </div>
                </div>
                <div class="p-5">
                    <h3 class="text-lg font-bold text-gray-900">Coastal Vista Villa</h3>
                    <p class="text-xs text-gray-500 flex items-center gap-1 mb-4 mt-1"><i class="fa-solid fa-location-dot text-gray-400"></i> Malibu, California</p>
                    
                    <div class="flex justify-between items-center">
                        <div class="flex gap-6">
                            <div>
                                <div class="text-[9px] text-gray-400 font-bold uppercase tracking-wider mb-1">Occupancy</div>
                                <div class="text-sm font-bold text-gray-900">88%</div>
                            </div>
                            <div>
                                <div class="text-[9px] text-gray-400 font-bold uppercase tracking-wider mb-1">Rating</div>
                                <div class="text-sm font-bold text-gray-900 flex items-center gap-1">4.9 <i class="fa-solid fa-star text-[#1c333a] text-[10px]"></i></div>
                            </div>
                        </div>
                        <div class="flex gap-2">
                            <button @click="view = 'detail'; scrollToTop()" class="px-4 py-2 bg-white border border-gray-200 text-gray-600 rounded-xl text-xs font-bold hover:bg-gray-50 transition-colors">Details</button>
                            <button @click="view = 'edit'; scrollToTop()" class="px-4 py-2 bg-white border border-gray-200 text-gray-600 rounded-xl text-xs font-bold hover:bg-gray-50 transition-colors">Edit</button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Card 2: Modern Loft --}}
            <div class="bg-white rounded-[24px] overflow-hidden border border-gray-100 shadow-sm group">
                <div class="relative h-48 md:h-64">
                    <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=800&auto=format&fit=crop" class="w-full h-full object-cover">
                    <div class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm text-brand-orange text-[10px] font-bold px-3 py-1 rounded-full shadow-sm">
                        Active
                    </div>
                    <div class="absolute bottom-4 right-4 bg-brand-orange text-white text-sm font-bold px-3 py-1.5 rounded-lg shadow-md">
                        $225/night
                    </div>
                </div>
                <div class="p-5">
                    <h3 class="text-lg font-bold text-gray-900">Modern Loft</h3>
                    <p class="text-xs text-gray-500 flex items-center gap-1 mb-4 mt-1"><i class="fa-solid fa-location-dot text-gray-400"></i> Brooklyn, New York</p>
                    
                    <div class="flex justify-between items-center">
                        <div class="flex gap-6">
                            <div>
                                <div class="text-[9px] text-gray-400 font-bold uppercase tracking-wider mb-1">Occupancy</div>
                                <div class="text-sm font-bold text-gray-900">94%</div>
                            </div>
                            <div>
                                <div class="text-[9px] text-gray-400 font-bold uppercase tracking-wider mb-1">Rating</div>
                                <div class="text-sm font-bold text-gray-900 flex items-center gap-1">4.7 <i class="fa-solid fa-star text-[#1c333a] text-[10px]"></i></div>
                            </div>
                        </div>
                        <div class="flex gap-2">
                            <button @click="view = 'detail'; scrollToTop()" class="px-4 py-2 bg-white border border-gray-200 text-gray-600 rounded-xl text-xs font-bold hover:bg-gray-50 transition-colors">Details</button>
                            <button @click="view = 'edit'; scrollToTop()" class="px-4 py-2 bg-white border border-gray-200 text-gray-600 rounded-xl text-xs font-bold hover:bg-gray-50 transition-colors">Edit</button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Floating Action Button --}}
            <a href="/host/add-new" class="fixed bottom-20 md:bottom-10 right-6 w-14 h-14 bg-brand-orange text-white rounded-full flex items-center justify-center text-2xl shadow-lg hover:scale-105 transition-transform">
                <i class="fa-solid fa-plus"></i>
            </a>

        </div>
    </div>

    {{-- ========================================== --}}
    {{-- VIEW: DETAIL                               --}}
    {{-- ========================================== --}}
    <div x-show="view === 'detail'" x-transition.opacity.duration.300ms style="display: none;">
        <div class="w-full">
            {{-- Header --}}
            <div class="flex items-center justify-between mb-6">
                <div class="flex items-center gap-3">
                    <button @click="view = 'list'; scrollToTop()" class="w-8 h-8 rounded-full bg-white shadow-sm border border-gray-100 flex items-center justify-center text-brand-orange hover:bg-orange-50 transition-colors">
                        <i class="fa-solid fa-arrow-left"></i>
                    </button>
                    <h1 class="text-lg font-extrabold text-brand-orange">Detail property</h1>
                </div>
                <div class="w-8 h-8 rounded-full bg-orange-100 flex items-center justify-center text-brand-orange font-bold border-2 border-white shadow-sm md:hidden">
                    G
                </div>
            </div>

            <div class="bg-white rounded-[24px] border border-gray-100 p-5 lg:p-8 shadow-sm mb-6">
            <div class="flex items-center gap-2 mb-1">
                <h2 class="text-xl font-extrabold text-gray-900">Coastal Vista Villa</h2>
                <span class="px-2 py-0.5 bg-blue-500 text-white text-[9px] font-bold rounded-full">Active</span>
            </div>
            <p class="text-xs text-gray-500 flex items-center gap-1 mb-5"><i class="fa-solid fa-location-dot text-gray-400"></i> Malibu, California</p>

            <div class="flex gap-3 mb-6">
                <button class="flex-1 py-3 bg-[#1c333a] text-white rounded-xl text-xs font-bold hover:bg-[#15272c] transition-colors flex items-center justify-center gap-2">
                    <i class="fa-solid fa-pause"></i> Pause Listing
                </button>
                <button @click="view = 'edit'; scrollToTop()" class="flex-1 py-3 bg-brand-orange text-white rounded-xl text-xs font-bold hover:bg-brand-orange-hover transition-colors flex items-center justify-center gap-2">
                    <i class="fa-solid fa-pen"></i> Edit Listing
                </button>
            </div>

            {{-- Stats --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-3 mb-6">
                <div class="border border-gray-100 rounded-2xl p-4 flex items-center gap-4">
                    <div class="w-10 h-10 rounded-xl bg-blue-50 text-blue-500 flex items-center justify-center text-xl"><i class="fa-solid fa-bed"></i></div>
                    <div>
                        <div class="text-[10px] text-gray-500 font-bold mb-0.5">Occupancy</div>
                        <div class="text-xl font-extrabold text-gray-900">88%</div>
                    </div>
                </div>
                <div class="border border-gray-100 rounded-2xl p-4 flex items-center gap-4">
                    <div class="w-10 h-10 rounded-xl bg-blue-50 text-blue-500 flex items-center justify-center text-xl"><i class="fa-solid fa-star"></i></div>
                    <div>
                        <div class="text-[10px] text-gray-500 font-bold mb-0.5">Rating</div>
                        <div class="text-xl font-extrabold text-gray-900 flex items-end gap-1">4.9 <span class="text-[10px] text-gray-400 font-normal mb-1">/124</span></div>
                    </div>
                </div>
                <div class="border border-gray-100 rounded-2xl p-4 flex items-center gap-4">
                    <div class="w-10 h-10 rounded-xl bg-orange-50 text-brand-orange flex items-center justify-center text-xl"><i class="fa-solid fa-wallet"></i></div>
                    <div>
                        <div class="text-[10px] text-gray-500 font-bold mb-0.5">Earnings</div>
                        <div class="text-xl font-extrabold text-gray-900">$24.5k</div>
                    </div>
                </div>
            </div>

            {{-- Photos --}}
            <div class="rounded-[20px] overflow-hidden mb-6 relative group cursor-pointer">
                <img src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?q=80&w=800&auto=format&fit=crop" class="w-full h-48 object-cover">
                <div class="absolute inset-0 bg-black/20 group-hover:bg-black/10 transition-colors"></div>
                <div class="absolute bottom-3 right-3 bg-white/90 backdrop-blur-sm text-gray-800 text-[10px] font-bold px-3 py-1.5 rounded-lg shadow-sm">
                    + 12 Photos
                </div>
            </div>

            {{-- Description --}}
            <div class="mb-6">
                <h3 class="text-sm font-extrabold text-gray-900 mb-2">Description</h3>
                <p class="text-xs text-gray-600 leading-relaxed">
                    Perched on the iconic cliffs of Malibu, Coastal Vista Villa offers an unparalleled living experience. This architectural masterpiece features seamless indoor-outdoor transitions, a private saltwater infinity pool, and panoramic views of the Pacific. Recently renovated with sustainable materials and smart home technology.
                </p>
            </div>

            {{-- Amenities --}}
            <div class="mb-6">
                <h3 class="text-sm font-extrabold text-gray-900 mb-3">Amenities</h3>
                <div class="grid grid-cols-2 gap-3 text-xs text-gray-600 font-medium">
                    <div class="flex items-center gap-2"><i class="fa-solid fa-wifi w-4 text-brand-orange"></i> High-speed Wifi</div>
                    <div class="flex items-center gap-2"><i class="fa-solid fa-water-ladder w-4 text-brand-orange"></i> Infinity Pool</div>
                    <div class="flex items-center gap-2"><i class="fa-solid fa-kitchen-set w-4 text-brand-orange"></i> Chef's Kitchen</div>
                    <div class="flex items-center gap-2"><i class="fa-solid fa-square-parking w-4 text-brand-orange"></i> Free Parking</div>
                    <div class="flex items-center gap-2"><i class="fa-solid fa-snowflake w-4 text-brand-orange"></i> Central AC</div>
                    <div class="flex items-center gap-2"><i class="fa-solid fa-tv w-4 text-brand-orange"></i> 65" Smart TV</div>
                </div>
            </div>

            <hr class="border-gray-100 my-6">

            {{-- Base Rate --}}
            <div class="flex justify-between items-center mb-6">
                <div>
                    <div class="text-[10px] text-gray-500 font-bold mb-1">Base Rate</div>
                    <div class="flex items-end gap-1">
                        <span class="text-3xl font-extrabold text-brand-orange">$450</span>
                        <span class="text-[10px] text-gray-500 font-bold mb-1.5">/night</span>
                    </div>
                </div>
                <a href="#" class="text-xs font-bold text-blue-500 hover:underline">Pricing Rules</a>
            </div>

            {{-- Mock Calendar --}}
            <div class="mb-6">
                <div class="text-[10px] text-gray-900 font-bold mb-2">Availability Calendar</div>
                <div class="bg-gray-50 rounded-xl p-4 border border-gray-100">
                    <div class="flex justify-between text-[10px] text-gray-400 font-bold mb-3">
                        <span>S</span><span>M</span><span>T</span><span>W</span><span>T</span><span>F</span><span>S</span>
                    </div>
                    <div class="grid grid-cols-7 gap-2 text-center text-xs font-bold">
                        <span class="text-gray-300">28</span><span class="text-gray-300">29</span><span class="text-gray-300">30</span>
                        <span class="bg-orange-100 text-brand-orange rounded py-1">1</span>
                        <span class="bg-orange-100 text-brand-orange rounded py-1">2</span>
                        <span class="bg-orange-100 text-brand-orange rounded py-1">3</span>
                        <span class="bg-orange-100 text-brand-orange rounded py-1">4</span>
                        <span class="bg-blue-100 text-blue-600 rounded py-1">5</span>
                        <span class="bg-blue-100 text-blue-600 rounded py-1">6</span>
                        <span class="bg-orange-100 text-brand-orange rounded py-1">7</span>
                        <span class="bg-orange-100 text-brand-orange rounded py-1">8</span>
                        <span class="text-gray-700 py-1">9</span>
                        <span class="text-gray-700 py-1">10</span>
                        <span class="text-gray-700 py-1">11</span>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-between mb-4">
                <span class="text-xs font-bold text-gray-900">Instant Book</span>
                <div class="w-8 h-5 bg-blue-500 rounded-full relative cursor-pointer">
                    <div class="w-3 h-3 bg-white rounded-full absolute right-1 top-1 shadow-sm"></div>
                </div>
            </div>
            <div class="flex items-center justify-between mb-6">
                <span class="text-xs font-bold text-gray-900">Security Deposit</span>
                <span class="text-xs font-bold text-gray-600">$1,500</span>
            </div>

            {{-- Map Area --}}
            <div class="rounded-xl overflow-hidden relative h-40 border border-gray-100 group cursor-pointer">
                <img src="https://images.unsplash.com/photo-1524661135-423995f22d0b?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition-opacity grayscale">
                <i class="fa-solid fa-location-dot absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-3xl text-brand-orange drop-shadow-md"></i>
                <div class="absolute bottom-0 w-full bg-white p-3">
                    <div class="text-xs font-bold text-gray-900">Private Beach Access Area</div>
                    <div class="text-[9px] text-gray-500">Approx. 15 mins from Malibu Pier</div>
                </div>
            </div>

        </div>
        </div>
    </div>

    {{-- ========================================== --}}
    {{-- VIEW: EDIT                                 --}}
    {{-- ========================================== --}}
    <div x-show="view === 'edit'" x-transition.opacity.duration.300ms style="display: none;">
        <div class="w-full">
            {{-- Header --}}
            <div class="flex items-center justify-between mb-6">
                <div class="flex items-center gap-3">
                    <button @click="view = 'list'; scrollToTop()" class="w-8 h-8 rounded-full bg-white shadow-sm border border-gray-100 flex items-center justify-center text-brand-orange hover:bg-orange-50 transition-colors">
                        <i class="fa-solid fa-arrow-left"></i>
                    </button>
                    <h1 class="text-lg font-extrabold text-brand-orange">Edit Listing</h1>
                </div>
                <button class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center text-gray-600">
                    <i class="fa-regular fa-floppy-disk"></i>
                </button>
            </div>

            <div class="bg-white rounded-[24px] border border-gray-100 p-6 lg:p-8 shadow-sm mb-6 space-y-6">
            
            {{-- General Info --}}
            <div>
                <h3 class="text-sm font-extrabold text-gray-900 mb-4">General Information</h3>
                
                <div class="space-y-4">
                    <div>
                        <label class="text-[10px] font-bold text-blue-500 block mb-1">Property Title</label>
                        <input type="text" value="Coastal Vista Villa" class="w-full border border-gray-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-brand-orange">
                    </div>
                    <div>
                        <label class="text-[10px] font-bold text-blue-500 block mb-1">Description</label>
                        <textarea rows="4" class="w-full border border-gray-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-brand-orange leading-relaxed text-gray-600">Nestled on the cliffside, this luxurious villa offers panoramic ocean views, a private infinity pool, and modern Mediterranean architecture. Perfect for high-end travelers seeking relaxation.</textarea>
                    </div>
                    <div>
                        <label class="text-[10px] font-bold text-blue-500 block mb-1">Nightly Rate (USD)</label>
                        <div class="relative">
                            <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-500 font-bold">$</span>
                            <input type="text" value="450" class="w-full border border-gray-200 rounded-xl pl-8 pr-4 py-3 text-sm focus:outline-none focus:border-brand-orange font-bold">
                        </div>
                    </div>
                    <div>
                        <label class="text-[10px] font-bold text-blue-500 block mb-1">Property Category</label>
                        <div class="relative">
                            <select class="w-full border border-gray-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-brand-orange appearance-none bg-white">
                                <option>Villa</option>
                                <option>House</option>
                                <option>Apartment</option>
                            </select>
                            <i class="fa-solid fa-chevron-down absolute right-4 top-1/2 -translate-y-1/2 text-[10px] text-gray-400 pointer-events-none"></i>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="border-gray-100">

            {{-- Photos --}}
            <div>
                <div class="flex justify-between items-center mb-3">
                    <div>
                        <h3 class="text-sm font-extrabold text-gray-900">Property Photos</h3>
                        <p class="text-[9px] text-gray-400">High-definition images increase booking rate by 40%</p>
                    </div>
                    <button class="bg-blue-50 text-blue-600 text-[10px] font-bold px-3 py-1.5 rounded-lg flex flex-col items-center">
                        <i class="fa-solid fa-image"></i> Add New
                    </button>
                </div>
                
                <div class="grid grid-cols-2 gap-2">
                    <div class="col-span-2 relative rounded-xl overflow-hidden group">
                        <img src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?q=80&w=800&auto=format&fit=crop" class="w-full h-32 object-cover">
                        <div class="absolute top-2 left-2 bg-brand-orange text-white text-[8px] font-bold px-2 py-0.5 rounded-full">Cover Photo</div>
                    </div>
                    <div class="relative rounded-xl overflow-hidden h-24">
                        <img src="https://images.unsplash.com/photo-1564013799919-ab600027ffc6?q=80&w=400&auto=format&fit=crop" class="w-full h-full object-cover">
                    </div>
                    <div class="relative rounded-xl overflow-hidden h-24">
                        <img src="https://images.unsplash.com/photo-1584622650111-993a426fbf0a?q=80&w=400&auto=format&fit=crop" class="w-full h-full object-cover">
                    </div>
                    <div class="relative rounded-xl overflow-hidden h-24">
                        <img src="https://images.unsplash.com/photo-1556912173-3bb406ef7e77?q=80&w=400&auto=format&fit=crop" class="w-full h-full object-cover">
                    </div>
                    <div class="rounded-xl border-2 border-dashed border-blue-200 bg-blue-50 flex flex-col items-center justify-center text-blue-500 h-24 cursor-pointer hover:bg-blue-100 transition-colors">
                        <i class="fa-solid fa-plus mb-1"></i>
                        <span class="text-[10px] font-bold">Add Photo</span>
                    </div>
                </div>
            </div>

            <hr class="border-gray-100">

            {{-- Core Amenities --}}
            <div>
                <h3 class="text-sm font-extrabold text-gray-900 mb-4">Core Amenities</h3>
                <div class="space-y-3 mb-4">
                    <label class="flex items-center gap-3 cursor-pointer">
                        <div class="w-5 h-5 rounded border border-brand-orange bg-brand-orange text-white flex items-center justify-center text-xs"><i class="fa-solid fa-check"></i></div>
                        <i class="fa-solid fa-wifi w-4 text-gray-400"></i>
                        <span class="text-xs font-bold text-gray-800">High-speed Wifi</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer">
                        <div class="w-5 h-5 rounded border border-brand-orange bg-brand-orange text-white flex items-center justify-center text-xs"><i class="fa-solid fa-check"></i></div>
                        <i class="fa-solid fa-water-ladder w-4 text-gray-400"></i>
                        <span class="text-xs font-bold text-gray-800">Private Pool</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer">
                        <div class="w-5 h-5 rounded border border-brand-orange bg-brand-orange text-white flex items-center justify-center text-xs"><i class="fa-solid fa-check"></i></div>
                        <i class="fa-solid fa-snowflake w-4 text-gray-400"></i>
                        <span class="text-xs font-bold text-gray-800">Air Conditioning</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer">
                        <div class="w-5 h-5 rounded border border-gray-300 bg-white"></div>
                        <i class="fa-solid fa-square-parking w-4 text-gray-400"></i>
                        <span class="text-xs font-bold text-gray-800">Free Parking</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer">
                        <div class="w-5 h-5 rounded border border-brand-orange bg-brand-orange text-white flex items-center justify-center text-xs"><i class="fa-solid fa-check"></i></div>
                        <i class="fa-solid fa-kitchen-set w-4 text-gray-400"></i>
                        <span class="text-xs font-bold text-gray-800">Gourmet Kitchen</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer">
                        <div class="w-5 h-5 rounded border border-gray-300 bg-white"></div>
                        <i class="fa-solid fa-tv w-4 text-gray-400"></i>
                        <span class="text-xs font-bold text-gray-800">Streaming Services</span>
                    </label>
                </div>
            </div>

            {{-- Live Preview --}}
            <div class="bg-brand-orange rounded-xl p-5 text-white">
                <div class="flex justify-between items-center mb-1">
                    <h4 class="font-bold text-sm">Live Preview</h4>
                    <i class="fa-regular fa-eye"></i>
                </div>
                <p class="text-[9px] text-white/70 mb-4">Last updated: Today, 10:42 AM</p>
                
                <div class="w-full h-1 bg-white/20 rounded-full mb-2">
                    <div class="w-[80%] h-full bg-white rounded-full"></div>
                </div>
                <p class="text-[10px] text-white leading-relaxed mb-4">Listing is 80% complete. Add a video tour to reach 100%.</p>
                
                <button class="w-full py-3 bg-white text-brand-orange rounded-xl text-xs font-bold shadow-sm hover:bg-orange-50 transition-colors">
                    Preview as Guest
                </button>
            </div>

            {{-- Sticky Action Buttons --}}
            <div class="flex gap-3 pt-4">
                <button @click="view = 'list'; scrollToTop()" class="w-1/3 py-3 border border-gray-200 rounded-xl text-xs font-bold text-gray-600 hover:bg-gray-50 transition-colors">
                    Discard
                </button>
                <button @click="view = 'detail'; scrollToTop()" class="w-2/3 py-3 bg-brand-orange text-white rounded-xl text-xs font-bold shadow-md shadow-brand-orange/20 hover:bg-brand-orange-hover transition-colors">
                    Save Changes
                </button>
            </div>

        </div>
        </div>
    </div>

</div>

@endsection
