<!-- Footer Top: Email Subscribe -->
<section class="bg-[#f4f4f4] py-14 md:py-20">
    <div class="container mx-auto px-6 text-center max-w-2xl">
        <h2 class="text-3xl md:text-4xl font-bold font-['Oswald'] uppercase text-[#1c1c1c] mb-3 tracking-wide">
            Subscribe to our emails
        </h2>
        <p class="text-gray-600 text-sm mb-8 font-sans">
            Be the first to <span class="text-[#b8860b]">know</span> about new <span class="text-[#b8860b]">collections</span> and special offers.
        </p>

        <form action="#" method="POST" class="flex items-center max-w-md mx-auto border border-gray-400 rounded-full overflow-hidden bg-white focus-within:ring-2 focus-within:ring-gray-400 transition">
            @csrf
            <input
                type="email"
                name="email"
                placeholder="Email address"
                required
                class="flex-grow px-6 py-3.5 bg-transparent text-gray-700 text-sm font-sans focus:outline-none placeholder-gray-400"
            >
            <button type="submit" class="px-5 py-3.5 text-gray-600 hover:text-black transition-colors pr-6">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
            </button>
        </form>
    </div>
</section>
