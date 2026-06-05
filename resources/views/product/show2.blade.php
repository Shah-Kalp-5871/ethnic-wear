@extends('layouts.app')

@section('content')
<style>
    .hide-scrollbar::-webkit-scrollbar { display: none; }
    .hide-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
</style>

<!-- Full Width Split Screen Section -->
<div class="flex flex-col-reverse lg:flex-row w-full min-h-[90vh] bg-white">
    <!-- Left Side: Product Info -->
    <div class="w-full lg:w-1/2 flex flex-col pt-48 pb-8 px-6 lg:px-12 min-h-[70vh] lg:min-h-screen text-gray-900 relative z-10">
        

        <!-- Product Details -->
        <div class="mb-auto">
            <h1 class="text-6xl lg:text-8xl font-sans font-bold uppercase leading-[0.9] mb-4 tracking-tight text-gray-900">Imperial<br>Sherwani</h1>
            <p class="text-gray-500 text-lg lg:text-xl font-light leading-relaxed max-w-md">
                Exquisitely crafted with intricate zardosi embroidery. A masterpiece tailored for your most memorable occasions.
            </p>
        </div>

        <!-- Carousel Area -->
        <div class="mt-12 w-full">
            <!-- Arrows -->
            <div class="flex justify-end space-x-3 mb-4">
                <button class="w-8 h-8 rounded-full border border-gray-300 flex items-center justify-center text-gray-400 hover:text-black hover:border-black transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                </button>
                <button class="w-8 h-8 rounded-full border border-gray-300 flex items-center justify-center text-gray-400 hover:text-black hover:border-black transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </button>
            </div>

            <!-- Thumbnails -->
            <div class="flex space-x-3 overflow-x-auto hide-scrollbar pb-6 items-end">
                <!-- Thumbnail 1 (Inactive) -->
                <div class="flex flex-col items-center cursor-pointer group flex-shrink-0 w-24">
                    <div class="w-full h-32 rounded-lg bg-gray-100 p-2 flex items-center justify-center transition-transform group-hover:scale-105 border border-transparent group-hover:border-gray-200">
                        <img src="{{ asset('assets/products/07d253be6b103a6d5a4aa00970fb2442.jpg') }}" alt="Regal Kurta" class="w-full h-full object-cover rounded shadow-sm">
                    </div>
                    <span class="text-xs font-semibold mt-3 text-gray-500 group-hover:text-black transition-colors">Regal Kurta</span>
                </div>

                <!-- Thumbnail 2 (Inactive) -->
                <div class="flex flex-col items-center cursor-pointer group flex-shrink-0 w-24">
                    <div class="w-full h-32 rounded-lg bg-gray-100 p-2 flex items-center justify-center transition-transform group-hover:scale-105 border border-transparent group-hover:border-gray-200">
                        <img src="{{ asset('assets/products/2cf2091b6b0a327c61d924aba4422361.jpg') }}" alt="Classic Pathani" class="w-full h-full object-cover rounded shadow-sm">
                    </div>
                    <span class="text-xs font-semibold mt-3 text-gray-500 group-hover:text-black transition-colors">Classic Pathani</span>
                </div>

                <!-- Thumbnail 3 (Active) -->
                <div class="flex flex-col items-center cursor-pointer group flex-shrink-0 w-32 relative">
                    <!-- Active background glow -->
                    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-[60%] w-[110%] h-[110%] bg-[#F2E9D8] rounded-full blur-md -z-10"></div>
                    
                    <div class="w-28 h-40 p-2 flex items-center justify-center transition-transform scale-110">
                        <img src="{{ asset('assets/products/84f7d7c500671af9117168db9a995448.jpg') }}" alt="Imperial Sherwani" class="w-full h-full object-cover rounded-md shadow-lg border border-gray-200/50">
                    </div>
                    <span class="text-sm font-bold mt-4 text-black">Imperial Sherwani</span>
                </div>

                <!-- Thumbnail 4 (Inactive) -->
                <div class="flex flex-col items-center cursor-pointer group flex-shrink-0 w-24">
                    <div class="w-full h-32 rounded-lg bg-gray-100 p-2 flex items-center justify-center transition-transform group-hover:scale-105 border border-transparent group-hover:border-gray-200">
                        <img src="{{ asset('assets/products/9493e6f4de86ab31a597f0161766857d.jpg') }}" alt="Velvet Nehru" class="w-full h-full object-cover rounded shadow-sm">
                    </div>
                    <span class="text-xs font-semibold mt-3 text-gray-500 group-hover:text-black transition-colors">Velvet Nehru</span>
                </div>
            </div>

            <!-- Buy Button -->
            <button class="w-full bg-black text-white font-sans text-lg font-semibold tracking-wide py-4 rounded-full mt-6 hover:bg-gray-800 transition-all shadow-md hover:shadow-lg">
                Add to Cart
            </button>
        </div>
    </div>

    <!-- Right Side: Hero Image -->
    <div class="w-full lg:w-1/2 relative flex items-center justify-center bg-[#FDFBF7] overflow-hidden min-h-[60vh] lg:min-h-screen lg:rounded-l-[3rem] z-20 mt-12 lg:mt-0 pt-28 lg:pt-32">
        
        <!-- Elegant Minimalist Orbital Background Effect -->
        <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
            <!-- Large soft circle backdrop -->
            <div class="absolute w-[22rem] h-[22rem] lg:w-[32rem] lg:h-[32rem] bg-[#F2E9D8] rounded-full opacity-70"></div>
            
            <!-- Slow rotating outer dashed ring -->
            <div class="absolute w-[26rem] h-[26rem] lg:w-[38rem] lg:h-[38rem] border-[1.5px] border-[#E8DCC4] rounded-full border-dashed animate-[spin_60s_linear_infinite]"></div>
            
            <!-- Faster counter-rotating inner ring with a gap -->
            <div class="absolute w-[24rem] h-[24rem] lg:w-[35rem] lg:h-[35rem] border-[2px] border-[#E8DCC4] rounded-full border-t-transparent border-l-transparent animate-[spin_30s_linear_infinite_reverse] opacity-80"></div>
            
            <!-- Very slow rotating thin solid ring -->
            <div class="absolute w-[28rem] h-[28rem] lg:w-[41rem] lg:h-[41rem] border border-[#E8DCC4] rounded-full border-b-transparent animate-[spin_45s_linear_infinite]"></div>
        </div>
        
        <!-- Product Image -->
        <div class="relative z-10 w-2/3 max-w-sm aspect-[3/4] flex items-center justify-center translate-y-[-2%]">
            <img src="{{ asset('assets/products/84f7d7c500671af9117168db9a995448.jpg') }}" alt="Imperial Sherwani" class="w-full h-full object-cover rounded-2xl shadow-[0_20px_40px_rgba(0,0,0,0.1)] border border-gray-100">
        </div>
    </div>
</div>
@endsection
