<header class="absolute top-0 left-0 w-full z-50">
    <!-- Marquee Top Bar -->
    <div class="bg-[#1e2025] text-[#b3b3b3] text-[14px] font-semibold tracking-widest py-4 overflow-hidden border-b border-gray-800">
        <div class="flex whitespace-nowrap animate-marquee">
            @for ($i = 0; $i < 8; $i++)
            <span class="mx-4 flex items-center gap-4">
                <span class="text-red-600 text-sm leading-none">&bull;</span>
                FLAT 5% ON PREPAID ORDERS
                <span class="text-red-600 text-sm leading-none">&bull;</span>
                USE CODE 'MUD5' FOR 5% OFF
                <span class="text-red-600 text-sm leading-none">&bull;</span>
                BUY ANY 3 PRODUCTS AT ₹999
            </span>
            @endfor
        </div>
    </div>

    <!-- Navigation -->
    <nav class="container mx-auto px-6 py-2 flex items-center justify-between">
        <!-- Left: Links -->
        <div class="flex space-x-6 text-[13px] uppercase tracking-widest">
            <a href="#" class="text-white font-bold">Home</a>
            <a href="#" class="text-gray-300 hover:text-white transition">Shop</a>
            <a href="#" class="text-gray-300 hover:text-white transition">Contact</a>
            <a href="#" class="text-gray-300 hover:text-white transition">Blogs</a>
        </div>

        <!-- Center: Logo -->
        <div class="flex justify-center flex-1 pr-12">
            <a href="/">
                <img src="{{ asset('assets/mudaura.com/cdn/shop/files/Untitled_design_20250112_123723_0000.png') }}" alt="MudAura Logo" class="h-10 w-auto object-contain hidden" id="logo-img" onerror="this.style.display='none'; document.getElementById('logo-text').classList.remove('hidden')">
                <!-- Fallback logo if the image is missing -->
                <div id="logo-text" class="w-10 h-10 rounded-full border border-yellow-600 flex items-center justify-center text-yellow-600 font-serif">M</div>
            </a>
        </div>

        <!-- Right: Icons -->
        <div class="flex space-x-5">
            <!-- Search -->
            <button class="text-white hover:text-gray-300 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
            </button>
            <!-- User -->
            <button class="text-white hover:text-gray-300 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg>
            </button>
            <!-- Cart -->
            <button class="text-white hover:text-gray-300 transition relative">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" /></svg>
            </button>
        </div>
    </nav>
</header>
