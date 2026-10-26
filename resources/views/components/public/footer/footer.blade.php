<footer class="bg-[#082f49] text-white font-sans pt-14 pb-8 border-t border-[#062438]" id="contact">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Top Footer Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 lg:gap-12 pb-12 border-b border-white/10">

            <!-- Brand -->
            <div class="sm:col-span-2">
                <a href="{{ url('/') }}" class="inline-block">
                    <img
                        src="{{ asset('images/nce-logo.png') }}"
                        alt="NCE Logo"
                        class="h-10 w-auto bg-white p-1 rounded-sm"
                        onerror="this.src='{{ asset('images/nce.png') }}'"
                    >
                </a>
                <p class="mt-5 text-sm text-[#b4d0df] leading-relaxed max-w-sm">
                    Shared roots. Growing together. A national community of Navodayan founders, executives, and professionals.
                </p>
                <p class="mt-3 text-xs text-[#8cb3c7]">
                    Registered Section 8 non-profit company, Government of India.
                </p>
            </div>

            <!-- Explore -->
            <div>
                <h3 class="text-xs font-bold uppercase tracking-[0.16em] text-[#b4d0df]">Explore</h3>
                <nav class="mt-4 flex flex-col gap-2.5 text-sm text-slate-200">
                    <a href="{{ route('about') }}" class="hover:text-white transition">About NCE</a>
                    <a href="{{ route('home') }}#benefits" class="hover:text-white transition">Membership Benefits</a>
                    <a href="{{ route('home') }}#chapters" class="hover:text-white transition">Regional Chapters</a>
                    <a href="{{ route('home') }}#directory" class="hover:text-white transition">Business Directory</a>
                    <a href="{{ route('home') }}#events" class="hover:text-white transition">Upcoming Events</a>
                </nav>
            </div>

            <!-- Contact -->
            <div>
                <h3 class="text-xs font-bold uppercase tracking-[0.16em] text-[#b4d0df]">Get in touch</h3>
                <a href="mailto:info@ncoe.org.in" class="mt-4 inline-flex items-center gap-1.5 text-sm font-bold text-white hover:text-sky-300 transition">
                    <span>info@ncoe.org.in</span>
                    <span class="text-base leading-none">↗</span>
                </a>
                <a href="tel:+919411841092" class="mt-2 block text-sm text-[#b4d0df] hover:text-white transition">
                    +91 94118 41092
                </a>
                <p class="mt-4 text-xs text-[#8cb3c7] leading-relaxed">
                    South Extension I, New Delhi
                </p>
            </div>

        </div>

        <!-- Bottom Bar -->
        <div class="pt-7 flex flex-col sm:flex-row items-center justify-between gap-3 text-xs text-[#8cb3c7]">
            <p>© {{ date('Y') }} Navodaya Council of Entrepreneurs. All rights reserved.</p>
            <p>Shared roots. Growing together.</p>
        </div>

    </div>
</footer>
