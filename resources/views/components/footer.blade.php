<footer class="bg-gradient-to-b from-gray-100 to-gray-300 py-10">
    <div class="container mx-auto max-w-6xl">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Logo & Description -->
            <div>
                <img src="{{ Vite::asset('resources/images/logo.png') }}" alt="Logo" class="img-fluid mb-4">
                <p class="text-gray-700 text-sm">
                    Subscribe to our newsletter to get updates about our grand offers.
                </p>
                <div class="flex space-x-3 mt-4">
                    <a href="#" class="text-gray-500 hover:text-gray-800 transition">
                        <iconify-icon icon="ri:facebook-fill" class="h-6 w-6"></iconify-icon>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-800 transition">
                        <iconify-icon icon="ri:twitter-fill" class="h-6 w-6"></iconify-icon>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-800 transition">
                        <iconify-icon icon="ri:pinterest-fill" class="h-6 w-6"></iconify-icon>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-800 transition">
                        <iconify-icon icon="ri:instagram-fill" class="h-6 w-6"></iconify-icon>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-800 transition">
                        <iconify-icon icon="ri:youtube-fill" class="h-6 w-6"></iconify-icon>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="text-gray-800 font-semibold text-lg mb-4">Quick Links</h3>
                <ul class="space-y-2 text-gray-600 text-sm">
                    <li><a href="{{ url('/') }}" class="hover:text-gray-800 transition">Home</a></li>
                    <li><a href="{{ url('/aboutus') }}" class="hover:text-gray-800 transition">About Us</a></li>
                    <li><a href="#" class="hover:text-gray-800 transition">Offer</a></li>
                    <li><a href="{{ url('/services') }}" class="hover:text-gray-800 transition">Services</a></li>
                    <li><a href="{{ url('/contact') }}" class="hover:text-gray-800 transition">Contact Us</a></li>
                </ul>
            </div>

            <!-- Help Center -->
            <div>
                <h3 class="text-gray-800 font-semibold text-lg mb-4">Help Center</h3>
                <ul class="space-y-2 text-gray-600 text-sm">
                    <li><a href="#" class="hover:text-gray-800 transition">FAQs</a></li>
                    <li><a href="#" class="hover:text-gray-800 transition">Payment</a></li>
                    <li><a href="#" class="hover:text-gray-800 transition">Returns & Refunds</a></li>
                    <li><a href="#" class="hover:text-gray-800 transition">Checkout</a></li>
                    <li><a href="#" class="hover:text-gray-800 transition">Delivery Information</a></li>
                </ul>
            </div>

            <!-- Newsletter -->
            <div>
                <h3 class="text-gray-800 font-semibold text-lg mb-4">Our Newsletter</h3>
                <p class="text-gray-600 text-sm mb-4">
                    Subscribe to our newsletter to get updates about our grand offers.
                </p>
                <div class="flex items-center border rounded-lg px-2 bg-white shadow-sm">
                    <input type="email" placeholder="Enter your email" class="w-full px-3 py-2 border-none focus:outline-none text-sm text-gray-700">
                    <button class="bg-gray-800 text-white px-4 py-2 rounded-lg hover:bg-gray-700 transition">
                        Subscribe
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-gray-200 mt-10">
        <div class="container mx-auto max-w-6xl py-4 flex justify-between items-center text-sm text-gray-600">
            <p>© 2023 Ular Hitam. All rights reserved.</p>
            <ul class="flex space-x-4">
                <li><a href="#" class="hover:text-gray-800 transition">Privacy Policy</a></li>
                <li><a href="#" class="hover:text-gray-800 transition">Terms of Service</a></li>
            </ul>
        </div>
    </div>
</footer>
