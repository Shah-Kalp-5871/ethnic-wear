@php
    $isHome = request()->is('/');
    $headerBg = $isHome ? '' : 'bg-white border-b border-gray-100 shadow-sm';
    $textColor = $isHome ? 'text-white' : 'text-gray-900';
    $linkColor = $isHome ? 'text-gray-300 hover:text-white' : 'text-gray-600 hover:text-black';
    $iconColor = $isHome ? 'text-white hover:text-gray-300' : 'text-gray-900 hover:text-gray-500';
@endphp

<header class="absolute inset-x-0 top-0 z-50 {{ $headerBg }}">
    <!-- Marquee Top Bar -->
    <div class="bg-[#1e2025] text-[#b3b3b3] text-[14px] font-semibold tracking-widest py-4 overflow-hidden border-b border-gray-800">
        <div class="flex whitespace-nowrap animate-marquee w-max">
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
    <nav class="container mx-auto px-4 lg:px-6 py-3 lg:py-4 flex items-center justify-between relative">
        
        <!-- Mobile Hamburger -->
        <div class="lg:hidden flex items-center">
            <button class="{{ $iconColor }} transition focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h16"/></svg>
            </button>
        </div>

        <!-- Left: Links (Desktop) -->
        <div class="hidden lg:flex space-x-6 text-[13px] uppercase tracking-widest w-1/3">
            <a href="#" class="{{ $textColor }} font-bold">Home</a>
            <a href="#" class="{{ $linkColor }} transition">Shop</a>
            <a href="#" class="{{ $linkColor }} transition">Contact</a>
            <a href="#" class="{{ $linkColor }} transition">Blogs</a>
        </div>

        <!-- Center: Logo -->
        <div class="flex-shrink-0 flex items-center justify-center lg:w-1/3 lg:absolute lg:left-1/2 lg:-translate-x-1/2">
            <a href="/" class="flex items-center justify-center w-11 h-11 border border-[#c19b63] rounded-full hover:bg-[#c19b63] hover:text-white transition-colors group">
                <span class="text-[#c19b63] group-hover:text-white font-serif font-bold text-xl">M</span>
            </a>
        </div>

        <!-- Right: Icons -->
        <div class="flex space-x-4 lg:space-x-5 lg:w-1/3 justify-end">
            <!-- Search -->
            <button class="{{ $iconColor }} transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
            </button>
            <!-- User -->
            <button class="{{ $iconColor }} transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg>
            </button>
            <!-- Cart -->
            <button class="{{ $iconColor }} transition relative">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" /></svg>
            </button>
        </div>
    </nav>
</header>
