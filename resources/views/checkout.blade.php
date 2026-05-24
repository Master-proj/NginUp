<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    @vite('resources/css/app.css')
    <title>Checkout - NginUp</title>
    <style>
        /* Payment Success Panel */
        #payment-success {
            display: none;
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.4s ease, transform 0.4s ease;
        }
        #payment-success.show {
            display: flex;
            flex-direction: column;
            opacity: 1;
            transform: translateY(0);
        }

        /* Checkout Panel */
        #checkout-panel {
            transition: opacity 0.3s ease, transform 0.3s ease;
        }
        #checkout-panel.hide {
            opacity: 0;
            transform: translateY(-16px);
            pointer-events: none;
        }

        /* Checkmark animation */
        @keyframes scaleIn {
            0% { transform: scale(0); opacity: 0; }
            60% { transform: scale(1.2); }
            100% { transform: scale(1); opacity: 1; }
        }
        .check-anim {
            animation: scaleIn 0.5s cubic-bezier(.36,.07,.19,.97) forwards;
        }

        /* Payment method radio style */
        .payment-option { cursor: pointer; }
        .payment-option input[type="radio"] { display: none; }
        .payment-option input[type="radio"]:checked + .payment-card {
            border-color: #E9631A;
            background-color: rgba(233,99,26,0.04);
        }
        .payment-option input[type="radio"]:checked + .payment-card .pay-icon {
            background-color: rgba(233,99,26,0.15);
            color: #E9631A;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800 min-h-screen">

    {{-- ====================== CHECKOUT PANEL ====================== --}}
    <div id="checkout-panel">

        {{-- Navbar --}}
        <nav class="flex justify-between items-center px-4 md:px-12 py-4 bg-white border-b sticky top-0 z-50 shadow-sm">
            <a href="/detail" class="flex items-center gap-2 text-gray-500 hover:text-brand-orange transition-colors">
                <i class="fa-solid fa-arrow-left text-xl"></i>
            </a>
            <a href="/home" class="text-2xl font-bold text-brand-orange-hover tracking-tight">NginUp</a>
            <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=100&auto=format&fit=crop"
                 class="w-9 h-9 rounded-full object-cover border-2 border-white shadow">
        </nav>

        <main class="max-w-7xl mx-auto px-4 md:px-12 mt-6 md:mt-10 mb-32">

            <div class="md:grid md:grid-cols-12 md:gap-8 lg:gap-12 items-start">

                {{-- ======= Left Column: Property + Payment Methods ======= --}}
                <div class="md:col-span-7">

                    {{-- Property Summary Card --}}
                    <div class="bg-white border border-gray-100 rounded-3xl overflow-hidden shadow-sm mb-8">
                        <div class="h-52 w-full relative">
                            <img src="https://images.unsplash.com/photo-1540541338287-41700207dee6?q=80&w=800&auto=format&fit=crop"
                                 class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
                        </div>
                        <div class="p-5 md:p-6">
                            <span class="bg-brand-orange/10 text-brand-orange text-[10px] md:text-xs font-bold px-3 py-1 rounded-full inline-block mb-3">
                                Properti Terverifikasi
                            </span>
                            <h2 class="text-xl md:text-2xl font-bold text-gray-900 mb-4 leading-tight">
                                Luxury Eco-Retreat: Ubud Highlands
                            </h2>
                            <div class="flex items-center text-sm text-gray-600 border-t border-gray-100 pt-4">
                                <div class="flex items-center gap-2 flex-1 border-r border-gray-100 pr-4">
                                    <i class="fa-regular fa-calendar text-brand-green"></i>
                                    <div>
                                        <p class="text-xs md:text-sm font-semibold text-gray-800">12 Okt – 15 Okt 2023</p>
                                        <p class="text-[10px] md:text-xs text-gray-400">3 Malam</p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-2 pl-4">
                                    <i class="fa-solid fa-user-group text-brand-green"></i>
                                    <p class="text-xs md:text-sm font-semibold text-gray-800">2 Tamu</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Payment Methods --}}
                    <h2 class="text-xl md:text-2xl font-bold text-gray-900 mb-5">Metode Pembayaran</h2>

                    <div class="space-y-3 mb-8 md:mb-0" id="payment-methods">

                        {{-- Virtual Account --}}
                        <label class="payment-option block">
                            <input type="radio" name="payment" value="va" checked>
                            <div class="payment-card flex items-center p-4 md:p-5 border-2 border-brand-orange bg-brand-orange/5 rounded-2xl transition-all duration-200">
                                <div class="pay-icon w-12 h-12 bg-brand-orange/15 text-brand-orange rounded-xl flex items-center justify-center shrink-0 transition-all duration-200">
                                    <i class="fa-solid fa-building-columns text-base"></i>
                                </div>
                                <div class="ml-4 flex-1">
                                    <h3 class="font-bold text-gray-900 text-sm md:text-base">Virtual Account</h3>
                                    <p class="text-xs md:text-sm text-gray-500 mt-0.5">BCA, Mandiri, BNI</p>
                                </div>
                                <i class="fa-solid fa-circle-check text-brand-orange text-lg"></i>
                            </div>
                        </label>

                        {{-- E-Wallet --}}
                        <label class="payment-option block">
                            <input type="radio" name="payment" value="ewallet">
                            <div class="payment-card flex items-center p-4 md:p-5 border-2 border-transparent hover:border-gray-200 bg-white rounded-2xl shadow-sm transition-all duration-200">
                                <div class="pay-icon w-12 h-12 bg-gray-100 text-brand-green rounded-xl flex items-center justify-center shrink-0 transition-all duration-200">
                                    <i class="fa-solid fa-wallet text-base"></i>
                                </div>
                                <div class="ml-4 flex-1">
                                    <h3 class="font-bold text-gray-900 text-sm md:text-base">E-Wallet</h3>
                                    <p class="text-xs md:text-sm text-gray-500 mt-0.5">GoPay, OVO, ShopeePay</p>
                                </div>
                            </div>
                        </label>

                        {{-- Kartu Kredit --}}
                        <label class="payment-option block">
                            <input type="radio" name="payment" value="cc">
                            <div class="payment-card flex items-center p-4 md:p-5 border-2 border-transparent hover:border-gray-200 bg-white rounded-2xl shadow-sm transition-all duration-200">
                                <div class="pay-icon w-12 h-12 bg-gray-100 text-brand-green rounded-xl flex items-center justify-center shrink-0 transition-all duration-200">
                                    <i class="fa-regular fa-credit-card text-base"></i>
                                </div>
                                <div class="ml-4 flex-1">
                                    <h3 class="font-bold text-gray-900 text-sm md:text-base">Kartu Kredit</h3>
                                    <p class="text-xs md:text-sm text-gray-500 mt-0.5">Visa, Mastercard, JCB</p>
                                </div>
                            </div>
                        </label>

                    </div>
                </div>

                {{-- ======= Right Column: Price Summary + Pay Button ======= --}}
                <div class="md:col-span-5 md:sticky md:top-24 mt-8 md:mt-0">

                    {{-- Rincian Transparansi --}}
                    <div class="bg-white rounded-3xl p-6 md:p-8 mb-5 border border-gray-100 shadow-sm">
                        <div class="flex items-center gap-2 mb-6">
                            <i class="fa-solid fa-receipt text-brand-green"></i>
                            <h3 class="font-bold text-xl text-gray-900">Rincian Transparansi</h3>
                        </div>

                        <div class="space-y-4 text-sm md:text-base mb-6">
                            <div class="flex justify-between text-gray-600">
                                <span>Harga Sewa (3 Malam)</span>
                                <span class="font-bold text-gray-900">Rp 4.500.000</span>
                            </div>
                            <div class="flex justify-between text-gray-600">
                                <span>Biaya Layanan Platform</span>
                                <span class="font-bold text-gray-900">Rp 125.000</span>
                            </div>
                            <div class="flex justify-between text-gray-600">
                                <span>Pajak (VAT 11%)</span>
                                <span class="font-bold text-gray-900">Rp 508.750</span>
                            </div>
                        </div>

                        <div class="border-t border-dashed border-gray-200 pt-5 mb-6">
                            <div class="flex justify-between items-start">
                                <div class="text-sm">
                                    <span class="font-bold text-brand-green">Kontribusi Komunitas</span>
                                    <p class="text-xs text-gray-400 mt-1.5 max-w-[200px] leading-relaxed">
                                        2% dari biaya layanan disalurkan untuk pelestarian budaya lokal Ubud.
                                    </p>
                                </div>
                                <span class="font-bold text-brand-green text-sm text-right">+ Rp<br>2.500</span>
                            </div>
                        </div>

                        <div class="bg-gray-50 rounded-2xl p-5 flex items-center justify-between border border-gray-100">
                            <span class="font-bold text-gray-600 text-base md:text-lg">Total Pembayaran</span>
                            <span class="text-2xl md:text-3xl font-bold text-brand-orange">Rp 5.136.250</span>
                        </div>
                    </div>

                    {{-- Pay Button + Disclaimer --}}
                    <div class="bg-white border border-gray-100 shadow-sm rounded-3xl p-6 md:p-8">

                        {{-- Security badge --}}
                        <div class="flex items-start gap-3 bg-blue-50 rounded-2xl p-4 mb-5 text-xs text-gray-600 leading-relaxed">
                            <i class="fa-solid fa-shield-halved text-brand-green mt-0.5 text-base shrink-0"></i>
                            <span>Transaksi Anda dilindungi oleh enkripsi 256-bit dan garansi kenyamanan NginUp.</span>
                        </div>

                        <button
                            id="btn-bayar"
                            onclick="showPaymentSuccess()"
                            class="w-full bg-brand-orange hover:bg-brand-orange-hover active:scale-[0.98] text-white font-bold py-4 md:py-5 rounded-xl transition-all duration-200 text-lg mb-4 shadow-lg shadow-orange-900/20"
                        >
                            <i class="fa-solid fa-lock mr-2 text-sm"></i>
                            Bayar Sekarang
                        </button>

                        <p class="text-xs text-gray-400 text-center leading-relaxed">
                            Dengan mengklik 'Bayar Sekarang', Anda menyetujui<br>
                            <a href="#" class="text-brand-orange hover:underline font-medium">Syarat &amp; Ketentuan</a>
                            serta Kebijakan Privasi kami.
                        </p>
                    </div>

                </div>
            </div>
        </main>
    </div>

    {{-- ====================== PAYMENT SUCCESS PANEL ====================== --}}
    <div id="payment-success" class="min-h-screen bg-gray-100"
         style="display:none; flex-direction:column;">

        <div style="max-width:360px; margin:0 auto; min-height:100vh; background:#fff; display:flex; flex-direction:column; justify-content:space-between;">

            {{-- Header --}}
            <div style="padding:16px 20px; display:flex; justify-content:space-between; align-items:center;">
                <div style="font-size:26px; font-weight:bold; color:#b35300;">
                    Ngin<span style="color:#ff7b00;">Up</span>
                </div>
                <div style="width:34px; height:34px; border-radius:50%; overflow:hidden; background:#ddd;">
                    <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=100&auto=format&fit=crop"
                         style="width:100%; height:100%; object-fit:cover;">
                </div>
            </div>

            {{-- Content --}}
            <div style="padding:10px 20px 20px; text-align:center; flex:1;">

                {{-- Checkmark Icon --}}
                <div class="check-anim" style="
                    width:72px; height:72px; margin:10px auto 20px;
                    background:#b35300; border-radius:50%;
                    display:flex; align-items:center; justify-content:center;
                    box-shadow:0 4px 10px rgba(0,0,0,0.15);
                ">
                    <div style="
                        width:28px; height:28px; border-radius:50%;
                        border:2px solid white;
                        display:flex; align-items:center; justify-content:center;
                        color:white; font-size:16px; font-weight:bold;
                    ">✓</div>
                </div>

                {{-- Title --}}
                <div style="font-size:28px; font-weight:bold; color:#222; margin-bottom:10px;">
                    Pembayaran Berhasil!
                </div>

                {{-- Description --}}
                <div style="font-size:14px; color:#777; line-height:1.6; margin-bottom:28px;">
                    Transaksi Anda telah dikonfirmasi. Tiket elektronik<br>telah dikirimkan ke email Anda.
                </div>

                {{-- Summary Card --}}
                <div style="background:#f6f4f4; border-radius:12px; padding:18px; text-align:left; margin-bottom:28px;">

                    <div style="font-size:12px; color:#888; margin-bottom:16px; font-weight:bold; letter-spacing:0.05em;">
                        RINGKASAN TRANSAKSI
                    </div>

                    <div style="display:flex; justify-content:space-between; margin-bottom:14px; font-size:14px;">
                        <span style="color:#777;">ID Pesanan</span>
                        <span style="font-weight:bold; color:#333;">#NGIN-88294401</span>
                    </div>

                    <div style="display:flex; justify-content:space-between; margin-bottom:18px; font-size:14px;">
                        <span style="color:#777;">Metode Bayar</span>
                        <span style="color:#333;" id="selected-payment">Virtual Account BCA</span>
                    </div>

                    <div style="border-top:1px solid #ddd; padding-top:14px; display:flex; justify-content:space-between; align-items:center;">
                        <span style="font-size:14px; color:#777;">Total Bayar</span>
                        <span style="color:#c15a00; font-size:28px; font-weight:bold;">Rp 5.136.250</span>
                    </div>

                </div>

                {{-- Buttons --}}
                <a href="/bookings" style="
                    display:block; width:100%; padding:14px;
                    border:none; border-radius:10px;
                    background:#b35300; color:white;
                    font-size:15px; font-weight:bold;
                    cursor:pointer; margin-bottom:14px;
                    text-decoration:none; text-align:center;
                    box-sizing:border-box;
                ">Lihat Tiket / Pesanan</a>

                <a href="/home" style="
                    display:block; width:100%; padding:14px;
                    border:2px solid #8da1ab; border-radius:10px;
                    background:white; color:#4f5f66;
                    font-size:15px; font-weight:500;
                    cursor:pointer; text-decoration:none;
                    text-align:center; box-sizing:border-box;
                ">Kembali ke Beranda</a>

            </div>

            {{-- Footer --}}
            <div style="text-align:center; padding:20px; font-size:11px; color:#999; line-height:1.8;">
                <div>🛡️ Transaksi Aman &amp; Terenkripsi oleh NginUp Security</div>
                <div>© 2024 NginUp Hospitality Group. Semua hak dilindungi.</div>
            </div>

        </div>
    </div>

    <script>
        // ─── Payment method radio UX ──────────────────────────────────────
        document.querySelectorAll('.payment-option input[type="radio"]').forEach(radio => {
            radio.addEventListener('change', () => {
                // Reset all cards
                document.querySelectorAll('.payment-card').forEach(card => {
                    card.classList.remove('border-brand-orange', 'bg-brand-orange/5');
                    card.classList.add('border-transparent');
                    card.querySelector('.pay-icon')?.classList.replace('bg-brand-orange/15', 'bg-gray-100');
                    card.querySelector('.pay-icon')?.classList.replace('text-brand-orange', 'text-brand-green');
                    // Hide check icons
                    const check = card.querySelector('.fa-circle-check');
                    if (check) check.style.display = 'none';
                });

                // Activate selected card
                const selected = radio.nextElementSibling;
                selected.classList.add('border-brand-orange', 'bg-brand-orange/5');
                selected.classList.remove('border-transparent');
                const icon = selected.querySelector('.pay-icon');
                if (icon) {
                    icon.classList.replace('bg-gray-100', 'bg-brand-orange/15');
                    icon.classList.replace('text-brand-green', 'text-brand-orange');
                }
                const check = selected.querySelector('.fa-circle-check');
                if (check) check.style.display = '';
            });
        });

        // ─── Show payment success screen ──────────────────────────────────
        function showPaymentSuccess() {
            // Get selected payment method label
            const selected = document.querySelector('.payment-option input[type="radio"]:checked');
            const methodMap = {
                'va': 'Virtual Account BCA',
                'ewallet': 'E-Wallet (GoPay)',
                'cc': 'Kartu Kredit'
            };
            document.getElementById('selected-payment').textContent = methodMap[selected?.value] || 'Virtual Account BCA';

            // Show loading state on button
            const btn = document.getElementById('btn-bayar');
            btn.innerHTML = '<i class="fa-solid fa-spinner fa-spin mr-2"></i> Memproses...';
            btn.disabled = true;

            // Simulate processing delay then show success
            setTimeout(() => {
                // Hide checkout
                const checkoutPanel = document.getElementById('checkout-panel');
                checkoutPanel.classList.add('hide');

                setTimeout(() => {
                    checkoutPanel.style.display = 'none';

                    // Show success panel
                    const successPanel = document.getElementById('payment-success');
                    successPanel.style.display = 'flex';
                    // Trigger CSS transition
                    requestAnimationFrame(() => {
                        successPanel.classList.add('show');
                        // Scroll to top
                        window.scrollTo({ top: 0, behavior: 'smooth' });
                    });
                }, 300);
            }, 1200);
        }
    </script>

</body>
</html>
