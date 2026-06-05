@extends('layouts.app')

@section('content')
<section class="relative min-h-[110vh] w-full flex items-center justify-start bg-black overflow-hidden">
    <!-- Background Image -->
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('hero.jpg') }}" 
             class="w-full h-full object-cover object-center opacity-80" 
             alt="MudAura Hero Background"
             onerror="this.src='https://images.unsplash.com/photo-1600857062241-98e5dba7f214?q=80&w=2578&auto=format&fit=crop'">
        <!-- Dark overlay to ensure text is readable -->
        <div class="absolute inset-0 bg-black/40"></div>
    </div>

    <!-- Content -->
    <div class="relative z-10 container mx-auto px-6 md:px-12 pt-20">
        <div class="max-w-3xl">
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-6 uppercase leading-[1.1] font-oswald tracking-wide drop-shadow-lg">
                Redefining Tradition <br> Elegantly.
            </h1>
            <a href="#" class="inline-flex items-center text-white text-xs md:text-sm uppercase tracking-widest font-semibold hover:text-gray-300 transition group mt-2">
                Shop all 
                <span class="ml-3 group-hover:translate-x-2 transition-transform duration-300 text-lg leading-none">&rarr;</span>
            </a>
        </div>
    </div>
</section>

<!-- Products Section -->
<section class="py-16 bg-white text-black">
    <div class="container mx-auto px-6 md:px-12">
        <!-- Section Header -->
        <div class="mb-10">
            <p class="text-sm text-gray-700 mb-1">Made to express</p>
            <h2 class="text-4xl md:text-5xl font-bold font-oswald uppercase tracking-wide">
                Kurtas, Sherwanis and Jackets
            </h2>
        </div>

        <!-- Products Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            
            <!-- Product 1 -->
            <a href="/product" class="group relative flex flex-col group/card cursor-pointer block">
                <!-- Image Container -->
                <div class="relative w-full aspect-[4/5] bg-gray-50 overflow-hidden rounded-md mb-4 flex items-center justify-center">
                    <!-- Badges -->
                    <div class="absolute top-3 left-3 z-20">
                        <span class="bg-[#1e2025] text-white text-xs px-3 py-1 rounded-full font-medium tracking-wide">Sale</span>
                    </div>
                    
                    <!-- Images -->
                    <img src="{{ asset('assets/products/07d253be6b103a6d5a4aa00970fb2442.jpg') }}" class="absolute inset-0 w-full h-full object-cover transition-opacity duration-500 ease-in-out opacity-100 group-hover/card:opacity-0 z-10" alt="Embroidered Silk Kurta">
                    <img src="{{ asset('assets/products/2183e5c0fc528398d9f56d6d1a870872.jpg') }}" class="absolute inset-0 w-full h-full object-cover transition-opacity duration-500 ease-in-out opacity-0 group-hover/card:opacity-100 z-0" alt="Embroidered Silk Kurta Hover">

                    <!-- Floating Bag Icon -->
                    <div class="absolute bottom-3 right-3 z-30 translate-y-2 opacity-0 group-hover/card:translate-y-0 group-hover/card:opacity-100 transition-all duration-300">
                        <button class="bg-white text-black p-2 rounded-full shadow-md hover:bg-gray-100 pointer-events-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" /></svg>
                        </button>
                    </div>
                </div>
                
                <!-- Product Info -->
                <div class="text-center">
                    <h3 class="text-[13px] md:text-[14px] text-gray-800 mb-1 font-medium group-hover:underline">Embroidered Silk Kurta</h3>
                    <div class="text-[13px]">
                        <span class="font-bold mr-1">RS. 479.00</span>
                        <span class="text-gray-500 line-through">RS. 599.00</span>
                    </div>
                </div>
            </a>

            <!-- Product 2 -->
            <a href="/product2" class="group relative flex flex-col group/card cursor-pointer block">
                <!-- Image Container -->
                <div class="relative w-full aspect-[4/5] bg-gray-50 overflow-hidden rounded-md mb-4 flex items-center justify-center">
                    <!-- Badges -->
                    <div class="absolute top-3 left-3 z-20">
                        <span class="bg-[#1e2025] text-white text-xs px-3 py-1 rounded-full font-medium tracking-wide">Sale</span>
                    </div>
                    
                    <!-- Images -->
                    <img src="{{ asset('assets/products/2cf2091b6b0a327c61d924aba4422361.jpg') }}" class="absolute inset-0 w-full h-full object-cover transition-opacity duration-500 ease-in-out opacity-100 group-hover/card:opacity-0 z-10" alt="Classic Cotton Pathani Suit">
                    <img src="{{ asset('assets/products/4b023aab378b4d93467f6e030b209f70.jpg') }}" class="absolute inset-0 w-full h-full object-cover transition-opacity duration-500 ease-in-out opacity-0 group-hover/card:opacity-100 z-0" alt="Classic Cotton Pathani Suit Hover">

                    <!-- Floating Bag Icon -->
                    <div class="absolute bottom-3 right-3 z-30 translate-y-2 opacity-0 group-hover/card:translate-y-0 group-hover/card:opacity-100 transition-all duration-300">
                        <button class="bg-white text-black p-2 rounded-full shadow-md hover:bg-gray-100 pointer-events-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" /></svg>
                        </button>
                    </div>
                </div>
                
                <!-- Product Info -->
                <div class="text-center">
                    <h3 class="text-[13px] md:text-[14px] text-gray-800 mb-1 font-medium group-hover:underline">Classic Cotton Pathani Suit</h3>
                    <div class="text-[13px]">
                        <span class="font-bold mr-1">RS. 399.00</span>
                        <span class="text-gray-500 line-through">RS. 460.00</span>
                    </div>
                </div>
            </a>

            <!-- Product 3 -->
            <a href="/product3" class="group relative flex flex-col group/card cursor-pointer block">
                <!-- Image Container -->
                <div class="relative w-full aspect-[4/5] bg-gray-50 overflow-hidden rounded-md mb-4 flex items-center justify-center">
                    <!-- Badges -->
                    <div class="absolute top-3 left-3 z-20">
                        <span class="bg-[#1e2025] text-white text-xs px-3 py-1 rounded-full font-medium tracking-wide">Sale</span>
                    </div>
                    
                    <!-- Images -->
                    <img src="{{ asset('assets/products/84f7d7c500671af9117168db9a995448.jpg') }}" class="absolute inset-0 w-full h-full object-cover transition-opacity duration-500 ease-in-out opacity-100 group-hover/card:opacity-0 z-10" alt="Premium Jacquard Sherwani">
                    <img src="{{ asset('assets/products/8a2bff56c967d7da30a50efef2347793.jpg') }}" class="absolute inset-0 w-full h-full object-cover transition-opacity duration-500 ease-in-out opacity-0 group-hover/card:opacity-100 z-0" alt="Premium Jacquard Sherwani Hover">

                    <!-- Floating Bag Icon -->
                    <div class="absolute bottom-3 right-3 z-30 translate-y-2 opacity-0 group-hover/card:translate-y-0 group-hover/card:opacity-100 transition-all duration-300">
                        <button class="bg-white text-black p-2 rounded-full shadow-md hover:bg-gray-100 pointer-events-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" /></svg>
                        </button>
                    </div>
                </div>
                
                <!-- Product Info -->
                <div class="text-center">
                    <h3 class="text-[13px] md:text-[14px] text-gray-800 mb-1 font-medium group-hover:underline">Premium Jacquard Sherwani</h3>
                    <div class="text-[13px]">
                        <span class="font-bold mr-1">RS. 399.00</span>
                        <span class="text-gray-500 line-through">RS. 479.00</span>
                    </div>
                </div>
            </a>

            <!-- Product 4 -->
            <a href="/product" class="group relative flex flex-col group/card cursor-pointer block">
                <!-- Image Container -->
                <div class="relative w-full aspect-[4/5] bg-gray-50 overflow-hidden rounded-md mb-4 flex items-center justify-center">
                    <!-- Badges -->
                    <div class="absolute top-3 left-3 z-20">
                        <span class="bg-[#1e2025] text-white text-xs px-3 py-1 rounded-full font-medium tracking-wide">Sale</span>
                    </div>
                    
                    <!-- Images -->
                    <img src="{{ asset('assets/products/9493e6f4de86ab31a597f0161766857d.jpg') }}" class="absolute inset-0 w-full h-full object-cover transition-opacity duration-500 ease-in-out opacity-100 group-hover/card:opacity-0 z-10" alt="Handwoven Linen Nehru Jacket">
                    <img src="{{ asset('assets/products/ad9318da853cddee6d486b0ccc51b8d9.jpg') }}" class="absolute inset-0 w-full h-full object-cover transition-opacity duration-500 ease-in-out opacity-0 group-hover/card:opacity-100 z-0" alt="Handwoven Linen Nehru Jacket Hover">

                    <!-- Floating Bag Icon -->
                    <div class="absolute bottom-3 right-3 z-30 translate-y-2 opacity-0 group-hover/card:translate-y-0 group-hover/card:opacity-100 transition-all duration-300">
                        <button class="bg-white text-black p-2 rounded-full shadow-md hover:bg-gray-100 pointer-events-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" /></svg>
                        </button>
                    </div>
                </div>
                
                <!-- Product Info -->
                <div class="text-center">
                    <h3 class="text-[13px] md:text-[14px] text-gray-800 mb-1 font-medium group-hover:underline">Handwoven Linen Nehru Jacket</h3>
                    <div class="text-[13px]">
                        <span class="font-bold mr-1">RS. 395.00</span>
                        <span class="text-gray-500 line-through">RS. 499.00</span>
                    </div>
                </div>
            </a>

        </div>
    </div>
