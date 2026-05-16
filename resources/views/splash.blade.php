<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    @vite('resources/css/app.css')

    <title>NginUp</title>
</head>
<body>

<div class="h-screen bg-[#F4F4F4] flex flex-col justify-center items-center relative">

    {{-- Logo --}}
    <div class="flex flex-col items-center">

        <div class="w-24 h-24">
            <img src="{{ asset('logo_Nginup.png') }}" alt="NginUp Logo" class="w-full h-full object-contain">
        </div>

        <h1 class="text-4xl font-bold text-orange-700 mt-4">
            NginUp
        </h1>

        {{-- Loading --}}
        <div class="w-40 h-1 bg-gray-300 rounded-full mt-8 overflow-hidden">
            <div class="w-24 h-full bg-orange-600 rounded-full"></div>
        </div>

    </div>

    {{-- Bottom Text --}}
    <div class="absolute bottom-16 text-center">

        <p class="text-gray-500 text-sm">
            Temukan Kenyamanan Menginap Anda
        </p>

        <p class="text-gray-400 text-xs tracking-widest mt-2">
            SECURING YOUR STAY...
        </p>

    </div>

</div>

<script>
    setTimeout(() => {
        window.location.href = "/home"
    }, 2500)
</script>

</body>
</html>