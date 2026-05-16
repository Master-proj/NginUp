<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    @vite('resources/css/app.css')

    <title>Home</title>
    <!-- Alpine.js for Sidebar Toggle -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-[#F5F5F5]">

<div class="flex min-h-screen w-full bg-white relative overflow-hidden shadow-2xl">

    {{-- Left Sidebar (Navbar Kiri) --}}
    <aside class="w-64 bg-white border-r flex flex-col py-6 px-4 shrink-0 hidden md:flex">
        
        <div class="flex items-center gap-3 mb-10 px-2">
            <div class="w-10 h-10 flex items-center justify-center">
                <img src="{{ asset('logo_Nginup.png') }}" alt="NginUp Logo" class="w-full h-full object-contain">
            </div>
            <h1 class="text-3xl font-bold text-orange-700">
                NginUp
            </h1>
        </div>

        <nav class="flex flex-col gap-2">
            <button class="flex items-center gap-4 text-orange-600 font-semibold p-3 bg-orange-50 rounded-xl w-full text-left">
                <i class="fa-solid fa-house text-lg w-6"></i>
                Home
            </button>

            <button class="flex items-center gap-4 text-gray-500 font-semibold p-3 hover:bg-gray-50 rounded-xl transition-colors w-full text-left">
                <i class="fa-solid fa-calendar-check text-lg w-6"></i>
                Bookings
            </button>

            <button class="flex items-center gap-4 text-gray-500 font-semibold p-3 hover:bg-gray-50 rounded-xl transition-colors w-full text-left">
                <i class="fa-solid fa-gift text-lg w-6"></i>
                Rewards
            </button>

            <button class="flex items-center gap-4 text-gray-500 font-semibold p-3 hover:bg-gray-50 rounded-xl transition-colors w-full text-left">
                <i class="fa-solid fa-user text-lg w-6"></i>
                Profile
            </button>
        </nav>

        <div class="mt-auto px-2">
            <button class="flex items-center gap-4 text-gray-500 font-semibold p-3 hover:bg-gray-50 rounded-xl transition-colors w-full text-left">
                <i class="fa-solid fa-arrow-right-from-bracket text-lg w-6"></i>
                Logout
            </button>
        </div>

    </aside>

    {{-- Main Content --}}
    <main class="flex-1 flex flex-col h-screen overflow-y-auto relative">

        {{-- Mobile Top Navbar --}}
        <nav class="md:hidden flex justify-between items-center px-4 py-4 bg-white border-b">
            <button class="text-2xl text-orange-700">
                ☰
            </button>
            <h1 class="text-2xl font-bold text-orange-700">
                NginUp
            </h1>
            <div class="w-8 h-8 flex items-center justify-center">
                <img src="{{ asset('logo_Nginup.png') }}" alt="NginUp Logo" class="w-full h-full object-contain">
            </div>
        </nav>

        {{-- Hero --}}
        <section class="relative h-[400px] bg-black">

            <img
                src="{{ asset('hero.jpg') }}"
                class="w-full h-full object-cover opacity-60"
            >

            <div class="absolute inset-0 bg-black/40"></div>

            <div class="absolute top-16 md:top-24 left-0 right-0 text-center px-6">
                <h1 class="text-white text-4xl md:text-5xl font-bold leading-snug">
                    Temukan Petualangan Berikutnya
                </h1>
            </div>

            {{-- Search Box --}}
            <div class="absolute left-4 right-4 md:left-1/2 md:-translate-x-1/2 md:w-full md:max-w-md bottom-8 z-20">

                <div class="bg-white rounded-2xl shadow-xl p-4">

                    <a href="/search" class="border-b pb-3 flex items-center gap-2 w-full cursor-pointer group">

                        <i class="fa-solid fa-magnifying-glass text-gray-500 group-hover:text-orange-600 transition-colors"></i>

                        <span class="w-full outline-none text-gray-400 group-hover:text-gray-700 transition-colors">
                            Mau menginap dimana?
                        </span>

                    </a>

                    <a href="/pilih-tanggal" class="py-3 flex items-center gap-2 w-full cursor-pointer group">

                        <i class="fa-regular fa-calendar text-gray-500 group-hover:text-orange-600 transition-colors"></i>

                        <span class="w-full outline-none text-gray-400 group-hover:text-gray-700 transition-colors">
                            Pilih Tanggal
                        </span>

                    </a>

                    <button class="
                        w-full
                        bg-orange-600
                        text-white
                        py-3
                        rounded-xl
                        font-semibold
                        hover:bg-orange-700
                        transition-colors
                    ">
                        Cari
                    </button>

                </div>

            </div>

        </section>

        {{-- Category --}}
        <section class="px-6 md:px-12 mt-12">

            <div class="flex text-sm text-gray-700 overflow-x-auto gap-16 md:gap-24 pb-4 hide-scrollbar">

                <div class="flex flex-col items-center min-w-[70px] cursor-pointer group">
                    <div class="w-14 h-14 rounded-full bg-orange-50 flex items-center justify-center group-hover:bg-orange-100 transition-colors">
                        <i class="fa-solid fa-building text-xl text-orange-600"></i>
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
                <button class="text-orange-600 font-medium hover:underline">
                    Lihat Semua
                </button>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                
                {{-- Card 1 --}}
                <div class="rounded-3xl overflow-hidden shadow-lg relative group cursor-pointer">
                    <img
                        src="https://images.unsplash.com/photo-1494526585095-c41746248156?q=80&w=1200&auto=format&fit=crop"
                        class="w-full h-72 object-cover group-hover:scale-105 transition-transform duration-500"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                    <div class="absolute bottom-6 left-6 text-white">
                        <h3 class="text-2xl font-bold mb-1">
                            Skyline Loft Suite
                        </h3>
                        <p class="flex items-center gap-2 text-white/80">
                            <i class="fa-solid fa-location-dot"></i> Jakarta Pusat
                        </p>
                    </div>
                </div>

                {{-- Card 2 --}}
                <div class="rounded-3xl overflow-hidden shadow-lg relative group cursor-pointer">
                    <img
                        src="https://images.unsplash.com/photo-1573843981267-be1999ff37cd?q=80&w=1200&auto=format&fit=crop"
                        class="w-full h-72 object-cover group-hover:scale-105 transition-transform duration-500"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                    <div class="absolute bottom-6 left-6 text-white">
                        <h3 class="text-2xl font-bold mb-1">
                            Coral Bay Resort
                        </h3>
                        <p class="flex items-center gap-2 text-white/80">
                            <i class="fa-solid fa-location-dot"></i> Lombok, NTB
                        </p>
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
                <div class="flex-none w-[280px] md:w-[300px] bg-[#FEFCF9] border border-[#E5D5C5] rounded-[24px] overflow-hidden shadow-sm hover:shadow-md transition-shadow relative">
                    <div class="h-[260px] w-full relative">
                        <img
                            src="https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?q=80&w=600&auto=format&fit=crop"
                            alt="Minimalist Studio"
                            class="w-full h-full object-cover"
                        >
                        <button class="absolute top-4 right-4 w-[36px] h-[36px] bg-white rounded-full flex items-center justify-center shadow-sm text-[#A85A32] hover:scale-105 transition-transform">
                            <i class="fa-regular fa-heart text-lg"></i>
                        </button>
                    </div>
                    <div class="p-5">
                        <div class="flex justify-between items-center mb-1">
                            <h3 class="text-lg font-medium text-gray-900">
                                Minimalist Studio
                            </h3>
                            <div class="flex items-center gap-1 text-sm font-medium text-gray-900">
                                <i class="fa-solid fa-star text-[#F5B041] text-xs"></i> 4.9
                            </div>
                        </div>
                        <p class="text-sm text-[#8B7355] mb-4">
                            Gading Serpong, Tangerang
                        </p>
                        <p class="text-[#A85A32] text-xl font-medium">
                            Rp 650rb<span class="text-sm text-[#8B7355] font-normal">/malam</span>
                        </p>
                    </div>
                </div>

                {{-- Card 2 --}}
                <div class="flex-none w-[280px] md:w-[300px] bg-[#FEFCF9] border border-[#E5D5C5] rounded-[24px] overflow-hidden shadow-sm hover:shadow-md transition-shadow relative">
                    <div class="h-[260px] w-full relative">
                        <img
                            src="https://images.unsplash.com/photo-1502672260266-1c1c24240f57?q=80&w=600&auto=format&fit=crop"
                            alt="Cozy Apartment"
                            class="w-full h-full object-cover"
                        >
                        <button class="absolute top-4 right-4 w-[36px] h-[36px] bg-white rounded-full flex items-center justify-center shadow-sm text-[#A85A32] hover:scale-105 transition-transform">
                            <i class="fa-regular fa-heart text-lg"></i>
                        </button>
                    </div>
                    <div class="p-5">
                        <div class="flex justify-between items-center mb-1">
                            <h3 class="text-lg font-medium text-gray-900">
                                Cozy Apartment
                            </h3>
                            <div class="flex items-center gap-1 text-sm font-medium text-gray-900">
                                <i class="fa-solid fa-star text-[#F5B041] text-xs"></i> 4.8
                            </div>
                        </div>
                        <p class="text-sm text-[#8B7355] mb-4">
                            Sleman, Yogyakarta
                        </p>
                        <p class="text-[#A85A32] text-xl font-medium">
                            Rp 850rb<span class="text-sm text-[#8B7355] font-normal">/malam</span>
                        </p>
                    </div>
                </div>

                {{-- Card 3 --}}
                <div class="flex-none w-[280px] md:w-[300px] bg-[#FEFCF9] border border-[#E5D5C5] rounded-[24px] overflow-hidden shadow-sm hover:shadow-md transition-shadow relative">
                    <div class="h-[260px] w-full relative">
                        <img
                            src="https://images.unsplash.com/photo-1512918728675-ed5a9ecdebfd?q=80&w=600&auto=format&fit=crop"
                            alt="Urban Loft"
                            class="w-full h-full object-cover"
                        >
                        <button class="absolute top-4 right-4 w-[36px] h-[36px] bg-white rounded-full flex items-center justify-center shadow-sm text-[#A85A32] hover:scale-105 transition-transform">
                            <i class="fa-regular fa-heart text-lg"></i>
                        </button>
                    </div>
                    <div class="p-5">
                        <div class="flex justify-between items-center mb-1">
                            <h3 class="text-lg font-medium text-gray-900">
                                Urban Loft
                            </h3>
                            <div class="flex items-center gap-1 text-sm font-medium text-gray-900">
                                <i class="fa-solid fa-star text-[#F5B041] text-xs"></i> 4.7
                            </div>
                        </div>
                        <p class="text-sm text-[#8B7355] mb-4">
                            Bandung, Jawa Barat
                        </p>
                        <p class="text-[#A85A32] text-xl font-medium">
                            Rp 550rb<span class="text-sm text-[#8B7355] font-normal">/malam</span>
                        </p>
                    </div>
                </div>

                {{-- Card 4 --}}
                <div class="flex-none w-[280px] md:w-[300px] bg-[#FEFCF9] border border-[#E5D5C5] rounded-[24px] overflow-hidden shadow-sm hover:shadow-md transition-shadow relative">
                    <div class="h-[260px] w-full relative">
                        <img
                            src="https://images.unsplash.com/photo-1499793983690-e29da59ef1c2?q=80&w=600&auto=format&fit=crop"
                            alt="Beachfront Villa"
                            class="w-full h-full object-cover"
                        >
                        <button class="absolute top-4 right-4 w-[36px] h-[36px] bg-white rounded-full flex items-center justify-center shadow-sm text-[#A85A32] hover:scale-105 transition-transform">
                            <i class="fa-regular fa-heart text-lg"></i>
                        </button>
                    </div>
                    <div class="p-5">
                        <div class="flex justify-between items-center mb-1">
                            <h3 class="text-lg font-medium text-gray-900">
                                Beachfront Villa
                            </h3>
                            <div class="flex items-center gap-1 text-sm font-medium text-gray-900">
                                <i class="fa-solid fa-star text-[#F5B041] text-xs"></i> 4.9
                            </div>
                        </div>
                        <p class="text-sm text-[#8B7355] mb-4">
                            Canggu, Bali
                        </p>
                        <p class="text-[#A85A32] text-xl font-medium">
                            Rp 1.250rb<span class="text-sm text-[#8B7355] font-normal">/malam</span>
                        </p>
                    </div>
                </div>

                {{-- Card 5 --}}
                <div class="flex-none w-[280px] md:w-[300px] bg-[#FEFCF9] border border-[#E5D5C5] rounded-[24px] overflow-hidden shadow-sm hover:shadow-md transition-shadow relative">
                    <div class="h-[260px] w-full relative">
                        <img
                            src="https://images.unsplash.com/photo-1542314831-c6a4d14d8857?q=80&w=600&auto=format&fit=crop"
                            alt="Mountain Cabin"
                            class="w-full h-full object-cover"
                        >
                        <button class="absolute top-4 right-4 w-[36px] h-[36px] bg-white rounded-full flex items-center justify-center shadow-sm text-[#A85A32] hover:scale-105 transition-transform">
                            <i class="fa-regular fa-heart text-lg"></i>
                        </button>
                    </div>
                    <div class="p-5">
                        <div class="flex justify-between items-center mb-1">
                            <h3 class="text-lg font-medium text-gray-900">
                                Mountain Cabin
                            </h3>
                            <div class="flex items-center gap-1 text-sm font-medium text-gray-900">
                                <i class="fa-solid fa-star text-[#F5B041] text-xs"></i> 4.8
                            </div>
                        </div>
                        <p class="text-sm text-[#8B7355] mb-4">
                            Lembang, Bandung
                        </p>
                        <p class="text-[#A85A32] text-xl font-medium">
                            Rp 750rb<span class="text-sm text-[#8B7355] font-normal">/malam</span>
                        </p>
                    </div>
                </div>

                {{-- Card 6 --}}
                <div class="flex-none w-[280px] md:w-[300px] bg-[#FEFCF9] border border-[#E5D5C5] rounded-[24px] overflow-hidden shadow-sm hover:shadow-md transition-shadow relative">
                    <div class="h-[260px] w-full relative">
                        <img
                            src="https://images.unsplash.com/photo-1449844908441-8829872d2607?q=80&w=600&auto=format&fit=crop"
                            alt="City Center Suite"
                            class="w-full h-full object-cover"
                        >
                        <button class="absolute top-4 right-4 w-[36px] h-[36px] bg-white rounded-full flex items-center justify-center shadow-sm text-[#A85A32] hover:scale-105 transition-transform">
                            <i class="fa-regular fa-heart text-lg"></i>
                        </button>
                    </div>
                    <div class="p-5">
                        <div class="flex justify-between items-center mb-1">
                            <h3 class="text-lg font-medium text-gray-900">
                                City Center Suite
                            </h3>
                            <div class="flex items-center gap-1 text-sm font-medium text-gray-900">
                                <i class="fa-solid fa-star text-[#F5B041] text-xs"></i> 4.6
                            </div>
                        </div>
                        <p class="text-sm text-[#8B7355] mb-4">
                            SCBD, Jakarta
                        </p>
                        <p class="text-[#A85A32] text-xl font-medium">
                            Rp 950rb<span class="text-sm text-[#8B7355] font-normal">/malam</span>
                        </p>
                    </div>
                </div>

            </div>

        </section>

    </main>

    {{-- Bottom Navigation for Mobile --}}
    <nav class="md:hidden fixed bottom-0 left-0 right-0 bg-white border-t flex justify-around py-3 z-50">
        <button class="flex flex-col items-center gap-1 text-orange-600">
            <i class="fa-solid fa-house text-xl"></i>
            <span class="text-xs font-semibold">Home</span>
        </button>
        <button class="flex flex-col items-center gap-1 text-gray-400 hover:text-gray-600">
            <i class="fa-solid fa-calendar-check text-xl"></i>
            <span class="text-xs">Bookings</span>
        </button>
        <button class="flex flex-col items-center gap-1 text-gray-400 hover:text-gray-600">
            <i class="fa-solid fa-gift text-xl"></i>
            <span class="text-xs">Rewards</span>
        </button>
        <button class="flex flex-col items-center gap-1 text-gray-400 hover:text-gray-600">
            <i class="fa-solid fa-user text-xl"></i>
            <span class="text-xs">Profile</span>
        </button>
    </nav>

</div>

<style>
    /* Hide scrollbar for Chrome, Safari and Opera */
    .hide-scrollbar::-webkit-scrollbar {
        display: none;
    }
    /* Hide scrollbar for IE, Edge and Firefox */
    .hide-scrollbar {
        -ms-overflow-style: none;  /* IE and Edge */
        scrollbar-width: none;  /* Firefox */
    }
</style>

</body>
</html>