</section>

<!-- Everyday Rituals Video Section -->
<section class="py-16 bg-white text-black overflow-hidden">
    <div class="container mx-auto px-6 md:px-12 text-center mb-10">
        <h2 class="text-4xl md:text-5xl font-bold font-oswald uppercase tracking-wide mb-2">
            Style In Motion
        </h2>
        <p class="text-sm md:text-base text-gray-700">
            Explore Our Latest Collection Lookbooks
        </p>
    </div>

    <!-- Video Carousel / Grid -->
    <div class="container mx-auto px-6 md:px-12">
        <!-- Scroll track wrapper (only visible on mobile) -->
        <div id="video-carousel-wrap" class="relative">
            <div id="video-carousel" class="flex flex-nowrap gap-4 md:gap-6 snap-x snap-mandatory md:grid md:grid-cols-2 lg:grid-cols-4 md:overflow-visible overflow-x-scroll pb-4" style="-ms-overflow-style:none; scrollbar-width:none;">
                
                <!-- Video 1 -->
                <div class="relative w-[75vw] sm:w-[45vw] md:w-auto flex-shrink-0 snap-center aspect-[9/16] rounded-2xl overflow-hidden shadow-lg bg-gray-100 cursor-pointer" onclick="this.querySelector('video').paused ? this.querySelector('video').play() : this.querySelector('video').pause()">
                    <video 
                        class="absolute inset-0 w-full h-full object-cover z-0" 
                        preload="metadata"
                        autoplay loop muted playsinline
                    >
                        <source src="{{ asset('assets/videos/0491eb56-c241-4d92-b015-f2aca854ddeb.mp4') }}" type="video/mp4">
                    </video>
                    <div class="absolute inset-0 bg-black/10 pointer-events-none"></div>
                    <div class="absolute bottom-3 left-3 right-3 z-20 pointer-events-none">
                        <p class="text-white text-xs font-semibold uppercase tracking-widest drop-shadow">New Arrivals</p>
                    </div>
                </div>

                <!-- Video 2 -->
                <div class="relative w-[75vw] sm:w-[45vw] md:w-auto flex-shrink-0 snap-center aspect-[9/16] rounded-2xl overflow-hidden shadow-lg bg-gray-100 cursor-pointer" onclick="this.querySelector('video').paused ? this.querySelector('video').play() : this.querySelector('video').pause()">
                    <video 
                        class="absolute inset-0 w-full h-full object-cover z-0" 
                        preload="metadata"
                        autoplay loop muted playsinline
                    >
                        <source src="{{ asset('assets/videos/3bda2126-6388-482d-8112-ea8690e62fd6.mp4') }}" type="video/mp4">
                    </video>
                    <div class="absolute inset-0 bg-black/10 pointer-events-none"></div>
                    <div class="absolute bottom-3 left-3 right-3 z-20 pointer-events-none">
                        <p class="text-white text-xs font-semibold uppercase tracking-widest drop-shadow">Kurta Edit</p>
                    </div>
                </div>

                <!-- Video 3 -->
                <div class="relative w-[75vw] sm:w-[45vw] md:w-auto flex-shrink-0 snap-center aspect-[9/16] rounded-2xl overflow-hidden shadow-lg bg-gray-100 cursor-pointer" onclick="this.querySelector('video').paused ? this.querySelector('video').play() : this.querySelector('video').pause()">
                    <video 
                        class="absolute inset-0 w-full h-full object-cover z-0" 
                        preload="metadata"
                        autoplay loop muted playsinline
                    >
                        <source src="{{ asset('assets/videos/bc0992d6-4bb0-4156-a36b-6aa25c024a11.mp4') }}" type="video/mp4">
                    </video>
                    <div class="absolute inset-0 bg-black/10 pointer-events-none"></div>
                    <div class="absolute bottom-3 left-3 right-3 z-20 pointer-events-none">
                        <p class="text-white text-xs font-semibold uppercase tracking-widest drop-shadow">Sherwani Season</p>
                    </div>
                </div>

                <!-- Video 4 -->
                <div class="relative w-[75vw] sm:w-[45vw] md:w-auto flex-shrink-0 snap-center aspect-[9/16] rounded-2xl overflow-hidden shadow-lg bg-gray-100 cursor-pointer" onclick="this.querySelector('video').paused ? this.querySelector('video').play() : this.querySelector('video').pause()">
                    <video 
                        class="absolute inset-0 w-full h-full object-cover z-0" 
                        preload="metadata"
                        autoplay loop muted playsinline
                    >
                        <source src="{{ asset('assets/videos/ecddff0e-8b5c-46bd-9425-919260d80c08.mp4') }}" type="video/mp4">
                    </video>
                    <div class="absolute inset-0 bg-black/10 pointer-events-none"></div>
                    <div class="absolute bottom-3 left-3 right-3 z-20 pointer-events-none">
                        <p class="text-white text-xs font-semibold uppercase tracking-widest drop-shadow">Festival Looks</p>
                    </div>
                </div>

            </div>

            <!-- Custom Scroll Progress Bar (mobile only) -->
            <div class="mt-5 md:hidden flex items-center justify-center">
                <!-- Track -->
                <div class="relative w-36 h-[2px] bg-gray-200 rounded-full overflow-hidden">
                    <!-- Thumb / active fill -->
                    <div id="video-scroll-thumb" class="absolute top-0 left-0 h-full bg-[#1c1c1c] rounded-full transition-all duration-150" style="width: 25%;"></div>
                </div>
            </div>
        </div>
    </div>

    <style>
        #video-carousel::-webkit-scrollbar { display: none; }
    </style>

    <script>
        (function() {
            const carousel = document.getElementById('video-carousel');
            const thumb = document.getElementById('video-scroll-thumb');
            if (!carousel || !thumb) return;

            function updateThumb() {
                const scrollLeft = carousel.scrollLeft;
                const maxScroll = carousel.scrollWidth - carousel.clientWidth;
                if (maxScroll <= 0) { thumb.style.width = '100%'; return; }
                const pct = scrollLeft / maxScroll; // 0 to 1
                // Thumb is 25% wide, it travels from 0% to 75%
                const thumbW = 25; // percent
                const leftPct = pct * (100 - thumbW);
                thumb.style.width = thumbW + '%';
                thumb.style.left = leftPct + '%';
            }

            carousel.addEventListener('scroll', updateThumb, { passive: true });
            updateThumb();
        })();
    </script>
