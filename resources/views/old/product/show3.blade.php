@extends('layouts.app')

@section('content')
<!-- High-End Fashion / Editorial Layout (Zara/SSENSE Style) -->
<div class="flex flex-col lg:flex-row w-full bg-white text-gray-900 pt-[150px]"> <!-- pt-[150px] to offset absolute header -->
    
    <!-- Left: Image Gallery (Takes up 65% of screen on Desktop) -->
    <div class="w-full lg:w-[65%] grid grid-cols-1 md:grid-cols-2 gap-[2px] bg-gray-200">
        <!-- Huge image tiles with a tiny 2px gap (set by bg-gray-200 and gap-[2px]) to look very modern -->
        <img src="{{ asset('assets/products/84f7d7c500671af9117168db9a995448.jpg') }}" alt="Sherwani Angle 1" class="w-full h-[70vh] md:h-[90vh] object-cover bg-gray-100" />
        <img src="{{ asset('assets/products/8a2bff56c967d7da30a50efef2347793.jpg') }}" alt="Sherwani Angle 2" class="w-full h-[70vh] md:h-[90vh] object-cover bg-gray-100" />
        
        <!-- Full width featured image spanning both columns -->
        <img src="{{ asset('assets/products/84f7d7c500671af9117168db9a995448.jpg') }}" alt="Sherwani Detail" class="w-full h-[70vh] md:h-[90vh] object-cover md:col-span-2 object-top bg-gray-100" />
        
        <img src="{{ asset('assets/products/8a2bff56c967d7da30a50efef2347793.jpg') }}" alt="Sherwani Angle 3" class="w-full h-[70vh] md:h-[90vh] object-cover bg-gray-100" />
        <div class="w-full h-[70vh] md:h-[90vh] bg-gray-100 flex items-center justify-center flex-col text-gray-400">
            <svg class="w-12 h-12 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            <span class="text-sm tracking-widest uppercase">Play Video</span>
        </div>
    </div>

    <!-- Right: Sticky Sidebar Product Details (Takes up 35% of screen) -->
    <div class="w-full lg:w-[35%] px-6 lg:px-14 py-12 relative bg-white">
        <!-- Sticky container stops at the top edge of the screen + header offset -->
        <div class="sticky top-32 flex flex-col max-h-[calc(100vh-8rem)] overflow-y-auto hide-scrollbar pb-10">
            
            
            <!-- Title & Price -->
            <h1 class="text-3xl lg:text-4xl font-serif mb-3 leading-tight text-gray-900">Premium Jacquard Sherwani</h1>
            <p class="text-lg font-light text-gray-600 mb-8 tracking-wide">RS. 14,999.00</p>

            <!-- Description -->
            <div class="text-sm text-gray-600 leading-relaxed mb-10 font-sans space-y-4">
                <p>
                    A masterpiece of traditional craftsmanship. Featuring a rich jacquard weave, intricate zardosi embroidery on the collar, and a structured tailored fit that ensures you stand out on any grand occasion.
                </p>
                <ul class="list-disc pl-4 text-gray-500 space-y-1">
                    <li>100% Premium Jacquard Silk</li>
                    <li>Hand-embroidered mandarin collar</li>
                    <li>Includes matching slim-fit churidar</li>
                </ul>
            </div>

            <!-- Color Options -->
            <div class="mb-10">
                <p class="text-xs font-bold uppercase tracking-[0.15em] mb-4 text-gray-900">Color: <span class="font-normal text-gray-500 ml-2">Ivory Gold</span></p>
                <div class="flex space-x-4">
                    <button class="w-9 h-9 rounded-full bg-[#EAE6DF] border-2 border-black focus:outline-none ring-2 ring-transparent ring-offset-2 hover:scale-110 transition-transform" aria-label="Ivory Gold"></button>
                    <button class="w-9 h-9 rounded-full bg-[#4A1525] border border-gray-300 focus:outline-none ring-2 ring-transparent ring-offset-2 hover:scale-110 transition-transform" aria-label="Deep Maroon"></button>
                    <button class="w-9 h-9 rounded-full bg-[#1C2826] border border-gray-300 focus:outline-none ring-2 ring-transparent ring-offset-2 hover:scale-110 transition-transform" aria-label="Midnight Green"></button>
                </div>
            </div>

            <!-- Size Selector -->
            <div class="mb-12">
                <div class="flex justify-between items-center mb-4">
                    <p class="text-xs font-bold uppercase tracking-[0.15em] text-gray-900">Select Size</p>
                    <button class="text-[11px] text-gray-500 uppercase tracking-widest border-b border-gray-400 hover:text-black hover:border-black transition-colors">Size Guide</button>
                </div>
                <div class="grid grid-cols-4 gap-3">
                    <button class="py-3 border border-gray-300 text-sm hover:border-black transition-colors">S</button>
                    <button class="py-3 border border-black bg-black text-white text-sm transition-colors">M</button>
                    <button class="py-3 border border-gray-300 text-sm hover:border-black transition-colors">L</button>
                    <button class="py-3 border border-gray-200 text-sm text-gray-400 cursor-not-allowed bg-gray-50 relative overflow-hidden group">
                        XL
                        <!-- Diagonal strike-through line for out of stock -->
                        <div class="absolute inset-0 w-full h-full">
                            <div class="absolute w-[150%] h-[1px] bg-gray-300 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 -rotate-[35deg]"></div>
                        </div>
                    </button>
                </div>
            </div>

            <!-- Actions -->
            <div class="space-y-3">
                <button class="w-full bg-black text-white uppercase tracking-[0.2em] text-xs font-bold py-5 hover:bg-gray-800 transition-colors">
                    Add to Cart
                </button>
                <button class="w-full bg-white text-black border border-black uppercase tracking-[0.2em] text-xs font-bold py-5 hover:bg-gray-50 transition-colors flex items-center justify-center space-x-2">
                    <span>Add to Wishlist</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                </button>
            </div>

            <!-- Delivery Info -->
            <div class="mt-8 pt-8 border-t border-gray-100">
                <div class="flex items-start space-x-4 mb-4">
                    <svg class="w-5 h-5 text-gray-400 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path></svg>
                    <div>
                        <h4 class="text-xs font-bold uppercase tracking-widest text-gray-900 mb-1">Free Delivery</h4>
                        <p class="text-xs text-gray-500 leading-relaxed">Standard delivery in 3-5 working days for orders over RS. 2,999.</p>
                    </div>
                </div>
                <div class="flex items-start space-x-4">
                    <svg class="w-5 h-5 text-gray-400 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
                    <div>
                        <h4 class="text-xs font-bold uppercase tracking-widest text-gray-900 mb-1">Easy Returns</h4>
                        <p class="text-xs text-gray-500 leading-relaxed">Free returns within 15 days of delivery.</p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection
