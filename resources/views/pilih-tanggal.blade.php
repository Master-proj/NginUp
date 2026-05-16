<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    @vite('resources/css/app.css')
    <title>Pilih Tanggal</title>
</head>
<body class="bg-gray-50 text-[#1A1F2B]">

<div class="w-full bg-white min-h-screen flex flex-col relative shadow-sm">

    {{-- Header --}}
    <header class="flex justify-between items-center px-4 md:px-8 py-4 border-b bg-white sticky top-0 z-20">
        <div class="flex items-center gap-4">
            <a href="/home" class="text-[#9E4A1C] hover:bg-orange-50 w-10 h-10 flex items-center justify-center rounded-full transition-colors">
                <i class="fa-solid fa-arrow-left text-lg"></i>
            </a>
            <h1 class="text-lg font-semibold">Pilih Tanggal</h1>
        </div>
        <button class="text-[#9E4A1C] font-semibold text-sm hover:underline px-2">
            Reset
        </button>
    </header>

    {{-- Date Selection Summary --}}
    <div class="px-4 md:px-8 py-5 border-b bg-[#FAFAFA]">
        <div class="flex gap-4">
            <div class="flex-1 bg-white border border-[#E5D5C5] rounded-xl p-3 shadow-sm">
                <p class="text-[10px] md:text-xs text-[#8B7355] font-bold tracking-wider mb-1 uppercase">Check-In</p>
                <p class="text-[#9E4A1C] font-bold text-lg">12 Okt</p>
            </div>
            <div class="flex-1 bg-white border border-[#E5D5C5] rounded-xl p-3 shadow-sm">
                <p class="text-[10px] md:text-xs text-[#8B7355] font-bold tracking-wider mb-1 uppercase">Check-Out</p>
                <p class="text-[#9E4A1C] font-bold text-lg">15 Okt</p>
            </div>
        </div>
    </div>

    {{-- Calendar Area (Scrollable) --}}
    <div class="flex-1 overflow-y-auto px-4 md:px-8 py-6 pb-32">
        
        {{-- Desktop: Grid 3 cols, Mobile: Grid 1 col --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 md:gap-16">
            
            {{-- Month: Oktober 2023 --}}
            <div>
                <h2 class="text-gray-800 font-medium mb-6 px-2">Oktober 2023</h2>
                
                {{-- Days Header --}}
                <div class="grid grid-cols-7 mb-4 text-center">
                    <div class="text-[#8B7355] text-sm font-medium">Sn</div>
                    <div class="text-[#8B7355] text-sm font-medium">Sl</div>
                    <div class="text-[#8B7355] text-sm font-medium">Rb</div>
                    <div class="text-[#8B7355] text-sm font-medium">Km</div>
                    <div class="text-[#8B7355] text-sm font-medium">Jm</div>
                    <div class="text-[#8B7355] text-sm font-medium">Sb</div>
                    <div class="text-[#8B7355] text-sm font-medium">Mg</div>
                </div>

                {{-- Dates --}}
                <div class="grid grid-cols-7 text-center text-gray-700 gap-y-2">
                    {{-- Row 1 --}}
                    <div class="h-10"></div>
                    <div class="h-10"></div>
                    <div class="h-10"></div>
                    <div class="h-10"></div>
                    <div class="h-10"></div>
                    <div class="h-10"></div>
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">1</div>
                    
                    {{-- Row 2 --}}
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">2</div>
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">3</div>
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">4</div>
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">5</div>
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">6</div>
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">7</div>
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">8</div>

                    {{-- Row 3 --}}
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">9</div>
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">10</div>
                    
                    {{-- 11 - Current day (circled border) --}}
                    <div class="h-10 flex items-center justify-center cursor-pointer">
                        <div class="w-9 h-9 flex items-center justify-center rounded-full border-2 border-[#9E4A1C] font-semibold">11</div>
                    </div>

                    {{-- 12 - Selected Start --}}
                    <div class="h-10 flex items-center justify-center cursor-pointer relative bg-gradient-to-r from-transparent from-50% to-[#FBE9E0] to-50%">
                        <div class="w-10 h-10 flex items-center justify-center rounded-full bg-[#9E4A1C] text-white font-semibold z-10 relative shadow-md">12</div>
                    </div>

                    {{-- 13 - In range --}}
                    <div class="h-10 flex items-center justify-center cursor-pointer bg-[#FBE9E0] text-[#9E4A1C] font-medium">13</div>
                    
                    {{-- 14 - In range --}}
                    <div class="h-10 flex items-center justify-center cursor-pointer bg-[#FBE9E0] text-[#9E4A1C] font-medium">14</div>
                    
                    {{-- 15 - Selected End --}}
                    <div class="h-10 flex items-center justify-center cursor-pointer relative bg-gradient-to-r from-[#FBE9E0] from-50% to-transparent to-50%">
                        <div class="w-10 h-10 flex items-center justify-center rounded-full bg-[#9E4A1C] text-white font-semibold z-10 relative shadow-md">15</div>
                    </div>

                    {{-- Row 4 --}}
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full mt-2">16</div>
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full mt-2">17</div>
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full mt-2">18</div>
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full mt-2">19</div>
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full mt-2">20</div>
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full mt-2">21</div>
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full mt-2">22</div>

                    {{-- Row 5 --}}
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">23</div>
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">24</div>
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">25</div>
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">26</div>
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">27</div>
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">28</div>
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">29</div>

                    {{-- Row 6 --}}
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">30</div>
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">31</div>
                </div>
            </div>

            {{-- Month: November 2023 --}}
            <div>
                <h2 class="text-gray-800 font-medium mb-6 px-2">November 2023</h2>
                
                {{-- Days Header --}}
                <div class="grid grid-cols-7 mb-4 text-center">
                    <div class="text-[#8B7355] text-sm font-medium">Sn</div>
                    <div class="text-[#8B7355] text-sm font-medium">Sl</div>
                    <div class="text-[#8B7355] text-sm font-medium">Rb</div>
                    <div class="text-[#8B7355] text-sm font-medium">Km</div>
                    <div class="text-[#8B7355] text-sm font-medium">Jm</div>
                    <div class="text-[#8B7355] text-sm font-medium">Sb</div>
                    <div class="text-[#8B7355] text-sm font-medium">Mg</div>
                </div>

                {{-- Dates --}}
                <div class="grid grid-cols-7 text-center text-gray-700 gap-y-2">
                    {{-- Row 1 --}}
                    <div class="h-10"></div>
                    <div class="h-10"></div>
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">1</div>
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">2</div>
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">3</div>
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">4</div>
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">5</div>
                    
                    {{-- Row 2 --}}
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">6</div>
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">7</div>
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">8</div>
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">9</div>
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">10</div>
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">11</div>
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">12</div>

                    {{-- Row 3 --}}
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">13</div>
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">14</div>
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">15</div>
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">16</div>
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">17</div>
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">18</div>
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">19</div>

                    {{-- Row 4 --}}
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">20</div>
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">21</div>
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">22</div>
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">23</div>
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">24</div>
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">25</div>
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">26</div>

                    {{-- Row 5 --}}
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">27</div>
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">28</div>
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">29</div>
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">30</div>
                </div>
            </div>

            {{-- Month: Desember 2023 --}}
            <div class="hidden md:block">
                <h2 class="text-gray-800 font-medium mb-6 px-2">Desember 2023</h2>
                
                {{-- Days Header --}}
                <div class="grid grid-cols-7 mb-4 text-center">
                    <div class="text-[#8B7355] text-sm font-medium">Sn</div>
                    <div class="text-[#8B7355] text-sm font-medium">Sl</div>
                    <div class="text-[#8B7355] text-sm font-medium">Rb</div>
                    <div class="text-[#8B7355] text-sm font-medium">Km</div>
                    <div class="text-[#8B7355] text-sm font-medium">Jm</div>
                    <div class="text-[#8B7355] text-sm font-medium">Sb</div>
                    <div class="text-[#8B7355] text-sm font-medium">Mg</div>
                </div>

                {{-- Dates --}}
                <div class="grid grid-cols-7 text-center text-gray-700 gap-y-2">
                    {{-- Row 1 --}}
                    <div class="h-10"></div>
                    <div class="h-10"></div>
                    <div class="h-10"></div>
                    <div class="h-10"></div>
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">1</div>
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">2</div>
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">3</div>
                    
                    {{-- Row 2 --}}
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">4</div>
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">5</div>
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">6</div>
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">7</div>
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">8</div>
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">9</div>
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">10</div>

                    {{-- Row 3 --}}
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">11</div>
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">12</div>
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">13</div>
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">14</div>
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">15</div>
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">16</div>
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">17</div>

                    {{-- Row 4 --}}
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">18</div>
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">19</div>
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">20</div>
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">21</div>
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">22</div>
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">23</div>
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">24</div>

                    {{-- Row 5 --}}
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">25</div>
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">26</div>
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">27</div>
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">28</div>
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">29</div>
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">30</div>
                    <div class="h-10 flex items-center justify-center cursor-pointer hover:bg-gray-100 rounded-full">31</div>
                </div>
            </div>

        </div>

    </div>

    {{-- Bottom Action Bar --}}
    <div class="fixed bottom-0 left-0 right-0 bg-white border-t p-4 z-20 md:absolute md:rounded-b-lg">
        <button class="w-full bg-[#9E4A1C] hover:bg-[#8A3F14] text-white font-medium py-4 rounded-xl transition-colors shadow-lg">
            Simpan (3 Malam)
        </button>
    </div>

</div>

</body>
</html>
