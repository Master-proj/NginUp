<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    @vite('resources/css/app.css')
    <title>Search</title>
</head>
<body class="bg-gray-50 text-[#1A1F2B]">

<div class="w-full bg-white min-h-screen flex flex-col relative shadow-sm">

    {{-- Header --}}
    <header class="flex items-center gap-3 px-4 md:px-8 py-4 border-b bg-white sticky top-0 z-20">
        <a href="/home" class="text-gray-700 hover:bg-gray-100 w-10 h-10 flex items-center justify-center rounded-full transition-colors shrink-0">
            <i class="fa-solid fa-arrow-left text-lg"></i>
        </a>
        <div class="flex-1 bg-[#F5F5F5] rounded-xl flex items-center px-4 py-3 md:py-4">
            <i class="fa-solid fa-magnifying-glass text-gray-500 mr-3 text-lg"></i>
            <input type="text" id="search-input" placeholder="Cari destinasi atau penginapan..." class="w-full bg-transparent outline-none text-gray-800 text-sm md:text-base placeholder-gray-500 font-medium">
            <i class="fa-solid fa-microphone text-gray-500 ml-3 text-lg"></i>
        </div>
    </header>

    <div class="flex-1 overflow-y-auto pb-32">
        
        <div id="default-content">
        {{-- Saran Lokasi --}}
        <section class="px-5 md:px-8 py-6">
            <h2 class="text-xl md:text-2xl font-bold text-gray-900 mb-5">Saran Lokasi</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="flex items-center gap-4 cursor-pointer hover:bg-gray-50 p-2 -mx-2 md:mx-0 md:p-4 rounded-xl md:border md:border-gray-100 transition-colors">
                    <div class="w-12 h-12 rounded-xl bg-brand-green/10 flex items-center justify-center text-brand-green shrink-0">
                        <i class="fa-solid fa-location-dot text-xl"></i>
                    </div>
                    <div>
                        <h3 class="text-base font-bold text-gray-900">Seminyak, Bali</h3>
                        <p class="text-sm text-gray-500 mt-0.5">Kecamatan Kuta, Kabupaten Badung</p>
                    </div>
                </div>
                <div class="flex items-center gap-4 cursor-pointer hover:bg-gray-50 p-2 -mx-2 md:mx-0 md:p-4 rounded-xl md:border md:border-gray-100 transition-colors">
                    <div class="w-12 h-12 rounded-xl bg-brand-green/10 flex items-center justify-center text-brand-green shrink-0">
                        <i class="fa-solid fa-location-dot text-xl"></i>
                    </div>
                    <div>
                        <h3 class="text-base font-bold text-gray-900">Ubud, Bali</h3>
                        <p class="text-sm text-gray-500 mt-0.5">Kabupaten Gianyar, Bali</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- Pencarian Terakhir --}}
        <section class="px-5 md:px-8 py-4">
            <div class="flex justify-between items-center mb-5">
                <h2 class="text-xl md:text-2xl font-bold text-gray-900">Pencarian Terakhir</h2>
                <button class="text-brand-orange text-sm font-bold hover:underline">Hapus</button>
            </div>
            <div class="flex flex-wrap gap-3">
                <div class="flex items-center gap-2 border border-gray-200 rounded-full px-5 py-2.5 cursor-pointer hover:bg-gray-50 transition-colors">
                    <i class="fa-solid fa-clock-rotate-left text-gray-500 text-sm"></i>
                    <span class="text-sm font-semibold text-gray-700">Bali</span>
                </div>
                <div class="flex items-center gap-2 border border-gray-200 rounded-full px-5 py-2.5 cursor-pointer hover:bg-gray-50 transition-colors">
                    <i class="fa-solid fa-clock-rotate-left text-gray-500 text-sm"></i>
                    <span class="text-sm font-semibold text-gray-700">Bandung</span>
                </div>
                <div class="flex items-center gap-2 border border-gray-200 rounded-full px-5 py-2.5 cursor-pointer hover:bg-gray-50 transition-colors">
                    <i class="fa-solid fa-clock-rotate-left text-gray-500 text-sm"></i>
                    <span class="text-sm font-semibold text-gray-700">Yogyakarta</span>
                </div>
            </div>
        </section>

        {{-- Destinasi Populer --}}
        <section class="px-5 md:px-8 py-8">
            <h2 class="text-xl md:text-2xl font-bold text-gray-900 mb-5">Destinasi Populer</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6">
                
                {{-- Card 1 --}}
                <div class="rounded-2xl overflow-hidden relative h-[240px] md:h-[300px] cursor-pointer group shadow-sm">
                    <img src="https://images.unsplash.com/photo-1537996194471-e657df975ab4?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                    <div class="absolute top-4 right-4 bg-brand-orange text-white text-[10px] md:text-xs font-bold px-3 py-1.5 rounded-full uppercase tracking-wider shadow-md">
                        Trending
                    </div>
                    <div class="absolute bottom-5 left-5">
                        <h3 class="text-white text-2xl font-bold">Bali</h3>
                    </div>
                </div>

                {{-- Card 2 --}}
                <div class="rounded-2xl overflow-hidden relative h-[240px] md:h-[300px] cursor-pointer group shadow-sm">
                    <img src="https://images.unsplash.com/photo-1582298653637-2338bd486a42?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                    <div class="absolute bottom-5 left-5">
                        <h3 class="text-white text-2xl font-bold">Lombok</h3>
                    </div>
                </div>

                {{-- Card 3 (Desktop Only to fill grid) --}}
                <div class="hidden md:block rounded-2xl overflow-hidden relative h-[300px] cursor-pointer group shadow-sm">
                    <img src="https://images.unsplash.com/photo-1513415564515-763d91423bdd?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                    <div class="absolute bottom-5 left-5">
                        <h3 class="text-white text-2xl font-bold">Yogyakarta</h3>
                    </div>
                </div>

                {{-- Card 4 (Desktop Only to fill grid) --}}
                <div class="hidden md:block rounded-2xl overflow-hidden relative h-[300px] cursor-pointer group shadow-sm">
                    <img src="https://images.unsplash.com/photo-1549473889-14f410d83298?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                    <div class="absolute bottom-5 left-5">
                        <h3 class="text-white text-2xl font-bold">Bandung</h3>
                    </div>
                </div>

            </div>
        </section>
        </div>

        {{-- Search Results --}}
        <div id="search-results" class="hidden px-4 md:px-8 py-6">
            <!-- Header Area for Results -->
            <div class="flex justify-between items-start mb-6">
                <div>
                    <h1 class="text-2xl font-bold text-[#1A1F2B]">Stay in Nairobi</h1>
                    <p class="text-sm text-gray-500">128 properties available &bull; Oct 12 - 19</p>
                </div>
                <div class="w-10 h-10 bg-[#F0F4F8] rounded-full flex items-center justify-center text-[#4A5568]">
                    <i class="fa-solid fa-map"></i>
                </div>
            </div>

            <!-- Filters -->
            <div class="flex gap-2 overflow-x-auto pb-2 mb-6" style="scrollbar-width: none;">
                <button class="flex items-center gap-2 bg-brand-green text-white px-4 py-2 rounded-full text-sm font-medium shrink-0">
                    <i class="fa-solid fa-sliders"></i> Filters
                </button>
                <button class="bg-white border border-gray-200 text-gray-700 px-4 py-2 rounded-full text-sm font-medium shrink-0">
                    Price
                </button>
                <button class="bg-white border border-gray-200 text-gray-700 px-4 py-2 rounded-full text-sm font-medium shrink-0">
                    Property type
                </button>
                <button class="bg-white border border-gray-200 text-gray-700 px-4 py-2 rounded-full text-sm font-medium shrink-0">
                    Rating
                </button>
            </div>

            <!-- Properties List -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Card 1 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                    <a href="/detail" class="relative h-56 block">
                        <img src="/images/giraffe_view_suite.png" class="w-full h-full object-cover">
                        <div class="absolute top-3 left-3 bg-white px-2 py-1 rounded-md flex items-center gap-1 text-[10px] font-bold text-gray-800 shadow-sm uppercase">
                            <i class="fa-solid fa-circle-check text-brand-orange"></i> Verified Host
                        </div>
                        <button onclick="event.preventDefault(); event.stopPropagation();" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-black/20 flex items-center justify-center text-white backdrop-blur-sm transition-colors hover:bg-black/40">
                            <i class="fa-regular fa-heart"></i>
                        </button>
                    </a>
                    <div class="p-4">
                        <div class="flex justify-between items-start mb-1">
                            <h3 class="text-lg font-bold text-gray-900 line-clamp-1">The Giraffe View Suite</h3>
                            <div class="flex items-center gap-1 bg-brand-green/10 text-brand-green px-2 py-0.5 rounded text-xs font-bold shrink-0">
                                <i class="fa-solid fa-star text-[10px]"></i> 4.92
                            </div>
                        </div>
                        <p class="text-sm text-gray-500 mb-3">Lavington, Nairobi</p>
                        <div class="flex flex-wrap gap-x-4 gap-y-2 text-xs text-gray-600 mb-4">
                            <span class="flex items-center gap-1"><i class="fa-solid fa-bed"></i> 2 Beds</span>
                            <span class="flex items-center gap-1"><i class="fa-solid fa-wifi"></i> Free WiFi</span>
                            <span class="flex items-center gap-1"><i class="fa-solid fa-water-ladder"></i> Pool</span>
                        </div>
                        <div class="flex justify-between items-center mt-2 border-t pt-4">
                            <div>
                                <span class="text-xl font-bold text-brand-orange">$120</span>
                                <span class="text-xs text-gray-500">/ night</span>
                            </div>
                            <a href="/detail" class="bg-brand-orange text-white px-5 py-2 rounded-lg text-sm font-semibold hover:bg-brand-orange-hover transition-colors inline-block text-center">
                                Book Now
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Card 2 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                    <a href="/detail" class="relative h-56 block">
                        <img src="/images/skyline_loft.png" class="w-full h-full object-cover">
                        <div class="absolute top-3 left-3 bg-white px-2 py-1 rounded-md flex items-center gap-1 text-[10px] font-bold text-gray-800 shadow-sm uppercase">
                            <i class="fa-solid fa-circle-check text-brand-orange"></i> Verified Host
                        </div>
                        <button onclick="event.preventDefault(); event.stopPropagation();" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-black/20 flex items-center justify-center text-white backdrop-blur-sm transition-colors hover:bg-black/40">
                            <i class="fa-regular fa-heart"></i>
                        </button>
                    </a>
                    <div class="p-4">
                        <div class="flex justify-between items-start mb-1">
                            <h3 class="text-lg font-bold text-gray-900 line-clamp-1">Skyline Executive Loft</h3>
                            <div class="flex items-center gap-1 bg-brand-green/10 text-brand-green px-2 py-0.5 rounded text-xs font-bold shrink-0">
                                <i class="fa-solid fa-star text-[10px]"></i> 4.85
                            </div>
                        </div>
                        <p class="text-sm text-gray-500 mb-3">Westlands, Nairobi</p>
                        <div class="flex flex-wrap gap-x-4 gap-y-2 text-xs text-gray-600 mb-4">
                            <span class="flex items-center gap-1"><i class="fa-solid fa-house"></i> Entire Apt</span>
                            <span class="flex items-center gap-1"><i class="fa-solid fa-square-parking"></i> Parking</span>
                            <span class="flex items-center gap-1"><i class="fa-solid fa-dumbbell"></i> Gym</span>
                        </div>
                        <div class="flex justify-between items-center mt-2 border-t pt-4">
                            <div>
                                <span class="text-xl font-bold text-brand-orange">$85</span>
                                <span class="text-xs text-gray-500">/ night</span>
                            </div>
                            <a href="/detail" class="bg-brand-orange text-white px-5 py-2 rounded-lg text-sm font-semibold hover:bg-brand-orange-hover transition-colors inline-block text-center">
                                Book Now
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                    <a href="/detail" class="relative h-56 block">
                        <img src="/images/karen_cottage.png" class="w-full h-full object-cover">
                        <button onclick="event.preventDefault(); event.stopPropagation();" class="absolute top-3 right-3 w-8 h-8 rounded-full bg-black/20 flex items-center justify-center text-white backdrop-blur-sm transition-colors hover:bg-black/40">
                            <i class="fa-regular fa-heart"></i>
                        </button>
                    </a>
                    <div class="p-4">
                        <div class="flex justify-between items-start mb-1">
                            <h3 class="text-lg font-bold text-gray-900 line-clamp-1">Karen Garden Cottage</h3>
                            <div class="flex items-center gap-1 bg-brand-green/10 text-brand-green px-2 py-0.5 rounded text-xs font-bold shrink-0">
                                <i class="fa-solid fa-star text-[10px]"></i> 4.98
                            </div>
                        </div>
                        <p class="text-sm text-gray-500 mb-3">Karen, Nairobi</p>
                        <div class="flex flex-wrap gap-x-4 gap-y-2 text-xs text-gray-600 mb-4">
                            <span class="flex items-center gap-1"><i class="fa-solid fa-house-chimney"></i> Cottage</span>
                            <span class="flex items-center gap-1"><i class="fa-solid fa-fire"></i> Fireplace</span>
                        </div>
                        <div class="flex justify-between items-center mt-2 border-t pt-4">
                            <div>
                                <span class="text-xl font-bold text-brand-orange">$150</span>
                                <span class="text-xs text-gray-500">/ night</span>
                            </div>
                            <a href="/detail" class="bg-brand-orange text-white px-5 py-2 rounded-lg text-sm font-semibold hover:bg-brand-orange-hover transition-colors inline-block text-center">
                                Book Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('search-input');
            const defaultContent = document.getElementById('default-content');
            const searchResults = document.getElementById('search-results');

            searchInput.addEventListener('input', function(e) {
                if (e.target.value.toLowerCase().includes('nairobi')) {
                    defaultContent.classList.add('hidden');
                    searchResults.classList.remove('hidden');
                } else {
                    defaultContent.classList.remove('hidden');
                    searchResults.classList.add('hidden');
                }
            });
        });
    </script>


</div>

</body>
</html>