</section>

<!-- Combo Banner Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6 md:px-12 flex justify-center">
        <div class="bg-[#f4f4f4] rounded-2xl px-10 py-12 text-center max-w-xl w-full">
            <p class="text-xs uppercase tracking-[0.2em] text-gray-500 font-medium mb-3">Limited Offer</p>
            <h2 class="text-3xl md:text-4xl font-bold font-oswald uppercase tracking-wide text-[#1c1d1f] mb-3">
                Build Your Own Outfit
            </h2>
            <p class="text-gray-600 text-base mb-8">
                Mix & match any 3 pieces at just ₹999
            </p>
            <a href="#" class="inline-block bg-[#1c1d1f] text-white font-oswald font-bold uppercase px-10 py-4 text-sm tracking-widest hover:bg-black transition-colors duration-300">
                Build Now
            </a>
        </div>
    </div>
</section>

<!-- Best Seller Before/After Section -->
<section class="py-16 bg-white text-black">
    <div class="container mx-auto px-6 md:px-12 text-center">
        <!-- Header -->
        <p class="text-sm md:text-base text-gray-700 mb-1">
            Our Core
        </p>
        <h2 class="text-4xl md:text-5xl font-bold font-oswald uppercase tracking-wide mb-10">
            Products
        </h2>

        <!-- Slider Container -->
        <div class="relative max-w-5xl mx-auto overflow-hidden shadow-2xl rounded-sm select-none bg-gray-100" id="comparison-slider">
            <div class="relative w-full aspect-[4/3] md:aspect-[16/9]">
                <!-- Image Two (Right side / Background / After) -->
                <img src="{{ asset('assets/products/07d253be6b103a6d5a4aa00970fb2442.jpg') }}" onerror="this.src='https://images.unsplash.com/photo-1611078502396-981881518f8e?q=80&w=1200&auto=format&fit=crop'" class="absolute inset-0 w-full h-full object-cover pointer-events-none" alt="After">
                
                <!-- Image One (Left side / Clipped / Before) -->
                <div class="absolute inset-y-0 left-0 w-1/2 overflow-hidden pointer-events-none" id="slider-overlay">
                    <img src="{{ asset('assets/products/2183e5c0fc528398d9f56d6d1a870872.jpg') }}" onerror="this.src='https://images.unsplash.com/photo-1611078502396-981881518f8e?q=80&w=1200&auto=format&fit=crop&sat=-100'" class="absolute inset-y-0 left-0 h-full object-cover" id="before-img" alt="Before">
                </div>

                <!-- Handle Line -->
                <div class="absolute top-0 bottom-0 w-[2px] bg-white left-1/2 -translate-x-1/2 pointer-events-none z-10 flex items-center justify-center" id="slider-handle">
                    <!-- Arrow Circle Handle -->
                    <div class="shrink-0 w-11 h-11 bg-white rounded-full shadow-xl flex items-center justify-center gap-[5px]">
                        <!-- Left Arrow -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="#555" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"></polyline></svg>
                        <!-- Right Arrow -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="#555" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </div>

                <!-- Range Input -->
                <input type="range" min="0" max="100" value="50" class="absolute inset-0 w-full h-full opacity-0 cursor-ew-resize z-20 m-0 p-0" id="slider-input">
            </div>
        </div>

        <!-- Button -->
        <div class="mt-10">
            <a href="#" class="inline-block bg-black text-white font-medium uppercase px-12 py-3 rounded-full text-sm tracking-widest hover:bg-gray-800 transition-colors">
                Shop now
            </a>
        </div>
    </div>
</section>

<!-- Marquee Section -->
<style>
  .marquee-container {
    width: 100%;
    overflow: hidden;
    background-color: #ffffff;
    padding: 30px 0;
  }
  .marquee-track {
    display: flex;
    align-items: center;
    gap: 60px;
    animation: marquee-scroll 30s linear infinite;
    white-space: nowrap;
  }
  .marquee-item {
    display: flex;
    align-items: center;
    gap: 60px;
    flex-shrink: 0;
  }
  .marquee-text {
    font-family: "Oswald", sans-serif;
    font-weight: 600;
    font-size: 60px;
    color: #000000;
    text-transform: uppercase;
    letter-spacing: 2px;
    margin: 0;
  }
  .marquee-image {
    height: 80px;
    width: auto;
    object-fit: contain;
    flex-shrink: 0;
  }
  .marquee-content-group {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    gap: 12px;
  }
  .marquee-heading {
    font-family: "Oswald", sans-serif;
    font-weight: 600;
    font-size: 24px;
    color: #000000;
    text-transform: uppercase;
    margin: 0;
    line-height: 1.2;
  }
  .marquee-button {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 12px 24px;
    background-color: #ffffff;
    color: #000000;
    border: 2px solid #000000;
    text-decoration: none;
    font-family: "Oswald", sans-serif;
    font-weight: 600;
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 1px;
    transition: all 0.3s ease;
    white-space: nowrap;
  }
  .marquee-button:hover {
    background-color: #000000;
    color: #ffffff;
  }
  @keyframes marquee-scroll {
    0% { transform: translateX(0); }
    100% { transform: translateX(-50%); }
  }
  .marquee-track:hover {
    animation-play-state: paused;
  }
  @media screen and (max-width: 749px) {
    .marquee-text { font-size: 42px; }
    .marquee-heading { font-size: 19.2px; }
    .marquee-image { height: 64px; width: 64px; }
    .marquee-item { gap: 42px; }
  }
</style>

