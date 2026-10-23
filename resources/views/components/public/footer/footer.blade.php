<footer class="bg-[#082f49] text-white font-sans pt-16 pb-12 border-t border-[#062438]" id="contact">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Top Footer Grid -->
        <div class="grid grid-cols-1 md:grid-cols-12 gap-12 pb-14 border-b border-[#ffffff15]">
            
            <!-- Col 1: Brand & Ethos -->
            <div class="md:col-span-5 space-y-4">
                <a href="{{ url('/') }}" class="inline-block">
                    <img 
                        src="{{ asset('images/nce-logo.png') }}" 
                        alt="NCE Logo" 
                        class="h-11 w-auto bg-white p-1 rounded-sm"
                        onerror="this.src='{{ asset('images/nce.png') }}'"
                    >
                </a>
                <p class="text-sm text-[#b4d0df] leading-relaxed max-w-sm">
                    Navodaya Council of Entrepreneurs.<br>
                    A shared beginning. A world of possibilities.
                </p>
                <p class="text-xs text-[#8cb3c7] leading-relaxed max-w-sm pt-1">
                    Duly registered Section 8 non-profit company (Govt. of India) uniting Jawahar Navodaya Vidyalaya alumni founders, executives, and professionals nationwide.
                </p>
            </div>

            <!-- Col 2: Navigation -->
            <div class="md:col-span-3 space-y-3">
                <h3 class="text-xs font-bold uppercase tracking-[0.16em] text-[#b4d0df]">Explore NCE</h3>
                <nav class="flex flex-col space-y-2.5 text-sm text-slate-200">
                    <a href="#about" class="hover:text-white transition">Our Story & Ethos</a>
                    <a href="#benefits" class="hover:text-white transition">Membership Benefits</a>
                    <a href="#chapters" class="hover:text-white transition">Regional State Chapters</a>
                    <a href="#directory" class="hover:text-white transition">Alumni Business Directory</a>
                    <a href="#events" class="hover:text-white transition">Upcoming Events & Pitches</a>
                    <a href="#faqs" class="hover:text-white transition">Frequently Asked Questions</a>
                </nav>
            </div>

            <!-- Col 3: Contact & Secretariat -->
            <div class="md:col-span-4 space-y-3">
                <h3 class="text-xs font-bold uppercase tracking-[0.16em] text-[#b4d0df]">Start A Conversation</h3>
                <div class="space-y-3 text-sm">
                    <a href="mailto:info@ncoe.org.in" class="inline-flex items-center gap-1.5 text-base font-bold text-white hover:text-sky-300 transition">
                        <span>info@ncoe.org.in</span>
                        <span class="text-lg">↗</span>
                    </a>
                    <p class="text-xs text-[#b4d0df] leading-relaxed">
                        For membership enquiries, business introductions, and chapter coordination:
                    </p>
                    <div class="text-xs text-slate-300 space-y-1 pt-1">
                        <p><strong class="text-white">Helpline:</strong> +91 94118 41092</p>
                        <p><strong class="text-white">Secretariat:</strong> Second Floor, H-46, South Extension I, Block H, New Delhi, Delhi 110047</p>
                        <p><strong class="text-white">National Meets:</strong> Sundays 8:00 AM IST (Virtual Zoom)</p>
                    </div>
                </div>
            </div>

        </div>

        <!-- Bottom Copyright -->
        <div class="pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-[#8cb3c7]">
            <div>
                © {{ date('Y') }} Navodaya Council of Entrepreneurs. All rights reserved.
            </div>
            <div>
                Connected by Navodaya. Growing together.
            </div>
        </div>

    </div>
</footer>