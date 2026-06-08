<!-- Footer: Dark Navigation Footer -->
<footer class="bg-[#1e2128] text-white pt-14 pb-6">
    <div class="container mx-auto px-6 md:px-12 max-w-7xl">

        <!-- Top row: Logo + Nav columns -->
        <div class="grid grid-cols-2 md:grid-cols-5 gap-10 mb-12">

            <!-- Logo -->
            <div class="col-span-2 md:col-span-1 flex items-start">
                <img src="//mudaura.com/cdn/shop/files/mudaura-logo_e4fc2a15-5f00-484d-9d12-b2b3b2b0f5e0.png?v=1737634298&width=200" 
                     alt="MudAura Logo" 
                     class="h-16 w-auto object-contain opacity-90"
                     onerror="this.style.display='none'; this.nextElementSibling.style.display='flex'">
                <div class="hidden w-14 h-14 rounded-full border border-[#b8860b]/60 items-center justify-center">
                    <span class="text-[#b8860b] font-['Oswald'] font-bold text-lg">M</span>
                </div>
            </div>

            <!-- Navigate -->
            <div>
                <h3 class="text-[11px] font-bold uppercase tracking-[0.15em] text-white mb-5 font-sans">Navigate</h3>
                <ul class="space-y-3">
                    <li><a href="/" class="text-gray-400 hover:text-white text-sm font-sans transition-colors">Home</a></li>
                    <li><a href="/collections/all" class="text-gray-400 hover:text-white text-sm font-sans transition-colors">Shop</a></li>
                    <li><a href="/contact" class="text-gray-400 hover:text-white text-sm font-sans transition-colors">Contact</a></li>
                    <li><a href="/blogs" class="text-gray-400 hover:text-white text-sm font-sans transition-colors">Blogs</a></li>
                </ul>
            </div>

            <!-- Collections -->
            <div>
                <h3 class="text-[11px] font-bold uppercase tracking-[0.15em] text-white mb-5 font-sans">Collections</h3>
                <ul class="space-y-3">
                    <li><a href="/collections/hair" class="text-gray-400 hover:text-white text-sm font-sans transition-colors">Hair</a></li>
                    <li><a href="/collections/face" class="text-gray-400 hover:text-white text-sm font-sans transition-colors">Face</a></li>
                    <li><a href="/collections/smile" class="text-gray-400 hover:text-white text-sm font-sans transition-colors">Smile</a></li>
                    <li><a href="/collections/combo" class="text-gray-400 hover:text-white text-sm font-sans transition-colors">Combo</a></li>
                </ul>
            </div>

            <!-- Products -->
            <div>
                <h3 class="text-[11px] font-bold uppercase tracking-[0.15em] text-white mb-5 font-sans">Products</h3>
                <ul class="space-y-3">
                    <li><a href="/products/soap" class="text-gray-400 hover:text-white text-sm font-sans transition-colors">Soap</a></li>
                    <li><a href="/products/hair-oil" class="text-[#b8860b] hover:text-yellow-400 text-sm font-sans transition-colors">Hair Oil</a></li>
                    <li><a href="/products/toothpowder" class="text-[#b8860b] hover:text-yellow-400 text-sm font-sans transition-colors">Toothpowder</a></li>
                    <li><a href="/products/shampoo" class="text-gray-400 hover:text-white text-sm font-sans transition-colors">Shampoo</a></li>
                </ul>
            </div>

            <!-- Customer -->
            <div>
                <h3 class="text-[11px] font-bold uppercase tracking-[0.15em] text-white mb-5 font-sans">Customer</h3>
                <ul class="space-y-3">
                    <li><a href="/orders" class="text-gray-400 hover:text-white text-sm font-sans transition-colors">Orders</a></li>
                    <li><a href="/account" class="text-gray-400 hover:text-white text-sm font-sans transition-colors">Account</a></li>
                    <li><a href="/contact" class="text-gray-400 hover:text-white text-sm font-sans transition-colors">Contact</a></li>
                </ul>
            </div>

        </div>

        <!-- Divider -->
        <div class="border-t border-gray-700 pt-6 flex flex-col md:flex-row justify-between items-center gap-4">

            <!-- Copyright & Links -->
            <div class="flex items-center gap-4 text-xs text-gray-500 font-sans">
                <span>&copy; {{ date('Y') }} MudAura. Designed by <span class="hover:text-gray-300 cursor-pointer transition-colors">Tracklock Studio</span></span>
                <a href="/policies" class="hover:text-gray-300 transition-colors">Terms and Policies</a>
            </div>

            <!-- Social Icons -->
            <div class="flex items-center gap-4">
                <a href="https://facebook.com/mudaura" target="_blank" aria-label="Facebook" class="text-gray-400 hover:text-white transition-colors">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                    </svg>
                </a>
                <a href="https://instagram.com/mudaura" target="_blank" aria-label="Instagram" class="text-gray-400 hover:text-white transition-colors">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/>
                    </svg>
                </a>
            </div>

        </div>
    </div>
</footer>