<div class="marquee-container my-16 border-y border-gray-200">
  <div class="marquee-track">
    <!-- Set 1 -->
    <div class="marquee-item">
      <h2 class="marquee-text">Feel the essence</h2>
      <img src="{{ asset('assets/products/b3e594ad1c203f6dfdce2fd3f1be84bd.jpg') }}" alt="" class="marquee-image" loading="lazy" height="80">
      <div class="marquee-content-group">
        <h3 class="marquee-heading">Shop Now</h3>
        <a href="#" class="marquee-button">View Collection</a>
      </div>
    </div>
    <div class="marquee-item">
      <h2 class="marquee-text">Feel the essence</h2>
      <img src="{{ asset('assets/products/e00ddbab55b8305fe9bff814717c8cdb.jpg') }}" alt="" class="marquee-image" loading="lazy" height="80">
      <div class="marquee-content-group">
        <h3 class="marquee-heading">Trending</h3>
        <a href="#" class="marquee-button">Shop Best Sellers</a>
      </div>
    </div>
    <div class="marquee-item">
      <h2 class="marquee-text">Feel the essence</h2>
      <img src="{{ asset('assets/products/e8b53858921a1ec2d934f48c6befe20a.jpg') }}" alt="" class="marquee-image" loading="lazy" height="80">
      <div class="marquee-content-group">
        <h3 class="marquee-heading">Save Big</h3>
        <a href="#" class="marquee-button">Shop Sale</a>
      </div>
    </div>
    <div class="marquee-item">
      <h2 class="marquee-text">Feel the essence</h2>
      <img src="{{ asset('assets/products/07d253be6b103a6d5a4aa00970fb2442.jpg') }}" alt="" class="marquee-image" loading="lazy" height="80">
      <div class="marquee-content-group">
        <h3 class="marquee-heading">Exclusive</h3>
        <a href="#" class="marquee-button">Get Yours</a>
      </div>
    </div>
    
    <!-- Set 2 (Duplicate for seamless loop) -->
    <div class="marquee-item">
      <h2 class="marquee-text">Feel the essence</h2>
      <img src="{{ asset('assets/products/b3e594ad1c203f6dfdce2fd3f1be84bd.jpg') }}" alt="" class="marquee-image" loading="lazy" height="80">
      <div class="marquee-content-group">
        <h3 class="marquee-heading">Shop Now</h3>
        <a href="#" class="marquee-button">View Collection</a>
      </div>
    </div>
    <div class="marquee-item">
      <h2 class="marquee-text">Feel the essence</h2>
      <img src="{{ asset('assets/products/e00ddbab55b8305fe9bff814717c8cdb.jpg') }}" alt="" class="marquee-image" loading="lazy" height="80">
      <div class="marquee-content-group">
        <h3 class="marquee-heading">Trending</h3>
        <a href="#" class="marquee-button">Shop Best Sellers</a>
      </div>
    </div>
    <div class="marquee-item">
      <h2 class="marquee-text">Feel the essence</h2>
      <img src="{{ asset('assets/products/e8b53858921a1ec2d934f48c6befe20a.jpg') }}" alt="" class="marquee-image" loading="lazy" height="80">
      <div class="marquee-content-group">
        <h3 class="marquee-heading">Save Big</h3>
        <a href="#" class="marquee-button">Shop Sale</a>
      </div>
    </div>
    <div class="marquee-item">
      <h2 class="marquee-text">Feel the essence</h2>
      <img src="{{ asset('assets/products/07d253be6b103a6d5a4aa00970fb2442.jpg') }}" alt="" class="marquee-image" loading="lazy" height="80">
      <div class="marquee-content-group">
        <h3 class="marquee-heading">Exclusive</h3>
        <a href="#" class="marquee-button">Get Yours</a>
      </div>
    </div>
  </div>
</div><!-- Testimonials Section -->
<style>
  .testimonials-container {
    padding: 60px 20px 60px;
    background-color: #ffffff;
    width: 100%;
    max-width: 100%;
    overflow: hidden;
    box-sizing: border-box;
  }

  .testimonials-wrapper {
    max-width: 1200px;
    margin: 0 auto;
    text-align: center;
    width: 100%;
    box-sizing: border-box;
  }

  .testimonials-header {
    margin-bottom: 40px;
  }

  .testimonials-title {
    font-family: "Oswald", sans-serif;
    font-weight: 600;
    font-size: 32px;
    color: #1f282f;
    margin: 0 0 16px;
    text-transform: uppercase;
  }

  .testimonials-subtitle {
    font-family: sans-serif;
    font-weight: 400;
    font-size: 16px;
    color: #000000;
    margin: 0;
  }

  .testimonials-slider {
    position: relative;
    width: 100%;
    max-width: 100%;
    height: 300px;
    margin-bottom: 20px;
    overflow: hidden;
    box-sizing: border-box;
  }

  .testimonials-track {
    display: flex;
    width: 100%;
    height: 100%;
    transition: transform 0.6s ease-in-out;
    box-sizing: border-box;
  }

  .testimonial-card {
    flex: 0 0 100%;
    width: 100%;
    max-width: 100%;
    height: 100%;
    padding: 40px;
    background-color: #f8f8f8;
    border-radius: 12px;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    align-items: flex-start;
    text-align: left;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    position: relative;
    box-sizing: border-box;
    overflow: hidden;
  }

  .testimonial-author {
    font-family: "Oswald", sans-serif;
    font-weight: 600;
    font-size: 16px;
    color: #1f282f;
    margin: 0 0 12px;
    text-transform: uppercase;
    word-wrap: break-word;
    overflow-wrap: break-word;
  }

  .testimonial-stars {
    display: flex;
    gap: 4px;
    margin-bottom: 16px;
    flex-wrap: wrap;
  }

  .testimonial-star {
    width: 14px;
    height: 14px;
    flex-shrink: 0;
  }

  .testimonial-star-filled {
    color: #000000;
  }

  .testimonial-star-empty {
    color: #e0e0e0;
  }

  .testimonial-quote {
    font-family: sans-serif;
    font-weight: 400;
    font-size: 18px;
    line-height: 1.6;
    color: #000000;
    margin: 0;
    flex-grow: 1;
    word-wrap: break-word;
    overflow-wrap: break-word;
    hyphens: auto;
  }

  .testimonial-position {
    font-family: sans-serif;
    font-weight: 400;
    font-size: 14px;
    color: #666666;
    margin: 16px 0 0;
    opacity: 0.8;
    word-wrap: break-word;
    overflow-wrap: break-word;
  }

  .testimonials-loader {
    width: 100%;
    max-width: 200px;
    height: 3px;
    background-color: #e6e6e6;
    border-radius: 2px;
    margin: 0 auto;
    overflow: hidden;
    position: relative;
  }

  .testimonials-progress {
    height: 100%;
    background-color: #1f282f;
    border-radius: 2px;
    width: 0%;
    transition: width 0.1s linear;
  }

  @media screen and (max-width: 990px) {
    .testimonials-container { padding: 48px 16px 48px; }
    .testimonials-title { font-size: 27.2px; }
    .testimonials-subtitle { font-size: 14.4px; }
    .testimonial-card { padding: 32px; }
    .testimonials-slider { height: 270px; }
  }

  @media screen and (max-width: 749px) {
    .testimonials-container { padding: 42px 16px 42px; }
    .testimonials-header { margin-bottom: 24px; }
    .testimonials-title { font-size: 22.4px; margin-bottom: 12px; }
    .testimonials-subtitle { font-size: 13.6px; }
    .testimonial-card { padding: 24px 20px; }
    .testimonials-slider { height: auto; min-height: 240px; }
    .testimonial-quote { font-size: 16.2px; }
    .testimonial-author { font-size: 14.4px; }
    .testimonial-position { font-size: 12.6px; }
    .testimonials-loader { max-width: 150px; }
  }

  @media screen and (max-width: 480px) {
    .testimonials-container { padding: 36px 12px 36px; }
    .testimonial-card { padding: 20px 16px; }
    .testimonials-title { font-size: 19.2px; }
    .testimonial-quote { font-size: 14.4px; }
    .testimonials-loader { max-width: 120px; }
  }
