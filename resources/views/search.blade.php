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
            <input type="text" placeholder="Cari destinasi atau penginapan..." class="w-full bg-transparent outline-none text-gray-800 text-sm md:text-base placeholder-gray-500 font-medium">
            <i class="fa-solid fa-microphone text-gray-500 ml-3 text-lg"></i>
        </div>
    </header>

    <div class="flex-1 overflow-y-auto pb-32">
        
        {{-- Saran Lokasi --}}
        <section class="px-5 md:px-8 py-6">
            <h2 class="text-xl md:text-2xl font-bold text-gray-900 mb-5">Saran Lokasi</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="flex items-center gap-4 cursor-pointer hover:bg-gray-50 p-2 -mx-2 md:mx-0 md:p-4 rounded-xl md:border md:border-gray-100 transition-colors">
                    <div class="w-12 h-12 rounded-xl bg-[#D0EDF4] flex items-center justify-center text-[#218A9C] shrink-0">
                        <i class="fa-solid fa-location-dot text-xl"></i>
                    </div>
                    <div>
                        <h3 class="text-base font-bold text-gray-900">Seminyak, Bali</h3>
                        <p class="text-sm text-gray-500 mt-0.5">Kecamatan Kuta, Kabupaten Badung</p>
                    </div>
                </div>
                <div class="flex items-center gap-4 cursor-pointer hover:bg-gray-50 p-2 -mx-2 md:mx-0 md:p-4 rounded-xl md:border md:border-gray-100 transition-colors">
                    <div class="w-12 h-12 rounded-xl bg-[#D0EDF4] flex items-center justify-center text-[#218A9C] shrink-0">
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
                <button class="text-[#A85A32] text-sm font-bold hover:underline">Hapus</button>
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
                    <div class="absolute top-4 right-4 bg-[#B2531B] text-white text-[10px] md:text-xs font-bold px-3 py-1.5 rounded-full uppercase tracking-wider shadow-md">
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

    {{-- Bottom Navigation --}}
    <nav class="fixed bottom-0 left-0 right-0 w-full bg-white border-t flex justify-around py-3 z-50">
        <button class="flex flex-col items-center gap-1 text-[#D0EDF4]">
            <div class="w-16 h-8 bg-[#D0EDF4] rounded-full flex items-center justify-center">
                <i class="fa-solid fa-magnifying-glass text-[#218A9C] text-lg"></i>
            </div>
            <span class="text-xs font-semibold text-gray-800">Explore</span>
        </button>
        <button class="flex flex-col items-center gap-1 text-gray-500 hover:text-gray-700 mt-1">
            <i class="fa-regular fa-heart text-xl"></i>
            <span class="text-xs font-medium">Saved</span>
        </button>
        <button class="flex flex-col items-center gap-1 text-gray-500 hover:text-gray-700 mt-1">
            <i class="fa-brands fa-airbnb text-xl"></i>
            <span class="text-xs font-medium">Trips</span>
        </button>
        <button class="flex flex-col items-center gap-1 text-gray-500 hover:text-gray-700 mt-1">
            <i class="fa-regular fa-user text-xl"></i>
            <span class="text-xs font-medium">Profile</span>
        </button>
    </nav>

</div>

</body>
</html>
