@extends('layouts.host', ['activeTab' => 'add-new'])

@section('title', 'Add New Property - Host NginUp')
@section('page_title', 'Add New Property')

@section('content')

<div class="max-w-6xl mx-auto md:pt-4 pb-12" x-data="{ 
    step: 1,
    scrollToTop() { 
        window.scrollTo({top:0, behavior:'smooth'}); 
        const mainScroll = document.querySelector('main');
        if(mainScroll) mainScroll.scrollTo({top:0, behavior:'smooth'});
    } 
}">

    <div class="bg-white md:rounded-[32px] shadow-sm md:shadow-xl md:shadow-gray-200/50 md:border md:border-gray-100 flex flex-col md:flex-row w-full overflow-hidden">
        
        {{-- Left Side: Image & Desktop Progress (Sticky) --}}
        <div class="hidden md:flex w-full md:w-2/5 relative shrink-0 bg-gray-900 flex-col p-10 overflow-hidden">
            <img src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?q=80&w=1200&auto=format&fit=crop" class="absolute inset-0 w-full h-full object-cover opacity-40 hover:scale-105 transition-transform duration-1000">
            <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/50 to-black/20"></div>
            
            <div class="relative z-10 mb-12">
                <h2 class="text-white text-4xl font-extrabold leading-tight tracking-tight">Add New<br>Property</h2>
                <p class="text-white/80 text-sm mt-4 leading-relaxed max-w-xs">
                    Share your space with the world. Complete these steps to publish your listing.
                </p>
            </div>

            <div class="relative z-10 mt-auto space-y-8 pb-8">
                {{-- Desktop Steps Tracker --}}
                <div class="flex items-center gap-4 transition-all duration-500" :class="step >= 1 ? 'opacity-100' : 'opacity-40'">
                    <div class="w-10 h-10 rounded-full flex items-center justify-center font-bold shadow-lg transition-all duration-300" :class="step > 1 ? 'bg-brand-orange text-white' : (step === 1 ? 'bg-white text-brand-orange ring-4 ring-white/20' : 'border-2 border-white/50 text-white')">
                        <i class="fa-solid fa-check" x-show="step > 1"></i>
                        <span x-show="step <= 1">1</span>
                    </div>
                    <span class="text-white font-bold tracking-wide">Basics</span>
                </div>
                
                <div class="flex items-center gap-4 transition-all duration-500" :class="step >= 2 ? 'opacity-100' : 'opacity-40'">
                    <div class="w-10 h-10 rounded-full flex items-center justify-center font-bold shadow-lg transition-all duration-300" :class="step > 2 ? 'bg-brand-orange text-white' : (step === 2 ? 'bg-white text-brand-orange ring-4 ring-white/20' : 'border-2 border-white/50 text-white')">
                        <i class="fa-solid fa-check" x-show="step > 2" style="display: none;"></i>
                        <span x-show="step <= 2">2</span>
                    </div>
                    <span class="text-white font-bold tracking-wide">Location & Pricing</span>
                </div>
                
                <div class="flex items-center gap-4 transition-all duration-500" :class="step >= 3 ? 'opacity-100' : 'opacity-40'">
                    <div class="w-10 h-10 rounded-full flex items-center justify-center font-bold shadow-lg transition-all duration-300" :class="step > 3 ? 'bg-brand-orange text-white' : (step === 3 ? 'bg-white text-brand-orange ring-4 ring-white/20' : 'border-2 border-white/50 text-white')">
                        <i class="fa-solid fa-check" x-show="step > 3" style="display: none;"></i>
                        <span x-show="step <= 3">3</span>
                    </div>
                    <span class="text-white font-bold tracking-wide">Amenities & Features</span>
                </div>

                <div class="flex items-center gap-4 transition-all duration-500" :class="step >= 4 ? 'opacity-100' : 'opacity-40'">
                    <div class="w-10 h-10 rounded-full flex items-center justify-center font-bold shadow-lg transition-all duration-300" :class="step > 4 ? 'bg-brand-orange text-white' : (step === 4 ? 'bg-white text-brand-orange ring-4 ring-white/20' : 'border-2 border-white/50 text-white')">
                        <i class="fa-solid fa-check" x-show="step > 4" style="display: none;"></i>
                        <span x-show="step <= 4">4</span>
                    </div>
                    <span class="text-white font-bold tracking-wide">Photos & Review</span>
                </div>
            </div>
        </div>

        {{-- Right Side: Form Content --}}
        <div class="w-full md:w-3/5 bg-white relative flex flex-col min-h-[80vh] md:min-h-0">
            
            {{-- Mobile Progress Bar --}}
            <div x-show="step < 5" class="md:hidden bg-white px-4 py-4 border-b border-gray-100 sticky top-0 z-20">
                <div class="flex justify-between items-end mb-2">
                    <span class="text-brand-orange font-bold text-xs uppercase tracking-wider" x-text="'STEP ' + step + ' OF 4'"></span>
                    <span class="text-[10px] text-gray-500 font-semibold" x-text="Math.round((step / 4) * 100) + '% Complete'"></span>
                </div>
                <div class="w-full h-1.5 bg-gray-100 rounded-full overflow-hidden">
                    <div class="h-full bg-brand-orange rounded-full transition-all duration-500 ease-out" :style="'width: ' + ((step / 4) * 100) + '%'"></div>
                </div>
            </div>

            <div class="p-6 md:p-10 lg:p-12 w-full max-w-xl mx-auto flex-1">
                
                {{-- STEP 1: Basics --}}
                <div x-show="step === 1" x-transition.opacity.duration.300ms>
                    <div class="mb-6">
                        <h2 class="text-2xl font-extrabold text-gray-900 mb-2">Let's start with the basics</h2>
                        <p class="text-sm text-gray-500">Tell us a bit about your property. You can always edit these details later.</p>
                    </div>

                    <div class="space-y-6">
                        {{-- Property Name --}}
                        <div>
                            <label class="text-xs font-bold text-gray-700 block mb-2">Property Name <span class="text-red-500">*</span></label>
                            <input type="text" placeholder="e.g. Serene Riverfront Villa" class="w-full border border-gray-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-brand-orange focus:ring-1 focus:ring-brand-orange">
                        </div>

                        {{-- Property Type --}}
                        <div>
                            <label class="text-xs font-bold text-gray-700 block mb-3">Property Type</label>
                            <div class="grid grid-cols-2 gap-3">
                                <button class="border border-gray-200 rounded-xl py-4 flex flex-col items-center gap-2 hover:border-brand-orange hover:bg-orange-50/50 text-gray-500 transition-all">
                                    <i class="fa-solid fa-house text-xl"></i>
                                    <span class="text-[11px] font-bold">House</span>
                                </button>
                                <button class="border border-gray-200 rounded-xl py-4 flex flex-col items-center gap-2 hover:border-brand-orange hover:bg-orange-50/50 text-gray-500 transition-all">
                                    <i class="fa-solid fa-building text-xl"></i>
                                    <span class="text-[11px] font-bold">Apartment</span>
                                </button>
                                <button class="border-2 border-brand-orange bg-orange-50 rounded-xl py-4 flex flex-col items-center gap-2 text-brand-orange transition-all shadow-sm">
                                    <i class="fa-solid fa-house-chimney-window text-xl"></i>
                                    <span class="text-[11px] font-bold">Villa</span>
                                </button>
                                <button class="border border-gray-200 rounded-xl py-4 flex flex-col items-center gap-2 hover:border-brand-orange hover:bg-orange-50/50 text-gray-500 transition-all">
                                    <i class="fa-solid fa-tree-city text-xl"></i>
                                    <span class="text-[11px] font-bold">Cabin</span>
                                </button>
                            </div>
                        </div>

                        {{-- Description --}}
                        <div>
                            <div class="flex justify-between mb-2">
                                <label class="text-xs font-bold text-gray-700 block">Description</label>
                                <span class="text-[10px] text-gray-400">0/500</span>
                            </div>
                            <textarea rows="4" placeholder="Describe the unique features, the neighborhood, and the vibe of your place..." class="w-full border border-gray-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-brand-orange focus:ring-1 focus:ring-brand-orange resize-none"></textarea>
                        </div>
                    </div>

                    <div class="mt-10">
                        <button @click="step = 2; scrollToTop()" class="w-full bg-brand-orange hover:bg-brand-orange-hover text-white py-4 rounded-xl font-bold shadow-md shadow-brand-orange/20 transition-all active:scale-[0.98] flex items-center justify-center gap-2">
                            Next Step <i class="fa-solid fa-chevron-right text-xs"></i>
                        </button>
                    </div>
                </div>

                {{-- STEP 2: Location & Pricing --}}
                <div x-show="step === 2" x-transition.opacity.duration.300ms style="display: none;">
                    <div class="mb-6">
                        <h2 class="text-2xl font-extrabold text-gray-900 mb-2">Location & Pricing</h2>
                        <p class="text-sm text-gray-500">Help guests find your place and set your rates.</p>
                    </div>

                    <div class="space-y-6">
                        {{-- Location --}}
                        <div>
                            <label class="text-xs font-bold text-gray-700 block mb-2 flex items-center gap-2">
                                <i class="fa-solid fa-location-dot text-brand-orange"></i> Where is your property?
                            </label>
                            <div class="relative mb-3">
                                <input type="text" placeholder="Enter your full address" class="w-full border border-gray-200 rounded-xl pl-10 pr-4 py-3 text-sm focus:outline-none focus:border-brand-orange focus:ring-1 focus:ring-brand-orange">
                                <i class="fa-solid fa-magnifying-glass absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                            </div>
                            <div class="w-full h-40 bg-gray-100 rounded-xl overflow-hidden relative border border-gray-200 group cursor-pointer">
                                <img src="https://images.unsplash.com/photo-1524661135-423995f22d0b?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition-opacity">
                                <div class="absolute inset-0 bg-black/5 flex items-center justify-center">
                                    <i class="fa-solid fa-location-dot text-4xl text-brand-orange drop-shadow-md pb-4"></i>
                                </div>
                                <div class="absolute bottom-2 right-2 bg-white px-2 py-1 rounded shadow text-[9px] font-bold text-gray-600">
                                    <i class="fa-solid fa-crosshairs"></i> Use current location
                                </div>
                            </div>
                        </div>

                        <hr class="border-gray-100">

                        {{-- Pricing --}}
                        <div>
                            <label class="text-xs font-bold text-gray-700 block mb-2 flex items-center gap-2">
                                <i class="fa-solid fa-money-bill-wave text-brand-orange"></i> Set your base price
                            </label>
                            <div class="flex items-center gap-3 mb-4">
                                <div class="flex-1 relative">
                                    <div class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-500 font-bold">$</div>
                                    <input type="text" value="150" class="w-full border border-gray-200 rounded-xl pl-8 pr-4 py-4 text-xl font-bold text-gray-800 focus:outline-none focus:border-brand-orange focus:ring-1 focus:ring-brand-orange">
                                </div>
                                <span class="text-xs text-gray-500 font-medium">per<br>night</span>
                            </div>

                            {{-- Smart Tip --}}
                            <div class="bg-blue-50 border border-blue-100 rounded-xl p-4">
                                <div class="flex gap-2 text-blue-600 mb-1">
                                    <i class="fa-solid fa-lightbulb mt-0.5"></i>
                                    <span class="text-xs font-bold">Smart Price Tip</span>
                                </div>
                                <p class="text-[10px] text-blue-800/70 ml-6 leading-relaxed">
                                    Properties like yours in this area average around $135 - $160 / night. Lowering your initial price can help you get faster reviews.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-10 flex gap-3">
                        <button @click="step = 1; scrollToTop()" class="w-1/3 bg-white border border-gray-200 text-gray-600 py-4 rounded-xl font-bold shadow-sm hover:bg-gray-50 transition-colors">
                            Back
                        </button>
                        <button @click="step = 3; scrollToTop()" class="w-2/3 bg-brand-orange hover:bg-brand-orange-hover text-white py-4 rounded-xl font-bold shadow-md shadow-brand-orange/20 transition-all active:scale-[0.98] flex items-center justify-center gap-2">
                            Next Step <i class="fa-solid fa-chevron-right text-xs"></i>
                        </button>
                    </div>
                </div>

                {{-- STEP 3: Amenities & Features --}}
                <div x-show="step === 3" x-transition.opacity.duration.300ms style="display: none;">
                    <div class="mb-6">
                        <h2 class="text-2xl font-extrabold text-gray-900 mb-2">Amenities & Features</h2>
                        <p class="text-sm text-gray-500">What makes your place special?</p>
                    </div>

                    <div class="relative mb-6">
                        <input type="text" placeholder="Search amenities..." class="w-full bg-gray-50 border-none rounded-xl pl-10 pr-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-gray-200">
                        <i class="fa-solid fa-magnifying-glass absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                    </div>

                    <div class="space-y-8">
                        {{-- Essentials --}}
                        <div>
                            <h3 class="text-xs font-bold text-gray-800 mb-3 uppercase tracking-wider">Essentials</h3>
                            <div class="grid grid-cols-2 gap-3">
                                <div class="border-2 border-brand-orange bg-orange-50 text-brand-orange rounded-xl p-3 flex flex-col gap-2 cursor-pointer shadow-sm relative">
                                    <i class="fa-solid fa-wifi text-lg"></i>
                                    <span class="text-[10px] font-bold">High-speed Wifi</span>
                                    <i class="fa-solid fa-circle-check absolute top-2 right-2 text-xs"></i>
                                </div>
                                <div class="border border-gray-200 text-gray-600 hover:border-gray-300 rounded-xl p-3 flex flex-col gap-2 cursor-pointer transition-colors">
                                    <i class="fa-solid fa-snowflake text-lg"></i>
                                    <span class="text-[10px] font-bold">Air Conditioning</span>
                                </div>
                                <div class="border border-gray-200 text-gray-600 hover:border-gray-300 rounded-xl p-3 flex flex-col gap-2 cursor-pointer transition-colors">
                                    <i class="fa-solid fa-shirt text-lg"></i>
                                    <span class="text-[10px] font-bold">Washer</span>
                                </div>
                                <div class="border border-gray-200 text-gray-600 hover:border-gray-300 rounded-xl p-3 flex flex-col gap-2 cursor-pointer transition-colors">
                                    <i class="fa-solid fa-laptop text-lg"></i>
                                    <span class="text-[10px] font-bold">Dedicated Workspace</span>
                                </div>
                            </div>
                        </div>

                        {{-- Safety Features (Toggles) --}}
                        <div>
                            <h3 class="text-xs font-bold text-gray-800 mb-3 uppercase tracking-wider">Safety Features</h3>
                            <div class="space-y-4">
                                <div class="flex items-center justify-between p-4 border border-gray-100 rounded-xl bg-white shadow-sm">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 rounded-full bg-gray-50 flex items-center justify-center text-gray-600"><i class="fa-solid fa-fire-flame-simple"></i></div>
                                        <div>
                                            <div class="text-xs font-bold text-gray-800">Smoke Alarm</div>
                                            <div class="text-[9px] text-gray-500">Required for most listings</div>
                                        </div>
                                    </div>
                                    <div class="w-10 h-6 bg-blue-500 rounded-full relative cursor-pointer">
                                        <div class="w-4 h-4 bg-white rounded-full absolute right-1 top-1 shadow-sm"></div>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between p-4 border border-gray-100 rounded-xl bg-white shadow-sm">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 rounded-full bg-gray-50 flex items-center justify-center text-gray-600"><i class="fa-solid fa-fire-extinguisher"></i></div>
                                        <div>
                                            <div class="text-xs font-bold text-gray-800">Fire Extinguisher</div>
                                        </div>
                                    </div>
                                    <div class="w-10 h-6 bg-gray-200 rounded-full relative cursor-pointer">
                                        <div class="w-4 h-4 bg-white rounded-full absolute left-1 top-1 shadow-sm"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- House Rules --}}
                        <div>
                            <h3 class="text-xs font-bold text-gray-800 mb-3 uppercase tracking-wider">House Rules</h3>
                            <div class="space-y-3">
                                <div class="flex items-center justify-between">
                                    <span class="text-xs font-bold text-gray-700 flex items-center gap-2"><i class="fa-solid fa-ban-smoking w-4 text-gray-400"></i> No Smoking</span>
                                    <div class="w-8 h-5 bg-blue-500 rounded-full relative cursor-pointer">
                                        <div class="w-3 h-3 bg-white rounded-full absolute right-1 top-1 shadow-sm"></div>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-xs font-bold text-gray-700 flex items-center gap-2"><i class="fa-solid fa-paw w-4 text-gray-400"></i> Pets Allowed</span>
                                    <div class="w-8 h-5 bg-gray-200 rounded-full relative cursor-pointer">
                                        <div class="w-3 h-3 bg-white rounded-full absolute left-1 top-1 shadow-sm"></div>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-xs font-bold text-gray-700 flex items-center gap-2"><i class="fa-solid fa-champagne-glasses w-4 text-gray-400"></i> No Parties</span>
                                    <div class="w-8 h-5 bg-blue-500 rounded-full relative cursor-pointer">
                                        <div class="w-3 h-3 bg-white rounded-full absolute right-1 top-1 shadow-sm"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-10 flex gap-3">
                        <button @click="step = 2; scrollToTop()" class="w-1/3 bg-white border border-gray-200 text-gray-600 py-4 rounded-xl font-bold shadow-sm hover:bg-gray-50 transition-colors">
                            Back
                        </button>
                        <button @click="step = 4; scrollToTop()" class="w-2/3 bg-brand-orange hover:bg-brand-orange-hover text-white py-4 rounded-xl font-bold shadow-md shadow-brand-orange/20 transition-all active:scale-[0.98] flex items-center justify-center gap-2">
                            Continue
                        </button>
                    </div>
                </div>

                {{-- STEP 4: Photos & Review --}}
                <div x-show="step === 4" x-transition.opacity.duration.300ms style="display: none;">
                    <div class="mb-6">
                        <h2 class="text-2xl font-extrabold text-gray-900 mb-2">Photos & Review</h2>
                        <p class="text-sm text-gray-500">Upload photos and review your listing before submitting.</p>
                    </div>

                    <div class="space-y-6">
                        {{-- Photos Upload --}}
                        <div>
                            <div class="flex justify-between items-end mb-2">
                                <label class="text-xs font-bold text-gray-700">Property Photos</label>
                                <span class="text-[10px] text-gray-400">Min. 5 photos</span>
                            </div>
                            
                            {{-- Upload Dropzone --}}
                            <div class="border-2 border-dashed border-brand-orange/30 rounded-2xl p-6 flex flex-col items-center justify-center text-center bg-orange-50/30 hover:bg-orange-50/60 cursor-pointer transition-colors mb-4">
                                <div class="w-10 h-10 rounded-full bg-orange-100 text-brand-orange flex items-center justify-center mb-2">
                                    <i class="fa-solid fa-cloud-arrow-up"></i>
                                </div>
                                <span class="text-xs font-bold text-gray-700">Tap to upload photos</span>
                                <span class="text-[9px] text-gray-500 mt-1">JPEG, PNG max 5MB</span>
                            </div>

                            {{-- Uploaded Grid --}}
                            <div class="grid grid-cols-3 gap-2 h-48">
                                <div class="col-span-2 row-span-2 relative rounded-xl overflow-hidden group">
                                    <img src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?q=80&w=800&auto=format&fit=crop" class="w-full h-full object-cover">
                                    <div class="absolute top-2 left-2 bg-brand-orange text-white text-[8px] font-bold px-2 py-0.5 rounded-full">Cover Photo</div>
                                    <button class="absolute top-2 right-2 w-6 h-6 bg-black/50 rounded-full text-white text-xs opacity-0 group-hover:opacity-100 transition-opacity"><i class="fa-solid fa-xmark"></i></button>
                                </div>
                                <div class="relative rounded-xl overflow-hidden group">
                                    <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=400&auto=format&fit=crop" class="w-full h-full object-cover">
                                    <button class="absolute top-1 right-1 w-5 h-5 bg-black/50 rounded-full text-white text-[10px] opacity-0 group-hover:opacity-100 transition-opacity"><i class="fa-solid fa-xmark"></i></button>
                                </div>
                                <div class="relative rounded-xl overflow-hidden group">
                                    <img src="https://images.unsplash.com/photo-1600566753086-00f18efc2295?q=80&w=400&auto=format&fit=crop" class="w-full h-full object-cover">
                                    <button class="absolute top-1 right-1 w-5 h-5 bg-black/50 rounded-full text-white text-[10px] opacity-0 group-hover:opacity-100 transition-opacity"><i class="fa-solid fa-xmark"></i></button>
                                </div>
                            </div>
                        </div>

                        <hr class="border-gray-100">

                        {{-- Review Card --}}
                        <div>
                            <div class="flex justify-between items-end mb-3">
                                <label class="text-xs font-bold text-gray-700">Review Listing</label>
                                <a href="#" class="text-[10px] font-bold text-brand-orange">Edit</a>
                            </div>
                            
                            <div class="bg-white border border-gray-200 rounded-2xl p-3 flex gap-4 shadow-sm">
                                <img src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?q=80&w=400&auto=format&fit=crop" class="w-20 h-20 rounded-xl object-cover">
                                <div class="flex flex-col justify-center">
                                    <h4 class="font-bold text-gray-900 text-sm mb-1">Serene Riverfront Villa</h4>
                                    <p class="text-[10px] text-gray-500 mb-2">Villa • 4 Guests • 2 Beds</p>
                                    <div class="text-sm font-bold text-brand-orange">$150 <span class="text-[9px] text-gray-500 font-normal">/ night</span></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-10 flex flex-col gap-3">
                        <button @click="step = 5; scrollToTop()" class="w-full bg-brand-orange hover:bg-brand-orange-hover text-white py-4 rounded-xl font-bold shadow-md shadow-brand-orange/20 transition-all active:scale-[0.98]">
                            Submit for Review
                        </button>
                        <button @click="step = 3; scrollToTop()" class="w-full bg-white border border-gray-200 text-gray-600 py-3 rounded-xl text-sm font-bold shadow-sm hover:bg-gray-50 transition-colors flex items-center justify-center gap-2">
                            <i class="fa-solid fa-arrow-left"></i> Back
                        </button>
                    </div>
                </div>

                {{-- STEP 5: Success --}}
                <div x-show="step === 5" x-transition.opacity.duration.500ms style="display: none;" class="text-center pt-8 pb-10">
                    <div class="w-20 h-20 bg-orange-50 text-brand-orange rounded-full flex items-center justify-center text-4xl mx-auto mb-6 shadow-sm border-4 border-white relative">
                        <i class="fa-solid fa-check"></i>
                        <div class="absolute inset-0 rounded-full border-2 border-brand-orange animate-ping opacity-20"></div>
                    </div>
                    
                    <h2 class="text-3xl font-extrabold text-gray-900 mb-3 tracking-tight">Listing Submitted!</h2>
                    <p class="text-sm text-gray-500 mb-8 leading-relaxed max-w-sm mx-auto">
                        Your property is now being reviewed by the NginUp team. We typically verify all listings within 24 hours to ensure quality and trust.
                    </p>

                    <div class="bg-gray-50 border border-gray-100 rounded-2xl p-4 mb-8 text-left max-w-sm mx-auto">
                        <div class="flex gap-4 items-center">
                            <img src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?q=80&w=400&auto=format&fit=crop" class="w-16 h-12 rounded-lg object-cover">
                            <div>
                                <h4 class="font-bold text-gray-900 text-xs">Serene Riverfront Villa</h4>
                                <div class="flex gap-2 mt-1">
                                    <span class="px-2 py-0.5 bg-blue-100 text-blue-600 text-[8px] font-bold rounded-full">Under Review</span>
                                    <span class="text-[9px] text-gray-500">Est. < 24 hrs remaining</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col gap-3 max-w-sm mx-auto">
                        <a href="/host/dashboard" class="w-full bg-brand-orange hover:bg-brand-orange-hover text-white py-4 rounded-xl font-bold shadow-md shadow-brand-orange/20 transition-all active:scale-[0.98]">
                            Go to Dashboard
                        </a>
                        <button @click="step = 1; scrollToTop()" class="w-full bg-white border border-gray-200 text-gray-600 py-3.5 rounded-xl text-sm font-bold shadow-sm hover:bg-gray-50 transition-colors flex items-center justify-center gap-2">
                            <i class="fa-solid fa-plus"></i> Add Another Property
                        </button>
                        
                        <a href="#" class="text-[10px] text-brand-orange hover:underline mt-2">Need help? Contact Host Support</a>
                    </div>
                </div>

            </div>
        </div>

    </div>

</div>

@endsection