</style>

<testimonials-slider class="testimonials-container" data-autoplay-interval="5">
  <div class="testimonials-wrapper">
    <div class="testimonials-header">
      <h2 class="testimonials-title">What our customers say</h2>
      <p class="testimonials-subtitle">Real reviews from real customers</p>
    </div>

    <div class="testimonials-slider">
      <div class="testimonials-track">
        <div class="testimonial-card" data-testimonial="1">
          <div class="testimonial-author">Sunita Bhatnagar</div>
          <div class="testimonial-stars">
            <svg class="testimonial-star testimonial-star-filled" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"></polygon></svg>
            <svg class="testimonial-star testimonial-star-filled" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"></polygon></svg>
            <svg class="testimonial-star testimonial-star-filled" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"></polygon></svg>
            <svg class="testimonial-star testimonial-star-filled" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"></polygon></svg>
            <svg class="testimonial-star testimonial-star-filled" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"></polygon></svg>
          </div>
          <blockquote class="testimonial-quote">The kurta I ordered arrived beautifully stitched. The fabric quality is outstanding — exactly what you'd expect from a premium ethnic wear brand!</blockquote>
          <div class="testimonial-position">Verified Customer</div>
        </div>
        
        <div class="testimonial-card" data-testimonial="2">
          <div class="testimonial-author">Manish singhla</div>
          <div class="testimonial-stars">
            <svg class="testimonial-star testimonial-star-filled" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"></polygon></svg>
            <svg class="testimonial-star testimonial-star-filled" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"></polygon></svg>
            <svg class="testimonial-star testimonial-star-filled" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"></polygon></svg>
            <svg class="testimonial-star testimonial-star-filled" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"></polygon></svg>
            <svg class="testimonial-star testimonial-star-filled" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"></polygon></svg>
          </div>
          <blockquote class="testimonial-quote">The Pathani suit fits perfectly and the cotton is so breathable. I've worn it to multiple occasions and always get compliments. Highly recommend!</blockquote>
          <div class="testimonial-position">Regular Customer</div>
        </div>

        <div class="testimonial-card" data-testimonial="3">
          <div class="testimonial-author">KRISHIKA GUPTA</div>
          <div class="testimonial-stars">
            <svg class="testimonial-star testimonial-star-filled" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"></polygon></svg>
            <svg class="testimonial-star testimonial-star-filled" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"></polygon></svg>
            <svg class="testimonial-star testimonial-star-filled" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"></polygon></svg>
            <svg class="testimonial-star testimonial-star-filled" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"></polygon></svg>
            <svg class="testimonial-star testimonial-star-filled" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"></polygon></svg>
          </div>
          <blockquote class="testimonial-quote">Fast delivery, premium packaging, and the sherwani looks absolutely regal. The embroidery is detailed and the sizing is spot on. Will definitely order again!</blockquote>
          <div class="testimonial-position">Happy Customer</div>
        </div>
      </div>
    </div>

    <div class="testimonials-loader">
      <div class="testimonials-progress"></div>
    </div>
  </div>
</testimonials-slider>

<script>
  (function() {
    class TestimonialsSlider extends HTMLElement {
      constructor() {
        super();
        this.currentSlide = 0;
        this.totalSlides = 0;
        this.autoplayInterval = null;
        this.progressInterval = null;
        this.startTime = 0;
        this.duration = 0;
      }

      connectedCallback() {
        this.track = this.querySelector('.testimonials-track');
        this.cards = this.querySelectorAll('.testimonial-card');
        this.progressBar = this.querySelector('.testimonials-progress');
        
        this.totalSlides = this.cards.length;
        this.duration = parseInt(this.dataset.autoplayInterval) * 1000;

        if (this.totalSlides > 0) {
          this.init();
        }
      }

      init() {
        this.updateSlide();
        this.startAutoplay();
      }

      updateSlide() {
        if (!this.track) return;
        const translateX = -this.currentSlide * 100;
        this.track.style.transform = `translateX(${translateX}%)`;
      }

      nextSlide() {
        this.currentSlide = (this.currentSlide + 1) % this.totalSlides;
        this.updateSlide();
      }

      startAutoplay() {
        if (this.totalSlides <= 1) return;
        this.startTime = Date.now();
        this.updateProgress();

        this.autoplayInterval = setInterval(() => {
          this.nextSlide();
          this.startTime = Date.now();
        }, this.duration);

        this.progressInterval = setInterval(() => {
          this.updateProgress();
        }, 50);
      }

      updateProgress() {
        if (!this.progressBar) return;
        const elapsed = Date.now() - this.startTime;
        const progress = Math.min((elapsed / this.duration) * 100, 100);
        this.progressBar.style.width = `${progress}%`;
      }

      resetAutoplay() {
        if (this.autoplayInterval) clearInterval(this.autoplayInterval);
        if (this.progressInterval) clearInterval(this.progressInterval);
        this.startAutoplay();
      }

      disconnectedCallback() {
        if (this.autoplayInterval) clearInterval(this.autoplayInterval);
        if (this.progressInterval) clearInterval(this.progressInterval);
      }
    }

    customElements.define('testimonials-slider', TestimonialsSlider);
  })();
</script>

