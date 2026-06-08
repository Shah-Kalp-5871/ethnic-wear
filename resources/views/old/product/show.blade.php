@extends('layouts.app')

@section('content')
<style>
    .hide-scrollbar::-webkit-scrollbar { display: none; }
    .hide-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
</style>

<!-- Full Width Split Screen Section -->
<div class="flex flex-col-reverse lg:flex-row w-full min-h-[90vh]">
    <!-- Left Side: Product Info -->
    <div class="w-full lg:w-5/12 bg-white flex flex-col justify-between pt-48 pb-12 px-8 lg:px-16 min-h-[70vh] lg:min-h-screen text-gray-900">
        

        <!-- Product Details -->
        <div class="mb-12">
            <h1 class="text-5xl lg:text-7xl font-oswald font-bold uppercase leading-[1.1] mb-6 text-gray-900">Imperial<br>Sherwani</h1>
            <p class="text-gray-600 text-lg font-light leading-relaxed max-w-md">
                Exquisitely crafted with intricate zardosi embroidery. A masterpiece of traditional design, tailored for your most memorable occasions.
            </p>
            <div class="mt-8 text-3xl font-oswald text-gray-900 tracking-wide">$ 249.00</div>
        </div>

        <!-- Variants / Thumbnails -->
        <div class="mt-auto">
            <h3 class="text-sm font-oswald uppercase tracking-wider text-gray-500 mb-4">Select Style</h3>
            <div class="flex space-x-4 overflow-x-auto hide-scrollbar pb-4">
                <!-- Thumbnail 1 (Active) -->
                <div class="flex flex-col items-center space-y-3 cursor-pointer group flex-shrink-0">
                    <div class="w-24 h-32 rounded-xl overflow-hidden border-2 border-gray-900 p-1">
                        <img src="{{ asset('assets/products/84f7d7c500671af9117168db9a995448.jpg') }}" alt="Imperial Sherwani" class="w-full h-full object-cover rounded-lg">
                    </div>
                    <span class="text-xs font-semibold uppercase tracking-wider text-gray-900">Imperial</span>
                </div>

                <!-- Thumbnail 2 -->
                <div class="flex flex-col items-center space-y-3 cursor-pointer group flex-shrink-0 opacity-60 hover:opacity-100 transition-opacity">
                    <div class="w-24 h-32 rounded-xl overflow-hidden border border-transparent p-1">
                        <img src="{{ asset('assets/products/07d253be6b103a6d5a4aa00970fb2442.jpg') }}" alt="Regal Kurta" class="w-full h-full object-cover rounded-lg">
                    </div>
                    <span class="text-xs font-semibold uppercase tracking-wider text-gray-500 group-hover:text-gray-900 transition-colors">Regal</span>
                </div>

                <!-- Thumbnail 3 -->
                <div class="flex flex-col items-center space-y-3 cursor-pointer group flex-shrink-0 opacity-60 hover:opacity-100 transition-opacity">
                    <div class="w-24 h-32 rounded-xl overflow-hidden border border-transparent p-1">
                        <img src="{{ asset('assets/products/9493e6f4de86ab31a597f0161766857d.jpg') }}" alt="Velvet Nehru" class="w-full h-full object-cover rounded-lg">
                    </div>
                    <span class="text-xs font-semibold uppercase tracking-wider text-gray-500 group-hover:text-gray-900 transition-colors">Velvet</span>
                </div>
            </div>

            <!-- Buy Button -->
            <button class="w-full bg-[#1c1c1c] text-white font-oswald uppercase text-xl font-bold py-5 rounded-full mt-8 hover:bg-black transition-all hover:shadow-xl hover:-translate-y-1">
                Add To Cart
            </button>
        </div>
    </div>

    <!-- Right Side: Hero Image -->
    <div class="w-full lg:w-7/12 relative flex items-center justify-center bg-[#4A1525] overflow-hidden min-h-[60vh] lg:min-h-screen pt-28 lg:pt-32">
        <!-- Spinning Background Effect (Mandala) -->
        <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
            <svg viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg" class="w-[180%] h-[180%] lg:w-[130%] lg:h-[130%] text-[#D4AF37]/15 fill-current animate-[spin_40s_linear_infinite]">
                <g transform="translate(250 250)">
                    <path d="M0 -50 C 50 -150, 150 -50, 0 0" transform="rotate(0)" />
                    <path d="M0 -50 C 50 -150, 150 -50, 0 0" transform="rotate(45)" />
                    <path d="M0 -50 C 50 -150, 150 -50, 0 0" transform="rotate(90)" />
                    <path d="M0 -50 C 50 -150, 150 -50, 0 0" transform="rotate(135)" />
                    <path d="M0 -50 C 50 -150, 150 -50, 0 0" transform="rotate(180)" />
                    <path d="M0 -50 C 50 -150, 150 -50, 0 0" transform="rotate(225)" />
                    <path d="M0 -50 C 50 -150, 150 -50, 0 0" transform="rotate(270)" />
                    <path d="M0 -50 C 50 -150, 150 -50, 0 0" transform="rotate(315)" />
                    
                    <path d="M0 -150 C 100 -250, 250 -100, 0 0" fill="none" stroke="currentColor" stroke-width="2" transform="rotate(22.5)" />
                    <path d="M0 -150 C 100 -250, 250 -100, 0 0" fill="none" stroke="currentColor" stroke-width="2" transform="rotate(67.5)" />
                    <path d="M0 -150 C 100 -250, 250 -100, 0 0" fill="none" stroke="currentColor" stroke-width="2" transform="rotate(112.5)" />
                    <path d="M0 -150 C 100 -250, 250 -100, 0 0" fill="none" stroke="currentColor" stroke-width="2" transform="rotate(157.5)" />
                    <path d="M0 -150 C 100 -250, 250 -100, 0 0" fill="none" stroke="currentColor" stroke-width="2" transform="rotate(202.5)" />
                    <path d="M0 -150 C 100 -250, 250 -100, 0 0" fill="none" stroke="currentColor" stroke-width="2" transform="rotate(247.5)" />
                    <path d="M0 -150 C 100 -250, 250 -100, 0 0" fill="none" stroke="currentColor" stroke-width="2" transform="rotate(292.5)" />
                    <path d="M0 -150 C 100 -250, 250 -100, 0 0" fill="none" stroke="currentColor" stroke-width="2" transform="rotate(337.5)" />
                    
                    <circle cx="0" cy="0" r="200" fill="none" stroke="currentColor" stroke-width="1" stroke-dasharray="5 10" />
                    <circle cx="0" cy="0" r="180" fill="none" stroke="currentColor" stroke-width="3" />
                    <circle cx="0" cy="0" r="60" fill="none" stroke="currentColor" stroke-width="2" />
                </g>
            </svg>
        </div>
        
        <!-- Product Image -->
        <!-- Adding some padding and shadow to make the product stand out, with subtle floating -->
        <div class="relative z-10 w-3/4 lg:w-2/3 max-w-lg aspect-[3/4] flex items-center justify-center">
            <img src="{{ asset('assets/products/84f7d7c500671af9117168db9a995448.jpg') }}" alt="Imperial Sherwani" class="w-full h-full object-cover rounded-2xl shadow-[0_20px_50px_rgba(0,0,0,0.15)] border-8 border-white">
        </div>
    </div>
</div>
@endsection
