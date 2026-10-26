<header 
    x-data="{ mobileOpen: false, scrolled: false }" 
    @scroll.window="scrolled = (window.pageYOffset > 10)"
    class="sticky top-0 z-50 bg-white/98 backdrop-blur-md border-b border-[#dce5e8] transition-all duration-200"
>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20 sm:h-24">
            
            <!-- Logo ONLY (Clean without text) -->
            <a href="{{ url('/') }}" class="flex items-center">
                <img 
                    src="{{ asset('images/nce-logo.png') }}" 
                    alt="NCE Logo" 
                    class="h-10 sm:h-10 w-auto object-contain"
                    onerror="this.src='{{ asset('images/nce.png') }}'"
                >
            </a>

        

            <!-- Actions -->
            <div class="hidden lg:flex items-center gap-5">
                   <!-- Desktop Navigation Links (Clean dummy links with #) -->
            <nav class="hidden lg:flex items-center gap-8 text-[13px] font-bold text-[#102f43]">
                <a href="{{ route('about') }}" class="hover:text-[#147cb5] transition py-2">About</a>
                <a href="{{ route('home') }}#benefits" class="hover:text-[#147cb5] transition py-2">Membership</a>
                <a href="{{ route('home') }}#events" class="hover:text-[#147cb5] transition py-2">Events</a>
                <a href="{{ route('home') }}#faqs" class="hover:text-[#147cb5] transition py-2">FAQs</a>
            </nav>
                <a 
                    href="{{ route('home') }}#enquiry" 
                    class="inline-flex items-center justify-center gap-2  text-[#147cb5] text-[13px] font-bold px-5 py-2 transition duration-150 "
                >
                    <span>Member Sign In</span>
                    <span class="text-base font-normal leading-none">&rarr;</span>
                </a>
            </div>

            <!-- Mobile Menu Toggle Button -->
            <button 
                @click="mobileOpen = !mobileOpen"
                type="button" 
                class="lg:hidden p-2 rounded-md border border-[#dce5e8] text-[#102f43] hover:bg-[#f6f7f4] transition focus:outline-none"
                aria-label="Toggle navigation"
            >
                <i x-show="!mobileOpen" data-lucide="menu" class="w-5 h-5"></i>
                <i x-show="mobileOpen" x-cloak data-lucide="x" class="w-5 h-5"></i>
            </button>
        </div>
    </div>

    <!-- Mobile Dropdown Navigation -->
    <div 
        x-show="mobileOpen" 
        x-cloak
        x-transition:enter="transition ease-out duration-150"
        x-transition:enter-start="opacity-0 -translate-y-2"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-100"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-2"
        class="lg:hidden max-h-[calc(100svh-80px)] sm:max-h-[calc(100svh-96px)] overflow-y-auto border-t border-[#dce5e8] bg-white px-6 py-6 space-y-4 shadow-lg"
    >
        <div class="flex flex-col space-y-3 text-sm font-bold text-[#102f43]">
            <a @click="mobileOpen = false" href="{{ route('about') }}" class="hover:text-[#147cb5]">About</a>
            <a @click="mobileOpen = false" href="{{ route('home') }}#benefits" class="hover:text-[#147cb5]">Membership</a>
            <a @click="mobileOpen = false" href="{{ route('home') }}#events" class="hover:text-[#147cb5]">Events</a>
            <a @click="mobileOpen = false" href="{{ route('home') }}#faqs" class="hover:text-[#147cb5]">FAQs</a>
        </div>

        <div class="pt-4 border-t border-[#dce5e8] flex flex-col gap-3">
            <a 
                @click="mobileOpen = false"
                href="#" 
                class="w-full text-center py-2.5 text-xs font-bold text-[#102f43] border border-[#dce5e8] rounded-md hover:bg-[#f6f7f4] transition"
            >
                Member Sign In
            </a>
            <a 
                @click="mobileOpen = false" 
                href="{{ route('home') }}#enquiry" 
                class="w-full text-center py-3 text-xs font-bold text-white bg-[#147cb5] hover:bg-[#106491] rounded-md transition"
            >
                Register your business &rarr;
            </a>
        </div>
    </div>
</header>