<!-- Our Core Products Section -->
<section class="py-16 bg-[#f4f4f4]">
    <div class="container mx-auto px-6 md:px-12">
        <div class="flex justify-between items-end mb-8">
            <div>
                <p class="text-gray-600 text-sm tracking-wider uppercase mb-1">Our Core</p>
                <h2 class="text-3xl font-bold font-['Oswald'] uppercase text-gray-900">Products</h2>
            </div>
            <a href="/collections/all" class="text-sm font-medium hover:underline text-gray-900 uppercase">Shop now</a>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6">
            <!-- Product 1 -->
            <div class="bg-[#f4f4f4] group flex flex-col h-full">
                <div class="product-image-slider relative aspect-square bg-[#f0f0f0] mb-4 overflow-hidden group/slider" 
                     data-images='["{{ asset('assets/products/07d253be6b103a6d5a4aa00970fb2442.jpg') }}", "{{ asset('assets/products/2183e5c0fc528398d9f56d6d1a870872.jpg') }}"]'>
                    <span class="absolute top-2 left-2 bg-gray-800 text-white text-xs px-2 py-1 rounded-full z-10 pointer-events-none">Sale</span>
                    <a href="#" class="block w-full h-full relative">
                        <img src="{{ asset('assets/products/07d253be6b103a6d5a4aa00970fb2442.jpg') }}" alt="Embroidered Silk Kurta" class="slider-img w-full h-full object-cover transition-opacity duration-300">
                    </a>
                    <button class="slider-prev absolute left-2 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-white p-1 rounded-full shadow-md opacity-0 group-hover/slider:opacity-100 transition-opacity z-20">
                        <svg class="w-4 h-4 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                    </button>
                    <button class="slider-next absolute right-2 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-white p-1 rounded-full shadow-md opacity-0 group-hover/slider:opacity-100 transition-opacity z-20">
                        <svg class="w-4 h-4 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </button>
                    <div class="slider-dots absolute bottom-2 left-1/2 -translate-x-1/2 flex gap-1.5 z-20 opacity-0 group-hover/slider:opacity-100 transition-opacity">
                        <!-- Dots injected by JS -->
                    </div>
                </div>
                <div class="flex flex-col flex-grow">
                    <a href="#" class="text-gray-900 font-['Oswald'] uppercase font-medium hover:underline mb-2">Embroidered Silk Kurta</a>
                    <div class="flex items-center gap-2 mt-auto pb-4">
                        <span class="text-gray-900 font-medium">Rs. 479.00</span>
                        <span class="text-gray-500 line-through text-sm">Rs. 599.00</span>
                    </div>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="bg-[#f4f4f4] group flex flex-col h-full">
                <div class="product-image-slider relative aspect-square bg-[#f0f0f0] mb-4 overflow-hidden group/slider" 
                     data-images='["{{ asset('assets/products/2cf2091b6b0a327c61d924aba4422361.jpg') }}", "{{ asset('assets/products/4b023aab378b4d93467f6e030b209f70.jpg') }}"]'>
                    <span class="absolute top-2 left-2 bg-gray-800 text-white text-xs px-2 py-1 rounded-full z-10 pointer-events-none">Sale</span>
                    <a href="#" class="block w-full h-full relative">
                        <img src="{{ asset('assets/products/2cf2091b6b0a327c61d924aba4422361.jpg') }}" alt="Classic Cotton Pathani Suit" class="slider-img w-full h-full object-cover transition-opacity duration-300">
                    </a>
                    <button class="slider-prev absolute left-2 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-white p-1 rounded-full shadow-md opacity-0 group-hover/slider:opacity-100 transition-opacity z-20">
                        <svg class="w-4 h-4 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                    </button>
                    <button class="slider-next absolute right-2 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-white p-1 rounded-full shadow-md opacity-0 group-hover/slider:opacity-100 transition-opacity z-20">
                        <svg class="w-4 h-4 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </button>
                    <div class="slider-dots absolute bottom-2 left-1/2 -translate-x-1/2 flex gap-1.5 z-20 opacity-0 group-hover/slider:opacity-100 transition-opacity">
                        <!-- Dots injected by JS -->
                    </div>
                </div>
                <div class="flex flex-col flex-grow">
                    <a href="#" class="text-gray-900 font-['Oswald'] uppercase font-medium hover:underline mb-2">Classic Cotton Pathani Suit</a>
                    <div class="flex items-center gap-2 mt-auto pb-4">
                        <span class="text-gray-900 font-medium">Rs. 399.00</span>
                        <span class="text-gray-500 line-through text-sm">Rs. 460.00</span>
                    </div>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="bg-[#f4f4f4] group flex flex-col h-full">
                <div class="product-image-slider relative aspect-square bg-[#f0f0f0] mb-4 overflow-hidden group/slider" 
                     data-images='["{{ asset('assets/products/84f7d7c500671af9117168db9a995448.jpg') }}", "{{ asset('assets/products/8a2bff56c967d7da30a50efef2347793.jpg') }}"]'>
                    <span class="absolute top-2 left-2 bg-gray-800 text-white text-xs px-2 py-1 rounded-full z-10 pointer-events-none">Sale</span>
                    <a href="#" class="block w-full h-full relative">
                        <img src="{{ asset('assets/products/84f7d7c500671af9117168db9a995448.jpg') }}" alt="Premium Jacquard Sherwani" class="slider-img w-full h-full object-cover transition-opacity duration-300">
                    </a>
                    <button class="slider-prev absolute left-2 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-white p-1 rounded-full shadow-md opacity-0 group-hover/slider:opacity-100 transition-opacity z-20">
                        <svg class="w-4 h-4 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                    </button>
                    <button class="slider-next absolute right-2 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-white p-1 rounded-full shadow-md opacity-0 group-hover/slider:opacity-100 transition-opacity z-20">
                        <svg class="w-4 h-4 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </button>
                    <div class="slider-dots absolute bottom-2 left-1/2 -translate-x-1/2 flex gap-1.5 z-20 opacity-0 group-hover/slider:opacity-100 transition-opacity">
                        <!-- Dots injected by JS -->
                    </div>
                </div>
                <div class="flex flex-col flex-grow">
                    <a href="#" class="text-gray-900 font-['Oswald'] uppercase font-medium hover:underline mb-2">Premium Jacquard Sherwani</a>
                    <div class="flex items-center gap-2 mt-auto pb-4">
                        <span class="text-gray-900 font-medium">Rs. 399.00</span>
                        <span class="text-gray-500 line-through text-sm">Rs. 479.00</span>
                    </div>
                </div>
            </div>

            <!-- Product 4 -->
            <div class="bg-[#f4f4f4] group flex flex-col h-full">
                <div class="product-image-slider relative aspect-square bg-[#f0f0f0] mb-4 overflow-hidden group/slider" 
                     data-images='["{{ asset('assets/products/9493e6f4de86ab31a597f0161766857d.jpg') }}", "{{ asset('assets/products/ad9318da853cddee6d486b0ccc51b8d9.jpg') }}"]'>
                    <span class="absolute top-2 left-2 bg-gray-800 text-white text-xs px-2 py-1 rounded-full z-10 pointer-events-none">Sale</span>
                    <a href="#" class="block w-full h-full relative">
                        <img src="{{ asset('assets/products/9493e6f4de86ab31a597f0161766857d.jpg') }}" alt="Handwoven Linen Nehru Jacket" class="slider-img w-full h-full object-cover transition-opacity duration-300">
                    </a>
                    <button class="slider-prev absolute left-2 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-white p-1 rounded-full shadow-md opacity-0 group-hover/slider:opacity-100 transition-opacity z-20">
                        <svg class="w-4 h-4 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                    </button>
                    <button class="slider-next absolute right-2 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-white p-1 rounded-full shadow-md opacity-0 group-hover/slider:opacity-100 transition-opacity z-20">
                        <svg class="w-4 h-4 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </button>
                    <div class="slider-dots absolute bottom-2 left-1/2 -translate-x-1/2 flex gap-1.5 z-20 opacity-0 group-hover/slider:opacity-100 transition-opacity">
                        <!-- Dots injected by JS -->
                    </div>
                </div>
                <div class="flex flex-col flex-grow">
                    <a href="#" class="text-gray-900 font-['Oswald'] uppercase font-medium hover:underline mb-2">Handwoven Linen Nehru Jacket</a>
                    <div class="flex items-center gap-2 mt-auto pb-4">
                        <span class="text-gray-900 font-medium">Rs. 395.00</span>
                        <span class="text-gray-500 line-through text-sm">Rs. 499.00</span>
                    </div>
                </div>
            </div>
        </div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const sliders = document.querySelectorAll('.product-image-slider');
    
    sliders.forEach(slider => {
        const images = JSON.parse(slider.dataset.images || '[]');
        if (images.length <= 1) return;
        
        let currentIndex = 0;
        const imgElement = slider.querySelector('.slider-img');
        const prevBtn = slider.querySelector('.slider-prev');
        const nextBtn = slider.querySelector('.slider-next');
        const dotsContainer = slider.querySelector('.slider-dots');
        
        // Create dots
        images.forEach((_, idx) => {
            const dot = document.createElement('div');
            dot.className = `w-1.5 h-1.5 rounded-full transition-colors cursor-pointer ${idx === 0 ? 'bg-gray-800' : 'bg-gray-400'}`;
            dot.addEventListener('click', (e) => {
                e.preventDefault();
                goToImage(idx);
            });
            dotsContainer.appendChild(dot);
        });
        
        const dots = dotsContainer.querySelectorAll('div');
        
        function goToImage(index) {
            currentIndex = index;
            // Update image
            imgElement.style.opacity = 0.5;
            setTimeout(() => {
                imgElement.src = images[currentIndex];
                imgElement.style.opacity = 1;
            }, 150);
            
            // Update dots
            dots.forEach((dot, idx) => {
                if (idx === currentIndex) {
                    dot.classList.remove('bg-gray-400');
                    dot.classList.add('bg-gray-800');
                } else {
                    dot.classList.remove('bg-gray-800');
                    dot.classList.add('bg-gray-400');
                }
            });
        }
        
        prevBtn.addEventListener('click', (e) => {
            e.preventDefault();
            let newIndex = currentIndex - 1;
            if (newIndex < 0) newIndex = images.length - 1;
            goToImage(newIndex);
        });
        
        nextBtn.addEventListener('click', (e) => {
            e.preventDefault();
            let newIndex = currentIndex + 1;
            if (newIndex >= images.length) newIndex = 0;
            goToImage(newIndex);
        });
        
        // Show second image on hover like the original site
        slider.addEventListener('mouseenter', () => {
            if(currentIndex === 0) {
                goToImage(1);
            }
        });
        
        slider.addEventListener('mouseleave', () => {
            goToImage(0);
        });
    });
});
</script>
    </div>
</section>

<!-- Ethnic Wear Chronicles Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6 md:px-12 max-w-6xl">
        <h2 class="text-3xl md:text-4xl font-bold font-['Oswald'] uppercase text-[#1c1c1c] text-center mb-12 tracking-wide">Ethnic Wear Chronicles</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Article 1 (Featured Style) -->
            <a href="#" class="group relative block w-full h-[450px] overflow-hidden">
                <img src="{{ asset('assets/products/84f7d7c500671af9117168db9a995448.jpg') }}" alt="The History Behind the Classic Sherwani" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                <div class="absolute bottom-0 left-0 p-8 w-full flex flex-col justify-end h-full">
                    <p class="text-white/80 text-xs tracking-[0.1em] uppercase mb-4 font-sans">March 17, 2024</p>
                    <h3 class="text-white font-['Oswald'] font-bold text-[22px] uppercase leading-snug mb-6 w-11/12">The History Behind the Classic Sherwani</h3>
                    <span class="text-white text-[11px] font-bold uppercase tracking-[0.15em] border-b-2 border-white pb-1 w-fit group-hover:text-gray-300 group-hover:border-gray-300 transition-colors">Read More</span>
                </div>
            </a>

            <!-- Article 2 -->
            <a href="#" class="group flex flex-col w-full h-[450px]">
                <div class="w-full h-[280px] overflow-hidden bg-gray-100">
                    <img src="{{ asset('assets/products/9493e6f4de86ab31a597f0161766857d.jpg') }}" alt="Why the Nehru Jacket is a Must-Have" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                </div>
                <div class="flex-grow bg-white pt-8 pb-4 flex flex-col justify-start">
                    <p class="text-gray-500 text-xs tracking-[0.1em] uppercase mb-3 font-sans">March 17, 2024</p>
                    <h3 class="text-[#1c1c1c] font-['Oswald'] font-bold text-[18px] uppercase leading-snug mb-5">Why the Nehru Jacket is a Must-Have</h3>
                    <span class="text-[#1c1c1c] text-[11px] font-bold uppercase tracking-[0.15em] mt-auto w-fit border-b-2 border-[#1c1c1c] pb-1 group-hover:text-gray-500 group-hover:border-gray-500 transition-colors">Read More</span>
                </div>
            </a>

            <!-- Article 3 -->
            <a href="#" class="group flex flex-col w-full h-[450px]">
                <div class="w-full h-[280px] overflow-hidden bg-gray-100">
                    <img src="{{ asset('assets/products/07d253be6b103a6d5a4aa00970fb2442.jpg') }}" alt="How to Style Your Kurta for Any Occasion" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                </div>
                <div class="flex-grow bg-white pt-8 pb-4 flex flex-col justify-start">
                    <p class="text-gray-500 text-xs tracking-[0.1em] uppercase mb-3 font-sans">March 14, 2024</p>
                    <h3 class="text-[#1c1c1c] font-['Oswald'] font-bold text-[18px] uppercase leading-snug mb-5">How to Style Your Kurta for Any Occasion</h3>
                    <span class="text-[#1c1c1c] text-[11px] font-bold uppercase tracking-[0.15em] mt-auto w-fit border-b-2 border-[#1c1c1c] pb-1 group-hover:text-gray-500 group-hover:border-gray-500 transition-colors">Read More</span>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- Feel The Essence Section -->
<section class="pt-16 pb-20 bg-white overflow-hidden">
    <div class="text-center mb-10">
        <h2 class="text-3xl md:text-[40px] font-bold font-['Oswald'] uppercase text-black tracking-wide">Feel the essence</h2>
    </div>

    <!-- The carousel / scrolling container -->
    <div class="w-full relative overflow-hidden group">
        <style>
            @keyframes essence-marquee {
                0% { transform: translateX(0%); }
                100% { transform: translateX(-50%); }
            }
            .animate-essence-marquee {
                animation: essence-marquee 50s linear infinite;
            }
            .group:hover .animate-essence-marquee {
                animation-play-state: paused;
            }
        </style>
        <!-- No gap here, we use padding-right on items so the math perfectly aligns for the -50% loop -->
        <div class="flex w-max animate-essence-marquee">
            
            <!-- Original 10 Images -->
            <div class="w-[75vw] sm:w-[40vw] md:w-[23vw] flex-shrink-0 aspect-square pr-4 md:pr-[18px]">
                <img src="{{ asset('assets/products/07d253be6b103a6d5a4aa00970fb2442.jpg') }}" alt="Essence 1" class="w-full h-full object-cover bg-gray-100">
            </div>
            <div class="w-[75vw] sm:w-[40vw] md:w-[23vw] flex-shrink-0 aspect-square pr-4 md:pr-[18px]">
                <img src="{{ asset('assets/products/2183e5c0fc528398d9f56d6d1a870872.jpg') }}" alt="Essence 2" class="w-full h-full object-cover bg-gray-100">
            </div>
            <div class="w-[75vw] sm:w-[40vw] md:w-[23vw] flex-shrink-0 aspect-square pr-4 md:pr-[18px]">
                <img src="{{ asset('assets/products/2cf2091b6b0a327c61d924aba4422361.jpg') }}" alt="Essence 3" class="w-full h-full object-cover bg-gray-100">
            </div>
            <div class="w-[75vw] sm:w-[40vw] md:w-[23vw] flex-shrink-0 aspect-square pr-4 md:pr-[18px]">
                <img src="{{ asset('assets/products/4b023aab378b4d93467f6e030b209f70.jpg') }}" alt="Essence 4" class="w-full h-full object-cover bg-gray-100">
            </div>
            <div class="w-[75vw] sm:w-[40vw] md:w-[23vw] flex-shrink-0 aspect-square pr-4 md:pr-[18px]">
                <img src="{{ asset('assets/products/84f7d7c500671af9117168db9a995448.jpg') }}" alt="Essence 5" class="w-full h-full object-cover bg-gray-100">
            </div>
            <div class="w-[75vw] sm:w-[40vw] md:w-[23vw] flex-shrink-0 aspect-square pr-4 md:pr-[18px]">
                <img src="{{ asset('assets/products/8a2bff56c967d7da30a50efef2347793.jpg') }}" alt="Essence 6" class="w-full h-full object-cover bg-gray-100">
            </div>
            <div class="w-[75vw] sm:w-[40vw] md:w-[23vw] flex-shrink-0 aspect-square pr-4 md:pr-[18px]">
                <img src="{{ asset('assets/products/9493e6f4de86ab31a597f0161766857d.jpg') }}" alt="Essence 7" class="w-full h-full object-cover bg-gray-100">
            </div>
            <div class="w-[75vw] sm:w-[40vw] md:w-[23vw] flex-shrink-0 aspect-square pr-4 md:pr-[18px]">
                <img src="{{ asset('assets/products/ad9318da853cddee6d486b0ccc51b8d9.jpg') }}" alt="Essence 8" class="w-full h-full object-cover bg-gray-100">
            </div>
            <div class="w-[75vw] sm:w-[40vw] md:w-[23vw] flex-shrink-0 aspect-square pr-4 md:pr-[18px]">
                <img src="{{ asset('assets/products/b3e594ad1c203f6dfdce2fd3f1be84bd.jpg') }}" alt="Essence 9" class="w-full h-full object-cover bg-gray-100">
            </div>
            <div class="w-[75vw] sm:w-[40vw] md:w-[23vw] flex-shrink-0 aspect-square pr-4 md:pr-[18px]">
                <img src="{{ asset('assets/products/e00ddbab55b8305fe9bff814717c8cdb.jpg') }}" alt="Essence 10" class="w-full h-full object-cover bg-gray-100">
            </div>

            <!-- Duplicated 10 Images (For perfect looping) -->
            <div class="w-[75vw] sm:w-[40vw] md:w-[23vw] flex-shrink-0 aspect-square pr-4 md:pr-[18px]">
                <img src="{{ asset('assets/products/07d253be6b103a6d5a4aa00970fb2442.jpg') }}" alt="Essence 1" class="w-full h-full object-cover bg-gray-100">
            </div>
            <div class="w-[75vw] sm:w-[40vw] md:w-[23vw] flex-shrink-0 aspect-square pr-4 md:pr-[18px]">
                <img src="{{ asset('assets/products/2183e5c0fc528398d9f56d6d1a870872.jpg') }}" alt="Essence 2" class="w-full h-full object-cover bg-gray-100">
            </div>
            <div class="w-[75vw] sm:w-[40vw] md:w-[23vw] flex-shrink-0 aspect-square pr-4 md:pr-[18px]">
                <img src="{{ asset('assets/products/2cf2091b6b0a327c61d924aba4422361.jpg') }}" alt="Essence 3" class="w-full h-full object-cover bg-gray-100">
            </div>
            <div class="w-[75vw] sm:w-[40vw] md:w-[23vw] flex-shrink-0 aspect-square pr-4 md:pr-[18px]">
                <img src="{{ asset('assets/products/4b023aab378b4d93467f6e030b209f70.jpg') }}" alt="Essence 4" class="w-full h-full object-cover bg-gray-100">
            </div>
            <div class="w-[75vw] sm:w-[40vw] md:w-[23vw] flex-shrink-0 aspect-square pr-4 md:pr-[18px]">
                <img src="{{ asset('assets/products/84f7d7c500671af9117168db9a995448.jpg') }}" alt="Essence 5" class="w-full h-full object-cover bg-gray-100">
            </div>
            <div class="w-[75vw] sm:w-[40vw] md:w-[23vw] flex-shrink-0 aspect-square pr-4 md:pr-[18px]">
                <img src="{{ asset('assets/products/8a2bff56c967d7da30a50efef2347793.jpg') }}" alt="Essence 6" class="w-full h-full object-cover bg-gray-100">
            </div>
            <div class="w-[75vw] sm:w-[40vw] md:w-[23vw] flex-shrink-0 aspect-square pr-4 md:pr-[18px]">
                <img src="{{ asset('assets/products/9493e6f4de86ab31a597f0161766857d.jpg') }}" alt="Essence 7" class="w-full h-full object-cover bg-gray-100">
            </div>
            <div class="w-[75vw] sm:w-[40vw] md:w-[23vw] flex-shrink-0 aspect-square pr-4 md:pr-[18px]">
                <img src="{{ asset('assets/products/ad9318da853cddee6d486b0ccc51b8d9.jpg') }}" alt="Essence 8" class="w-full h-full object-cover bg-gray-100">
            </div>
            <div class="w-[75vw] sm:w-[40vw] md:w-[23vw] flex-shrink-0 aspect-square pr-4 md:pr-[18px]">
                <img src="{{ asset('assets/products/b3e594ad1c203f6dfdce2fd3f1be84bd.jpg') }}" alt="Essence 9" class="w-full h-full object-cover bg-gray-100">
            </div>
            <div class="w-[75vw] sm:w-[40vw] md:w-[23vw] flex-shrink-0 aspect-square pr-4 md:pr-[18px]">
                <img src="{{ asset('assets/products/e00ddbab55b8305fe9bff814717c8cdb.jpg') }}" alt="Essence 10" class="w-full h-full object-cover bg-gray-100">
            </div>

        </div>
    </div>

    <!-- Follow Button -->
    <div class="flex justify-center mt-10 md:mt-14">
        <a href="https://instagram.com/ethnicwear" target="_blank" class="inline-block border border-gray-300 text-gray-800 text-[11px] font-sans font-semibold tracking-[0.1em] uppercase px-10 py-3.5 hover:bg-black hover:text-white hover:border-black transition-colors">
            Follow us on Instagram @ethnicwear
        </a>
    </div>
</section>

<!-- Script for Slider -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const sliderInput = document.getElementById('slider-input');
        const sliderOverlay = document.getElementById('slider-overlay');
        const sliderHandle = document.getElementById('slider-handle');
        const beforeImg = document.getElementById('before-img');
        const sliderContainer = document.getElementById('comparison-slider');

        if(sliderInput && sliderOverlay && sliderHandle && beforeImg && sliderContainer) {
            function resizeBeforeImg() {
                beforeImg.style.width = sliderContainer.offsetWidth + 'px';
            }
            window.addEventListener('resize', resizeBeforeImg);
            setTimeout(resizeBeforeImg, 100);

            sliderInput.addEventListener('input', function(e) {
                const val = e.target.value;
                sliderOverlay.style.width = val + '%';
                sliderHandle.style.left = val + '%';
            });
        }
    });
</script>
@endsection