<x-layouts.app>
    <x-slot:title>
        NCE — Navodaya Council of Entrepreneurs | Shared roots. Growing together.
    </x-slot:title>

    <!-- ========================================================================= -->
    <!-- 1. HERO SECTION WITH MODERN CLEAN SLIDER (join.nceconnect.org style) -->
    <!-- ========================================================================= -->
    <!-- ========================================================================= -->
    <!-- 1. HERO SLIDER (Panoramic design matching reference, no badge, light theme) -->
    <!-- ========================================================================= -->
    <!-- ========================================================================= -->
    <!-- 1. FULL-SCREEN CLEAN HERO SLIDER (Architectural Light Design with Tabs) -->
    <!-- ========================================================================= -->
    <section 
        id="hero"
        class="relative bg-white border-b border-[#dce5e8] min-h-[640px] lg:h-[calc(100vh-80px)] lg:min-h-[680px] lg:max-h-[860px] flex flex-col justify-between overflow-hidden"
        x-data="{
            currentSlide: 0,
            totalSlides: 3,
            timer: null,
            paused: false,
            init() {
                this.timer = setInterval(() => {
                    if (!this.paused) {
                        this.next();
                    }
                }, 6000);
            },
            next() {
                this.currentSlide = (this.currentSlide + 1) % this.totalSlides;
            },
            prev() {
                this.currentSlide = (this.currentSlide - 1 + this.totalSlides) % this.totalSlides;
            },
            goTo(i) {
                this.currentSlide = i;
            }
        }"
        @mouseenter="paused = true"
        @mouseleave="paused = false"
    >
        <!-- Main Slide Viewport (Middle Section) -->
        <div class="relative flex-1 flex items-center w-full">
            
            <!-- ================= SLIDE 0: Alumni Mentorship ================= -->
            <div 
                x-show="currentSlide === 0" 
                x-transition:enter="transition ease-out duration-500"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in duration-300 absolute inset-0"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                class="w-full h-full flex items-center py-10 lg:py-14"
            >
                <!-- Right Side Cinematic Photo with Smooth Horizontal Fade to White -->
                <div class="absolute inset-y-0 right-0 w-full sm:w-[68%] lg:w-[60%] overflow-hidden pointer-events-none">
                    <img 
                        src="{{ asset('images/slide-mentorship.webp') }}" 
                        alt="Senior Navodayans Mentorship Conference" 
                        class="w-full h-full object-cover object-center sm:object-right"
                    >
                    <!-- Pure White Fade Mask to the Left -->
                    <div class="absolute inset-0 bg-gradient-to-r from-white via-white/90 sm:via-white/50 lg:via-white/5 to-transparent"></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-white/40 sm:from-transparent via-transparent to-transparent"></div>
                </div>

                <!-- Left Content Area (NO BADGE, Satoshi Typography, Light Buttons) -->
                <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
                    <div class="max-w-xl lg:max-w-2xl space-y-6">
                        
                        <!-- Slide Index Eyebrow (No badge) -->
                        <span class="text-xs font-bold text-[#147cb5] tracking-[0.2em] uppercase block">
                            01 / Alumni Mentorship
                        </span>

                        <!-- Bold Clean Headline -->
                        <h1 class="text-4xl sm:text-5xl lg:text-[60px] font-bold tracking-tight text-[#102f43] leading-[1.08]">
                            Senior Navodayans<br>
                            <span class="text-[#147cb5]">Guiding the Next</span><br>
                            Generation.
                        </h1>

                        <!-- Description Copy -->
                        <p class="text-base sm:text-lg lg:text-xl text-[#526875] leading-relaxed max-w-lg">
                            Connect one-on-one with experienced Navodaya alumni who are now successful founders, corporate leaders, and officers, ready to help you succeed.
                        </p>

                        <!-- Light Theme Buttons (2 Clean Buttons Only) -->
                        <div class="flex flex-wrap items-center gap-4 pt-2">
                            <a href="#enquiry" class="btn-theme-primary">
                                <span>Find a Mentor</span>
                                <span class="text-base leading-none">↗</span>
                            </a>
                            <a href="#directory" class="btn-theme-light">
                                <span>Browse Directory</span>
                                <span class="text-base leading-none">→</span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>

            <!-- ================= SLIDE 1: Shared Roots & Collaborative Growth ================= -->
            <div 
                x-show="currentSlide === 1" 
                x-cloak
                x-transition:enter="transition ease-out duration-500"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in duration-300 absolute inset-0"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                class="w-full h-full flex items-center py-10 lg:py-14"
            >
                <!-- Right Side Cinematic Photo with Smooth Horizontal Fade to White -->
                <div class="absolute inset-y-0 right-0 w-full sm:w-[68%] lg:w-[60%] overflow-hidden pointer-events-none">
                    <img 
                        src="{{ asset('images/about.jpeg') }}" 
                        alt="Navodaya Council of Entrepreneurs Community Convention" 
                        class="w-full h-full object-cover object-center sm:object-right"
                    >
                    <!-- Pure White Fade Mask to the Left -->
                    <div class="absolute inset-0 bg-gradient-to-r from-white via-white/90 sm:via-white/50 lg:via-white/5 to-transparent"></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-white/40 sm:from-transparent via-transparent to-transparent"></div>
                </div>

                <!-- Left Content Area (NO BADGE, Satoshi Typography, Light Buttons) -->
                <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
                    <div class="max-w-xl lg:max-w-2xl space-y-6">
                        
                        <!-- Slide Index Eyebrow (No badge) -->
                        <span class="text-xs font-bold text-[#147cb5] tracking-[0.2em] uppercase block">
                            02 / Community & Values
                        </span>

                        <!-- Bold Clean Headline -->
                        <h1 class="text-4xl sm:text-5xl lg:text-[60px] font-bold tracking-tight text-[#102f43] leading-[1.08]">
                            Shared roots.<br>
                            <span class="text-[#147cb5]">Growing together</span><br>
                            in business.
                        </h1>

                        <!-- Description Copy -->
                        <p class="text-base sm:text-lg lg:text-xl text-[#526875] leading-relaxed max-w-lg">
                            From our Navodaya classrooms to the enterprises we build today. Collaborate with trusted alumni founders across 8 state chapters and diverse industries.
                        </p>

                        <!-- Light Theme Buttons (2 Clean Buttons Only) -->
                        <div class="flex flex-wrap items-center gap-4 pt-2">
                            <a href="#enquiry" class="btn-theme-primary">
                                <span>Register your business</span>
                                <span class="text-base leading-none">↗</span>
                            </a>
                            <a href="#benefits" class="btn-theme-light">
                                <span>Membership Benefits</span>
                                <span class="text-base leading-none">→</span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>

            <!-- ================= SLIDE 2: Nationwide Founder Network ================= -->
            <div 
                x-show="currentSlide === 2" 
                x-cloak
                x-transition:enter="transition ease-out duration-500"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in duration-300 absolute inset-0"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                class="w-full h-full flex items-center py-10 lg:py-14"
            >
                <!-- Right Side Cinematic Photo with Smooth Horizontal Fade to White -->
                <div class="absolute inset-y-0 right-0 w-full sm:w-[68%] lg:w-[60%] overflow-hidden pointer-events-none">
                    <img 
                        src="{{ asset('images/banner-1.webp') }}" 
                        alt="NCE Delegates National Gathering" 
                        class="w-full h-full object-cover object-center sm:object-right"
                    >
                    <!-- Pure White Fade Mask to the Left -->
                    <div class="absolute inset-0 bg-gradient-to-r from-white via-white/90 sm:via-white/50 lg:via-white/5 to-transparent"></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-white/40 sm:from-transparent via-transparent to-transparent"></div>
                </div>

                <!-- Left Content Area (NO BADGE, Satoshi Typography, Light Buttons) -->
                <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
                    <div class="max-w-xl lg:max-w-2xl space-y-6">
                        
                        <!-- Slide Index Eyebrow (No badge) -->
                        <span class="text-xs font-bold text-[#147cb5] tracking-[0.2em] uppercase block">
                            03 / Chapter Network
                        </span>

                        <!-- Bold Clean Headline -->
                        <h1 class="text-4xl sm:text-5xl lg:text-[60px] font-bold tracking-tight text-[#102f43] leading-[1.08]">
                            A nationwide network<br>
                            <span class="text-[#147cb5]">of 13,000+ alumni</span><br>
                            entrepreneurs.
                        </h1>

                        <!-- Description Copy -->
                        <p class="text-base sm:text-lg lg:text-xl text-[#526875] leading-relaxed max-w-lg">
                            Exchange verified business referrals, schedule direct peer consultations, and unlock opportunities across 8 regional state chapters.
                        </p>

                        <!-- Light Theme Buttons (2 Clean Buttons Only) -->
                        <div class="flex flex-wrap items-center gap-4 pt-2">
                            <a href="#chapters" class="btn-theme-primary">
                                <span>Explore Regional Chapters</span>
                                <span class="text-base leading-none">↗</span>
                            </a>
                            <a href="#directory" class="btn-theme-light">
                                <span>Search Directory</span>
                                <span class="text-base leading-none">→</span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>

        </div>

        <!-- ================= Minimal Clean Indicator Dots at Bottom ================= -->
        <div class="relative z-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-8 sm:pb-10 w-full flex items-center gap-2">
            <template x-for="i in totalSlides" :key="i">
                <button 
                    @click="goTo(i - 1)"
                    :class="currentSlide === (i - 1) ? 'w-8 bg-[#147cb5]' : 'w-2.5 bg-[#dce5e8] hover:bg-[#526875]'"
                    class="h-1.5 rounded-full transition-all duration-200 cursor-pointer"
                    :aria-label="'Go to slide ' + i"
                ></button>
            </template>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 2. VALUES BAR (Exact component from join.nceconnect.org) -->
    <!-- ========================================================================= -->
    <section class="bg-[#082f49] text-white py-8 border-b border-[#062438]" aria-label="Our community values">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 items-center gap-6">
                <div>
                    <strong class="text-xl sm:text-2xl font-bold tracking-tight block">Let's grow together.</strong>
                </div>
                <div class="sm:border-l border-white/20 sm:pl-6 text-sm">
                    <div class="font-bold">Shared Navodayan roots</div>
                    <span class="block text-[11px] text-[#b4d0df] tracking-[0.12em] uppercase mt-0.5">Our foundation</span>
                </div>
                <div class="sm:border-l border-white/20 sm:pl-6 text-sm">
                    <div class="font-bold">Meaningful connections</div>
                    <span class="block text-[11px] text-[#b4d0df] tracking-[0.12em] uppercase mt-0.5">Our strength</span>
                </div>
                <div class="sm:border-l border-white/20 sm:pl-6 text-sm">
                    <div class="font-bold">Growth through collaboration</div>
                    <span class="block text-[11px] text-[#b4d0df] tracking-[0.12em] uppercase mt-0.5">Our purpose</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 3. LET'S WIN TOGETHER / ABOUT NCOE (Clean Light Design, Left Content, Right Image) -->
    <!-- ========================================================================= -->
    <section id="about" class="py-20 sm:py-24 bg-white border-b border-[#dce5e8] font-segoe">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
                
                <!-- Left Side: Clean Content & Segoe UI Typography -->
                <div class="lg:col-span-7 space-y-6">
                    <div>
                        <!-- Title with 'Together' in theme cyan/blue (#147cb5) -->
                        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold tracking-tight text-[#102f43] leading-tight mb-3">
                            Let's Win <span class="text-[#147cb5]">Together</span>
                        </h2>

                        <!-- Subtitle -->
                        <p class="text-base sm:text-lg text-[#526875] leading-relaxed">
                            Navodaya Council of Entrepreneurs (NCoE): Uniting &amp; Elevating Navodayan Entreprenerus.
                        </p>
                    </div>

                    <!-- 5 Core Commitments with Square Bullets -->
                    <ul class="space-y-3.5 sm:space-y-4 text-sm sm:text-base pt-1">
                        <li class="flex items-start gap-3">
                            <span class="inline-block w-2 h-2 bg-[#147cb5] shrink-0 mt-2"></span>
                            <p class="text-[#526875] leading-relaxed">
                                <strong class="font-bold text-[#102f43]">Empowerment:</strong> 
                                Fostering entrepreneurship among Navodaya Vidyalaya alumni.
                            </p>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="inline-block w-2 h-2 bg-[#147cb5] shrink-0 mt-2"></span>
                            <p class="text-[#526875] leading-relaxed">
                                <strong class="font-bold text-[#102f43]">Networking:</strong> 
                                Building connections for business growth and collaboration.
                            </p>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="inline-block w-2 h-2 bg-[#147cb5] shrink-0 mt-2"></span>
                            <p class="text-[#526875] leading-relaxed">
                                <strong class="font-bold text-[#102f43]">Resources:</strong> 
                                Providing legal guidance, educational materials, and expert coaching.
                            </p>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="inline-block w-2 h-2 bg-[#147cb5] shrink-0 mt-2"></span>
                            <p class="text-[#526875] leading-relaxed">
                                <strong class="font-bold text-[#102f43]">Commitment:</strong> 
                                A nominal INR 1000 fee for access to our weekly online meetings, NCoE portal and WhatsApp groups.
                            </p>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="inline-block w-2 h-2 bg-[#147cb5] shrink-0 mt-2"></span>
                            <p class="text-[#526875] leading-relaxed">
                                <strong class="font-bold text-[#102f43]">Integrity:</strong> 
                                Members pledge to support and generate business within the community.
                            </p>
                        </li>
                    </ul>

                    <!-- Closing Statement & Action Callout -->
                    <div class="pt-6 border-t border-[#dce5e8] flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                        <p class="text-sm sm:text-base font-semibold text-[#102f43] leading-relaxed">
                            Join NCoE and be part of a legacy of innovation and excellence.
                        </p>
                        <a 
                            href="#enquiry" 
                            class="btn-theme-primary shrink-0"
                        >
                            <span>Join NCoE</span>
                            <span>&rarr;</span>
                        </a>
                    </div>
                </div>

                <!-- Right Side: Clean Authentic Image Frame -->
                <div class="lg:col-span-5">
                    <div class="lg:sticky lg:top-28 space-y-3">
                        <div class="overflow-hidden rounded-xl border border-[#dce5e8] bg-[#f6f7f4] shadow-xs">
                            <img 
                                src="{{ asset('images/about.jpeg') }}" 
                                alt="Entrepreneurs sharing experiences during an NCoE business meeting"
                                class="w-full h-80 sm:h-96 lg:h-[460px] object-cover"
                            >
                        </div>
                        
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 5. MEMBERSHIP BENEFITS (Authentic 8 Benefits with Icons & Light Theme) -->
    <!-- ========================================================================= -->
    <section id="benefits" class="py-20 sm:py-24 bg-white border-b border-[#dce5e8]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Section Header -->
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-14">
                <div>
                    <span class="eyebrow">Our Exclusive</span>
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold tracking-tight text-[#102f43] leading-tight">
                        Membership Benefits
                    </h2>
                </div>
                <p class="text-base text-[#526875] max-w-lg">
                    Designed to empower every Navodayan entrepreneur with verified networks, executive reach, and collaborative business growth.
                </p>
            </div>

            <!-- 8 Authentic Benefits Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                
                <!-- 1. Valuable Insights -->
                <div class="bg-white rounded-xl border border-[#dce5e8] p-6 sm:p-7 flex flex-col justify-between transition-all duration-200 hover:border-[#147cb5] hover:-translate-y-1 hover:shadow-md group">
                    <div>
                        <div class="w-16 h-16 rounded-xl bg-[#f6f7f4] border border-[#dce5e8] flex items-center justify-center mb-5 group-hover:bg-[#147cb5]/10 group-hover:border-[#147cb5]/40 transition-colors">
                            <img src="{{ asset('images/benefits/insights.png') }}" alt="Valuable Insights" class="w-10 h-10 object-contain transition-transform duration-200 group-hover:scale-105">
                        </div>
                        <h3 class="text-lg font-bold text-[#102f43] mb-2.5 group-hover:text-[#147cb5] transition-colors leading-snug">
                            Valuable Insights
                        </h3>
                        <p class="text-sm text-[#526875] leading-relaxed">
                            Interviews, event recording articles, analysis, white papers, market research, and curated business infographics.
                        </p>
                    </div>
                    <div class="pt-5 mt-5 border-t border-[#dce5e8]/60">
                        <span class="text-xs font-semibold text-[#147cb5] flex items-center gap-1.5">
                            <span>Knowledge Base</span>
                            <span>&rarr;</span>
                        </span>
                    </div>
                </div>

                <!-- 2. Online Events -->
                <div class="bg-white rounded-xl border border-[#dce5e8] p-6 sm:p-7 flex flex-col justify-between transition-all duration-200 hover:border-[#147cb5] hover:-translate-y-1 hover:shadow-md group">
                    <div>
                        <div class="w-16 h-16 rounded-xl bg-[#f6f7f4] border border-[#dce5e8] flex items-center justify-center mb-5 group-hover:bg-[#147cb5]/10 group-hover:border-[#147cb5]/40 transition-colors">
                            <img src="{{ asset('images/benefits/online-events.png') }}" alt="Online Events" class="w-10 h-10 object-contain transition-transform duration-200 group-hover:scale-105">
                        </div>
                        <h3 class="text-lg font-bold text-[#102f43] mb-2.5 group-hover:text-[#147cb5] transition-colors leading-snug">
                            Online Events
                        </h3>
                        <p class="text-sm text-[#526875] leading-relaxed">
                            Global, regional and local events: Virtual meetings, keynote summits, committee roundtables, and pitch practice.
                        </p>
                    </div>
                    <div class="pt-5 mt-5 border-t border-[#dce5e8]/60">
                        <span class="text-xs font-semibold text-[#147cb5] flex items-center gap-1.5">
                            <span>Weekly Sessions</span>
                            <span>&rarr;</span>
                        </span>
                    </div>
                </div>

                <!-- 3. Direct Messages -->
                <div class="bg-white rounded-xl border border-[#dce5e8] p-6 sm:p-7 flex flex-col justify-between transition-all duration-200 hover:border-[#147cb5] hover:-translate-y-1 hover:shadow-md group">
                    <div>
                        <div class="w-16 h-16 rounded-xl bg-[#f6f7f4] border border-[#dce5e8] flex items-center justify-center mb-5 group-hover:bg-[#147cb5]/10 group-hover:border-[#147cb5]/40 transition-colors">
                            <img src="{{ asset('images/benefits/direct-messages.png') }}" alt="Direct Messages" class="w-10 h-10 object-contain transition-transform duration-200 group-hover:scale-105">
                        </div>
                        <h3 class="text-lg font-bold text-[#102f43] mb-2.5 group-hover:text-[#147cb5] transition-colors leading-snug">
                            Direct Messages
                        </h3>
                        <p class="text-sm text-[#526875] leading-relaxed">
                            Exchange secure direct messages with verified members across India through our platform on computer or mobile.
                        </p>
                    </div>
                    <div class="pt-5 mt-5 border-t border-[#dce5e8]/60">
                        <span class="text-xs font-semibold text-[#147cb5] flex items-center gap-1.5">
                            <span>Alumni Chat</span>
                            <span>&rarr;</span>
                        </span>
                    </div>
                </div>

                <!-- 4. Scheduled Meetings -->
                <div class="bg-white rounded-xl border border-[#dce5e8] p-6 sm:p-7 flex flex-col justify-between transition-all duration-200 hover:border-[#147cb5] hover:-translate-y-1 hover:shadow-md group">
                    <div>
                        <div class="w-16 h-16 rounded-xl bg-[#f6f7f4] border border-[#dce5e8] flex items-center justify-center mb-5 group-hover:bg-[#147cb5]/10 group-hover:border-[#147cb5]/40 transition-colors">
                            <img src="{{ asset('images/benefits/scheduled-meetings.png') }}" alt="Scheduled Meetings" class="w-10 h-10 object-contain transition-transform duration-200 group-hover:scale-105">
                        </div>
                        <h3 class="text-lg font-bold text-[#102f43] mb-2.5 group-hover:text-[#147cb5] transition-colors leading-snug">
                            Scheduled Meetings
                        </h3>
                        <p class="text-sm text-[#526875] leading-relaxed">
                            Seamlessly schedule 1-on-1 strategic syncs and consultation calls with fellow business owners through our directory.
                        </p>
                    </div>
                    <div class="pt-5 mt-5 border-t border-[#dce5e8]/60">
                        <span class="text-xs font-semibold text-[#147cb5] flex items-center gap-1.5">
                            <span>1-on-1 Sync</span>
                            <span>&rarr;</span>
                        </span>
                    </div>
                </div>

                <!-- 5. Members Directory -->
                <div class="bg-white rounded-xl border border-[#dce5e8] p-6 sm:p-7 flex flex-col justify-between transition-all duration-200 hover:border-[#147cb5] hover:-translate-y-1 hover:shadow-md group">
                    <div>
                        <div class="w-16 h-16 rounded-xl bg-[#f6f7f4] border border-[#dce5e8] flex items-center justify-center mb-5 group-hover:bg-[#147cb5]/10 group-hover:border-[#147cb5]/40 transition-colors">
                            <img src="{{ asset('images/benefits/members-directory.png') }}" alt="Members Directory" class="w-10 h-10 object-contain transition-transform duration-200 group-hover:scale-105">
                        </div>
                        <h3 class="text-lg font-bold text-[#102f43] mb-2.5 group-hover:text-[#147cb5] transition-colors leading-snug">
                            Members Directory
                        </h3>
                        <p class="text-sm text-[#526875] leading-relaxed">
                            Fully searchable database enabling you to connect with over 13,000+ senior executives, founders, and professionals.
                        </p>
                    </div>
                    <div class="pt-5 mt-5 border-t border-[#dce5e8]/60">
                        <span class="text-xs font-semibold text-[#147cb5] flex items-center gap-1.5">
                            <span>13,000+ Verified</span>
                            <span>&rarr;</span>
                        </span>
                    </div>
                </div>

                <!-- 6. Brand Exposure -->
                <div class="bg-white rounded-xl border border-[#dce5e8] p-6 sm:p-7 flex flex-col justify-between transition-all duration-200 hover:border-[#147cb5] hover:-translate-y-1 hover:shadow-md group">
                    <div>
                        <div class="w-16 h-16 rounded-xl bg-[#f6f7f4] border border-[#dce5e8] flex items-center justify-center mb-5 group-hover:bg-[#147cb5]/10 group-hover:border-[#147cb5]/40 transition-colors">
                            <img src="{{ asset('images/benefits/brand-exposure.png') }}" alt="Brand Exposure" class="w-10 h-10 object-contain transition-transform duration-200 group-hover:scale-105">
                        </div>
                        <h3 class="text-lg font-bold text-[#102f43] mb-2.5 group-hover:text-[#147cb5] transition-colors leading-snug">
                            Brand Exposure
                        </h3>
                        <p class="text-sm text-[#526875] leading-relaxed">
                            Elevate your enterprise and founder brand through dedicated showcase articles, newsletters, and featured member spots.
                        </p>
                    </div>
                    <div class="pt-5 mt-5 border-t border-[#dce5e8]/60">
                        <span class="text-xs font-semibold text-[#147cb5] flex items-center gap-1.5">
                            <span>Featured Spotlights</span>
                            <span>&rarr;</span>
                        </span>
                    </div>
                </div>

                <!-- 7. In-person Exceptional Events -->
                <div class="bg-white rounded-xl border border-[#dce5e8] p-6 sm:p-7 flex flex-col justify-between transition-all duration-200 hover:border-[#147cb5] hover:-translate-y-1 hover:shadow-md group">
                    <div>
                        <div class="w-16 h-16 rounded-xl bg-[#f6f7f4] border border-[#dce5e8] flex items-center justify-center mb-5 group-hover:bg-[#147cb5]/10 group-hover:border-[#147cb5]/40 transition-colors">
                            <img src="{{ asset('images/benefits/in-person-events.png') }}" alt="In-person exceptional events" class="w-10 h-10 object-contain transition-transform duration-200 group-hover:scale-105">
                        </div>
                        <h3 class="text-lg font-bold text-[#102f43] mb-2.5 group-hover:text-[#147cb5] transition-colors leading-snug">
                            In-person exceptional events
                        </h3>
                        <p class="text-sm text-[#526875] leading-relaxed">
                            Exclusive local chapter meetups, regional networking breakfasts, and grand annual national NCE conventions.
                        </p>
                    </div>
                    <div class="pt-5 mt-5 border-t border-[#dce5e8]/60">
                        <span class="text-xs font-semibold text-[#147cb5] flex items-center gap-1.5">
                            <span>Regional Summits</span>
                            <span>&rarr;</span>
                        </span>
                    </div>
                </div>

                <!-- 8. Legal Assistance -->
                <div class="bg-white rounded-xl border border-[#dce5e8] p-6 sm:p-7 flex flex-col justify-between transition-all duration-200 hover:border-[#147cb5] hover:-translate-y-1 hover:shadow-md group">
                    <div>
                        <div class="w-16 h-16 rounded-xl bg-[#f6f7f4] border border-[#dce5e8] flex items-center justify-center mb-5 group-hover:bg-[#147cb5]/10 group-hover:border-[#147cb5]/40 transition-colors">
                            <img src="{{ asset('images/benefits/legal-assistance.png') }}" alt="Legal assistance" class="w-10 h-10 object-contain transition-transform duration-200 group-hover:scale-105">
                        </div>
                        <h3 class="text-lg font-bold text-[#102f43] mb-2.5 group-hover:text-[#147cb5] transition-colors leading-snug">
                            Legal assistance
                        </h3>
                        <p class="text-sm text-[#526875] leading-relaxed">
                            Statutory compliance, legal advisory, IP rights, contract reviews, and CA mentorship from experienced alumni professionals.
                        </p>
                    </div>
                    <div class="pt-5 mt-5 border-t border-[#dce5e8]/60">
                        <span class="text-xs font-semibold text-[#147cb5] flex items-center gap-1.5">
                            <span>Advisory Desk</span>
                            <span>&rarr;</span>
                        </span>
                    </div>
                </div>

            </div>

            <!-- Bottom Action Row -->
            <div class="mt-12 pt-8 border-t border-[#dce5e8] flex flex-col sm:flex-row items-start sm:items-center justify-between gap-6 bg-[#f6f7f4] p-6 sm:p-8 rounded-xl">
                <div>
                    <h4 class="text-lg font-bold text-[#102f43]">
                        Ready to access all 8 membership benefits?
                    </h4>
                    <p class="text-sm text-[#526875] mt-1">
                        Connect with fellow Navodayan founders and get your enterprise listed in our verified network.
                    </p>
                </div>
                <a 
                    href="#enquiry" 
                    class="inline-flex items-center justify-center px-6 py-3 text-sm font-bold text-white bg-[#082f49] hover:bg-[#147cb5] rounded-md transition-colors shadow-sm shrink-0"
                >
                    Register Your Business &rarr;
                </a>
            </div>

        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 6. TEAMS BY REGION / CHAPTER NETWORK (Bigger Clean Cards) -->
    <!-- ========================================================================= -->
    <section id="chapters" class="py-20 sm:py-24 bg-[#f6f7f4] border-b border-[#dce5e8]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Section Header (Centered) -->
            <div class="max-w-3xl mx-auto text-center mb-14 space-y-4">
                <span class="text-xs font-bold tracking-[0.14em] uppercase text-[#147cb5] block">Connected across places</span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold tracking-tight text-[#102f43] leading-tight">
                    Teams By Region
                </h2>
                <p class="text-base sm:text-lg text-[#526875] leading-relaxed">
                    NCE's network brings together Navodayans from cities across India. Wherever your business takes you, the strength of an active, verified regional community travels with you.
                </p>
            
                
            </div>

            <!-- Regional Chapter Cards Grid (Bigger & Clean 3-Column Layout) -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- 1. Lucknow (10 Members) -->
                <div class="bg-white rounded-xl border border-[#dce5e8] overflow-hidden hover:border-[#147cb5] hover:shadow-md transition-all duration-200 flex flex-col justify-between group">
                    <div>
                        <!-- High-impact City Photo -->
                        <div class="relative h-60 sm:h-64 overflow-hidden bg-[#f6f7f4]">
                            <img 
                                src="{{ asset('images/lucknow.jpeg') }}" 
                                alt="Lucknow Region Chapter" 
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                            >
                            <!-- Member Count Badge -->
                            <div class="absolute top-4 right-4 bg-white/95 backdrop-blur-xs px-3.5 py-1.5 rounded-full border border-[#dce5e8] shadow-xs flex items-center gap-1.5">
                                <span class="w-2 h-2 rounded-full bg-[#147cb5]"></span>
                                <span class="text-xs font-bold text-[#102f43]">10 Members</span>
                            </div>
                        </div>

                        <!-- Card Body -->
                        <div class="p-6 sm:p-7 space-y-3">
                            <h3 class="text-2xl font-bold text-[#102f43] group-hover:text-[#147cb5] transition-colors">
                                Lucknow
                            </h3>
                            <p class="text-sm text-[#526875] leading-relaxed">
                                Uttar Pradesh Chapter with active alumni founders in manufacturing, IT consulting, statutory audits, and healthcare.
                            </p>
                            <div class="pt-2 space-y-1.5 text-xs text-[#526875]">
                                <div class="flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 rounded-full bg-[#147cb5]"></span>
                                    <span>Weekly Friday Meetings • 7:30 AM</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 rounded-full bg-[#147cb5]"></span>
                                    <span>Regional Coordinator: Er. R. K. Verma</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card Action -->
                    <div class="p-6 sm:p-7 pt-0">
                        <a href="#enquiry" class="btn-theme-light w-full justify-center">
                            <span>Join Lucknow Chapter</span>
                            <span class="text-base leading-none">↗</span>
                        </a>
                    </div>
                </div>

                <!-- 2. Bhopal (4 Members) -->
                <div class="bg-white rounded-xl border border-[#dce5e8] overflow-hidden hover:border-[#147cb5] hover:shadow-md transition-all duration-200 flex flex-col justify-between group">
                    <div>
                        <!-- High-impact City Photo -->
                        <div class="relative h-60 sm:h-64 overflow-hidden bg-[#f6f7f4]">
                            <img 
                                src="{{ asset('images/bhopal.jpg') }}" 
                                alt="Bhopal Region Chapter" 
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                            >
                            <!-- Member Count Badge -->
                            <div class="absolute top-4 right-4 bg-white/95 backdrop-blur-xs px-3.5 py-1.5 rounded-full border border-[#dce5e8] shadow-xs flex items-center gap-1.5">
                                <span class="w-2 h-2 rounded-full bg-[#147cb5]"></span>
                                <span class="text-xs font-bold text-[#102f43]">4 Members</span>
                            </div>
                        </div>

                        <!-- Card Body -->
                        <div class="p-6 sm:p-7 space-y-3">
                            <h3 class="text-2xl font-bold text-[#102f43] group-hover:text-[#147cb5] transition-colors">
                                Bhopal
                            </h3>
                            <p class="text-sm text-[#526875] leading-relaxed">
                                Madhya Pradesh Chapter uniting founders across agri-tech, renewable energy, corporate legal, and engineering services.
                            </p>
                            <div class="pt-2 space-y-1.5 text-xs text-[#526875]">
                                <div class="flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 rounded-full bg-[#147cb5]"></span>
                                    <span>Weekly Thursday Meetings • 7:30 AM</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 rounded-full bg-[#147cb5]"></span>
                                    <span>Regional Coordinator: Dr. S. Patel</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card Action -->
                    <div class="p-6 sm:p-7 pt-0">
                        <a href="#enquiry" class="btn-theme-light w-full justify-center">
                            <span>Join Bhopal Chapter</span>
                            <span class="text-base leading-none">↗</span>
                        </a>
                    </div>
                </div>

                <!-- 3. Jaipur (4 Members) -->
                <div class="bg-white rounded-xl border border-[#dce5e8] overflow-hidden hover:border-[#147cb5] hover:shadow-md transition-all duration-200 flex flex-col justify-between group">
                    <div>
                        <!-- High-impact City Photo -->
                        <div class="relative h-60 sm:h-64 overflow-hidden bg-[#f6f7f4]">
                            <img 
                                src="{{ asset('images/jaipur.webp') }}" 
                                alt="Jaipur Region Chapter" 
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                            >
                            <!-- Member Count Badge -->
                            <div class="absolute top-4 right-4 bg-white/95 backdrop-blur-xs px-3.5 py-1.5 rounded-full border border-[#dce5e8] shadow-xs flex items-center gap-1.5">
                                <span class="w-2 h-2 rounded-full bg-[#147cb5]"></span>
                                <span class="text-xs font-bold text-[#102f43]">4 Members</span>
                            </div>
                        </div>

                        <!-- Card Body -->
                        <div class="p-6 sm:p-7 space-y-3">
                            <h3 class="text-2xl font-bold text-[#102f43] group-hover:text-[#147cb5] transition-colors">
                                Jaipur
                            </h3>
                            <p class="text-sm text-[#526875] leading-relaxed">
                                Rajasthan Chapter connecting innovators in hospitality, handicraft exports, gemstone commerce, and software startups.
                            </p>
                            <div class="pt-2 space-y-1.5 text-xs text-[#526875]">
                                <div class="flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 rounded-full bg-[#147cb5]"></span>
                                    <span>Weekly Wednesday Meetings • 7:30 AM</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 rounded-full bg-[#147cb5]"></span>
                                    <span>Regional Coordinator: A. Sharma</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card Action -->
                    <div class="p-6 sm:p-7 pt-0">
                        <a href="#enquiry" class="btn-theme-light w-full justify-center">
                            <span>Join Jaipur Chapter</span>
                            <span class="text-base leading-none">↗</span>
                        </a>
                    </div>
                </div>

                <!-- 4. Patna (2 Members) -->
                <div class="bg-white rounded-xl border border-[#dce5e8] overflow-hidden hover:border-[#147cb5] hover:shadow-md transition-all duration-200 flex flex-col justify-between group">
                    <div>
                        <!-- High-impact City Photo -->
                        <div class="relative h-60 sm:h-64 overflow-hidden bg-[#f6f7f4]">
                            <img 
                                src="{{ asset('images/patna.jpg') }}" 
                                alt="Patna Region Chapter" 
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                            >
                            <!-- Member Count Badge -->
                            <div class="absolute top-4 right-4 bg-white/95 backdrop-blur-xs px-3.5 py-1.5 rounded-full border border-[#dce5e8] shadow-xs flex items-center gap-1.5">
                                <span class="w-2 h-2 rounded-full bg-[#147cb5]"></span>
                                <span class="text-xs font-bold text-[#102f43]">2 Members</span>
                            </div>
                        </div>

                        <!-- Card Body -->
                        <div class="p-6 sm:p-7 space-y-3">
                            <h3 class="text-2xl font-bold text-[#102f43] group-hover:text-[#147cb5] transition-colors">
                                Patna
                            </h3>
                            <p class="text-sm text-[#526875] leading-relaxed">
                                Bihar Chapter fostering partnerships across infrastructure contracting, civil engineering, education tech, and FMCG trade.
                            </p>
                            <div class="pt-2 space-y-1.5 text-xs text-[#526875]">
                                <div class="flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 rounded-full bg-[#147cb5]"></span>
                                    <span>Weekly Tuesday Meetings • 7:30 AM</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 rounded-full bg-[#147cb5]"></span>
                                    <span>Regional Coordinator: R. Kashyap (FCA)</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card Action -->
                    <div class="p-6 sm:p-7 pt-0">
                        <a href="#enquiry" class="btn-theme-light w-full justify-center">
                            <span>Join Patna Chapter</span>
                            <span class="text-base leading-none">↗</span>
                        </a>
                    </div>
                </div>

                <!-- 5. Pune (0 Members - Launching) -->
                <div class="bg-white rounded-xl border border-[#dce5e8] overflow-hidden hover:border-[#147cb5] hover:shadow-md transition-all duration-200 flex flex-col justify-between group">
                    <div>
                        <!-- High-impact City Photo -->
                        <div class="relative h-60 sm:h-64 overflow-hidden bg-[#f6f7f4]">
                            <img 
                                src="{{ asset('images/pune.jpg') }}" 
                                alt="Pune Region Chapter" 
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                            >
                            <!-- Member Count Badge -->
                            <div class="absolute top-4 right-4 bg-white/95 backdrop-blur-xs px-3.5 py-1.5 rounded-full border border-[#dce5e8] shadow-xs flex items-center gap-1.5">
                                <span class="w-2 h-2 rounded-full bg-[#a8bfcb]"></span>
                                <span class="text-xs font-bold text-[#526875]">0 Members</span>
                            </div>
                        </div>

                        <!-- Card Body -->
                        <div class="p-6 sm:p-7 space-y-3">
                            <h3 class="text-2xl font-bold text-[#102f43] group-hover:text-[#147cb5] transition-colors">
                                Pune
                            </h3>
                            <p class="text-sm text-[#526875] leading-relaxed">
                                Maharashtra Chapter currently onboarding charter founders in automobile components, enterprise SaaS, and manufacturing.
                            </p>
                            <div class="pt-2 space-y-1.5 text-xs text-[#526875]">
                                <div class="flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 rounded-full bg-[#147cb5]"></span>
                                    <span>Charter Formation in Progress</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 rounded-full bg-[#147cb5]"></span>
                                    <span>Be a Founding Member of Pune Chapter</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card Action -->
                    <div class="p-6 sm:p-7 pt-0">
                        <a href="#enquiry" class="btn-theme-primary w-full justify-center">
                            <span>Apply as Charter Founder</span>
                            <span class="text-base leading-none">↗</span>
                        </a>
                    </div>
                </div>

                <!-- 6. Hyderabad (4 Members) -->
                <div class="bg-white rounded-xl border border-[#dce5e8] overflow-hidden hover:border-[#147cb5] hover:shadow-md transition-all duration-200 flex flex-col justify-between group">
                    <div>
                        <!-- High-impact City Photo -->
                        <div class="relative h-60 sm:h-64 overflow-hidden bg-[#f6f7f4]">
                            <img 
                                src="{{ asset('images/hyderabad.jpg') }}" 
                                alt="Hyderabad Region Chapter" 
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                            >
                            <!-- Member Count Badge -->
                            <div class="absolute top-4 right-4 bg-white/95 backdrop-blur-xs px-3.5 py-1.5 rounded-full border border-[#dce5e8] shadow-xs flex items-center gap-1.5">
                                <span class="w-2 h-2 rounded-full bg-[#147cb5]"></span>
                                <span class="text-xs font-bold text-[#102f43]">4 Members</span>
                            </div>
                        </div>

                        <!-- Card Body -->
                        <div class="p-6 sm:p-7 space-y-3">
                            <h3 class="text-2xl font-bold text-[#102f43] group-hover:text-[#147cb5] transition-colors">
                                Hyderabad
                            </h3>
                            <p class="text-sm text-[#526875] leading-relaxed">
                                Telangana & AP Chapter driving synergies in pharmaceuticals, cloud infrastructure, AI startups, and real estate development.
                            </p>
                            <div class="pt-2 space-y-1.5 text-xs text-[#526875]">
                                <div class="flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 rounded-full bg-[#147cb5]"></span>
                                    <span>Weekly Saturday Meetings • 8:00 AM</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 rounded-full bg-[#147cb5]"></span>
                                    <span>Regional Coordinator: K. Reddy</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card Action -->
                    <div class="p-6 sm:p-7 pt-0">
                        <a href="#enquiry" class="btn-theme-light w-full justify-center">
                            <span>Join Hyderabad Chapter</span>
                            <span class="text-base leading-none">↗</span>
                        </a>
                    </div>
                </div>

                <!-- 7. Chandigarh (2 Members) -->
                <div class="bg-white rounded-xl border border-[#dce5e8] overflow-hidden hover:border-[#147cb5] hover:shadow-md transition-all duration-200 flex flex-col justify-between group">
                    <div>
                        <!-- High-impact City Photo -->
                        <div class="relative h-60 sm:h-64 overflow-hidden bg-[#f6f7f4]">
                            <img 
                                src="{{ asset('images/chandigarh.webp') }}" 
                                alt="Chandigarh Region Chapter" 
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                            >
                            <!-- Member Count Badge -->
                            <div class="absolute top-4 right-4 bg-white/95 backdrop-blur-xs px-3.5 py-1.5 rounded-full border border-[#dce5e8] shadow-xs flex items-center gap-1.5">
                                <span class="w-2 h-2 rounded-full bg-[#147cb5]"></span>
                                <span class="text-xs font-bold text-[#102f43]">2 Members</span>
                            </div>
                        </div>

                        <!-- Card Body -->
                        <div class="p-6 sm:p-7 space-y-3">
                            <h3 class="text-2xl font-bold text-[#102f43] group-hover:text-[#147cb5] transition-colors">
                                Chandigarh
                            </h3>
                            <p class="text-sm text-[#526875] leading-relaxed">
                                Punjab & Haryana Chapter focusing on agro-industries, logistics, international student education, and IT services.
                            </p>
                            <div class="pt-2 space-y-1.5 text-xs text-[#526875]">
                                <div class="flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 rounded-full bg-[#147cb5]"></span>
                                    <span>Weekly Monday Meetings • 7:30 AM</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 rounded-full bg-[#147cb5]"></span>
                                    <span>Regional Coordinator: G. S. Gill</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card Action -->
                    <div class="p-6 sm:p-7 pt-0">
                        <a href="#enquiry" class="btn-theme-light w-full justify-center">
                            <span>Join Chandigarh Chapter</span>
                            <span class="text-base leading-none">↗</span>
                        </a>
                    </div>
                </div>

                <!-- 8. Start a Chapter in Your City -->
                <div class="bg-white rounded-xl border-2 border-dashed border-[#b8ddf1] p-8 flex flex-col justify-between hover:border-[#147cb5] hover:shadow-md transition-all duration-200 group bg-radial-[at_top_right] from-[#f0f7fb] to-white">
                    <div class="space-y-4">
                        <div class="w-12 h-12 rounded-lg bg-[#e7f4fb] text-[#147cb5] flex items-center justify-center font-bold text-xl">
                            +
                        </div>
                        <h3 class="text-2xl font-bold text-[#102f43]">
                            Start a Chapter in Your City
                        </h3>
                        <p class="text-sm text-[#526875] leading-relaxed">
                            Don't see your city listed? Lead the Navodaya business chapter in your region with complete charter backing, founder directories, and meeting formats from NCE National Secretariat.
                        </p>
                    </div>

                    <div class="pt-6">
                        <a href="#enquiry" class="btn-theme-primary w-full justify-center">
                            <span>Apply as Chapter Lead</span>
                            <span class="text-base leading-none">↗</span>
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </section>

        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 7. SEARCH VENDORS & BUSINESS DIRECTORY (Alpine.js Clean Filter) -->
    <!-- ========================================================================= -->
    <section id="directory" class="py-20 sm:py-24 bg-white border-b border-[#dce5e8]" x-data="{
        searchQuery: '',
        activeCategory: 'all',
        vendors: [
            {
                name: 'Kashyap & Associates CA',
                founder: 'Rohit Kashyap (FCA)',
                jnv: 'JNV Patna (2007)',
                category: 'ca',
                tag: 'CA & Financial Services',
                city: 'Patna / Delhi',
                services: 'Statutory Audit, GST Compliance, Startup Valuations & Income Tax Appeals.'
            },
            {
                name: 'NavTech Digital Solutions',
                founder: 'Virendra Singh',
                jnv: 'JNV Lucknow (2011)',
                category: 'it',
                tag: 'IT & Software Development',
                city: 'Noida / Lucknow',
                services: 'Custom Enterprise Web Apps, Mobile Development, Laravel, Cloud Architecture.'
            },
            {
                name: 'Vidyalaya Infra & Turnkey',
                founder: 'Er. Manoj Verma',
                jnv: 'JNV Jaipur (2009)',
                category: 'infra',
                tag: 'Architecture & Construction',
                city: 'Jaipur / NCR',
                services: 'Commercial Interiors, Pre-engineered Buildings, Civil Engineering & Design.'
            },
            {
                name: 'Himalayan Express Logistics',
                founder: 'Praveen Bisht',
                jnv: 'JNV Dehradun (2013)',
                category: 'logistics',
                tag: 'Logistics & Supply Chain',
                city: 'Dehradun / Delhi NCR',
                services: 'Pan-India Cargo Freight, Warehouse Storage, Cold Chain Solutions.'
            },
            {
                name: 'AyurVeda Naturals & Pharma',
                founder: 'Dr. Alok Mishra',
                jnv: 'JNV Bhopal (2008)',
                category: 'pharma',
                tag: 'Medical & Pharma',
                city: 'Bhopal / Indore',
                services: 'Herbal Formulations, Bulk Medicine Distribution, Medical Equipment.'
            },
            {
                name: 'PrintCraft Boxes & Packaging',
                founder: 'Sunil Kumar',
                jnv: 'JNV Chandigarh (2012)',
                category: 'printing',
                tag: 'Printing & Packaging',
                city: 'Chandigarh / Ludhiana',
                services: 'Corrugated Packaging, Offset Box Printing, Industrial Labeling.'
            }
        ],
        matches(vendor) {
            const matchesCat = this.activeCategory === 'all' || vendor.category === this.activeCategory;
            const q = this.searchQuery.toLowerCase().trim();
            const matchesText = !q || 
                vendor.name.toLowerCase().includes(q) || 
                vendor.founder.toLowerCase().includes(q) || 
                vendor.jnv.toLowerCase().includes(q) || 
                vendor.city.toLowerCase().includes(q) ||
                vendor.services.toLowerCase().includes(q);
            return matchesCat && matchesText;
        }
    }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="max-w-3xl mb-10">
                <span class="eyebrow">Alumni marketplace</span>
                <h2 class="text-3xl sm:text-4xl font-bold tracking-tight text-[#102f43] leading-tight">
                    Search Vendors & Partners.
                </h2>
                <p class="text-base text-[#526875] mt-2">
                    Find verified Navodayan business owners across industries. High trust, proven capabilities.
                </p>
            </div>

            <!-- Clean Search & Filter Inputs -->
            <div class="space-y-4 mb-8">
                <div class="relative max-w-2xl">
                    <input 
                        type="text" 
                        x-model="searchQuery"
                        placeholder="Search by vendor name, service, JNV district, or city..."
                        class="w-full px-4 py-3 bg-[#f6f7f4] border border-[#dce5e8] rounded-md text-sm text-[#102f43] placeholder:text-[#526875] focus:bg-white focus:border-[#147cb5] outline-none"
                    >
                </div>

                <div class="flex flex-wrap gap-2 text-xs font-bold text-[#102f43]">
                    <button 
                        @click="activeCategory = 'all'" 
                        :class="activeCategory === 'all' ? 'bg-[#082f49] text-white' : 'bg-[#f6f7f4] text-[#102f43] border border-[#dce5e8] hover:bg-slate-200'"
                        class="px-4 py-2 rounded-md transition cursor-pointer"
                    >
                        All Categories
                    </button>
                    <button 
                        @click="activeCategory = 'ca'" 
                        :class="activeCategory === 'ca' ? 'bg-[#082f49] text-white' : 'bg-[#f6f7f4] text-[#102f43] border border-[#dce5e8] hover:bg-slate-200'"
                        class="px-4 py-2 rounded-md transition cursor-pointer"
                    >
                        CA & Finance
                    </button>
                    <button 
                        @click="activeCategory = 'it'" 
                        :class="activeCategory === 'it' ? 'bg-[#082f49] text-white' : 'bg-[#f6f7f4] text-[#102f43] border border-[#dce5e8] hover:bg-slate-200'"
                        class="px-4 py-2 rounded-md transition cursor-pointer"
                    >
                        IT & Software
                    </button>
                    <button 
                        @click="activeCategory = 'infra'" 
                        :class="activeCategory === 'infra' ? 'bg-[#082f49] text-white' : 'bg-[#f6f7f4] text-[#102f43] border border-[#dce5e8] hover:bg-slate-200'"
                        class="px-4 py-2 rounded-md transition cursor-pointer"
                    >
                        Construction
                    </button>
                    <button 
                        @click="activeCategory = 'logistics'" 
                        :class="activeCategory === 'logistics' ? 'bg-[#082f49] text-white' : 'bg-[#f6f7f4] text-[#102f43] border border-[#dce5e8] hover:bg-slate-200'"
                        class="px-4 py-2 rounded-md transition cursor-pointer"
                    >
                        Logistics
                    </button>
                    <button 
                        @click="activeCategory = 'pharma'" 
                        :class="activeCategory === 'pharma' ? 'bg-[#082f49] text-white' : 'bg-[#f6f7f4] text-[#102f43] border border-[#dce5e8] hover:bg-slate-200'"
                        class="px-4 py-2 rounded-md transition cursor-pointer"
                    >
                        Pharma & Health
                    </button>
                </div>
            </div>

            <!-- Vendor List Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <template x-for="vendor in vendors" :key="vendor.name">
                    <div 
                        x-show="matches(vendor)" 
                        x-transition.opacity
                        class="bg-white p-6 rounded-md border border-[#dce5e8] flex flex-col justify-between space-y-4"
                    >
                        <div class="space-y-2">
                            <span class="text-[11px] font-bold text-[#147cb5] uppercase tracking-wider block" x-text="vendor.tag"></span>
                            <h3 class="text-lg font-bold text-[#102f43]" x-text="vendor.name"></h3>
                            <p class="text-xs text-[#526875]" x-text="vendor.founder + ' • ' + vendor.jnv + ' • ' + vendor.city"></p>
                            <p class="text-xs text-[#526875] pt-1 leading-relaxed" x-text="vendor.services"></p>
                        </div>
                        <div class="pt-3 border-t border-[#dce5e8] flex items-center justify-between">
                            <span class="text-xs text-emerald-700 font-bold">✓ Verified Member</span>
                            <a href="#enquiry" class="text-xs font-bold text-[#147cb5] hover:underline">
                                Connect ↗
                            </a>
                        </div>
                    </div>
                </template>
            </div>

        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 8. HOW IT WORKS / BUSINESS REGISTRATION (Process from join.nceconnect.org) -->
    <!-- ========================================================================= -->
    <section id="enquiry" class="py-20 sm:py-24 bg-[#f6f7f4] border-b border-[#dce5e8]" x-data="{
        category: '',
        subCategory: '',
        submitted: false,
        loading: false,
        subCategories: {
            'ca': ['GST & Statutory Audit', 'Startup Valuations / Pitch Deck', 'Company Incorporation & ROC', 'Income Tax Filing & Appeals'],
            'it': ['Custom Web Application (Laravel/Node)', 'Mobile App (iOS/Android)', 'Cloud & DevOps Support', 'E-commerce & Portal Development'],
            'construction': ['Architectural Design & Planning', 'Turnkey Civil Contracting', 'Interior Designing & Execution', 'Structural Audit'],
            'printing': ['Corrugated Packaging & Cartons', 'Commercial Printing & Brochures', 'Product Labels & Badges'],
            'travel': ['Corporate Travel Management', 'Fleet & Logistics Transport', 'Hotel & Conclave Booking'],
            'medical': ['Bulk Pharmaceutical Supply', 'Medical Equipment & Devices', 'Diagnostic Equipment Distribution'],
            'logistics': ['Full Truckload Freight', 'Warehousing & 3PL Services', 'Cold Chain Distribution'],
            'legal': ['Contract Drafting & Review', 'Intellectual Property & Trademarks', 'Litigation & Corporate Advisory'],
            'other': ['General Business Partnership', 'Vendor Onboarding', 'Mentorship Inquiry']
        },
        handleSubmit() {
            this.loading = true;
            setTimeout(() => {
                this.loading = false;
                this.submitted = true;
            }, 800);
        }
    }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
                
                <!-- Left Column: Steps -->
                <div class="lg:col-span-5 space-y-6">
                    <span class="eyebrow">Make the first connection</span>
                    <h2 class="text-3xl sm:text-4xl font-bold tracking-tight text-[#102f43] leading-tight">
                        Your business belongs<br>in the conversation.
                    </h2>
                    <p class="text-base text-[#526875] leading-relaxed">
                        Tell us who you are, what you do and how you would like to connect with NCE.
                    </p>

                    <div class="space-y-6 pt-4 border-t border-[#dce5e8]">
                        <div>
                            <h3 class="text-base font-bold text-[#102f43]">01 / Introduce yourself.</h3>
                            <p class="text-xs text-[#526875] mt-1 leading-relaxed">
                                Share your contact information and your connection to Navodaya.
                            </p>
                        </div>

                        <div>
                            <h3 class="text-base font-bold text-[#102f43]">02 / Tell your business story.</h3>
                            <p class="text-xs text-[#526875] mt-1 leading-relaxed">
                                Add your business, the products or services you offer, and the support you are looking for.
                            </p>
                        </div>

                        <div>
                            <h3 class="text-base font-bold text-[#102f43]">03 / Connect with NCE.</h3>
                            <p class="text-xs text-[#526875] mt-1 leading-relaxed">
                                The team receives your registration for review and follows up about the next steps.
                            </p>
                        </div>
                    </div>

                    <p class="text-xs text-[#526875] italic pt-2">
                        Registration starts a conversation. Membership and business verification follow a separate review process.
                    </p>
                </div>

                <!-- Right Column: Registration Form (Clean White Card) -->
                <div class="lg:col-span-7">
                    <div class="bg-white p-8 sm:p-10 rounded-md border border-[#dce5e8]">
                        
                        <!-- Success View -->
                        <div x-show="submitted" class="text-center py-10 space-y-4">
                            <div class="w-12 h-12 rounded-full bg-[#e7f4fb] text-[#147cb5] flex items-center justify-center mx-auto text-2xl font-bold">
                                ✓
                            </div>
                            <h3 class="text-2xl font-bold text-[#102f43]">Registration Received</h3>
                            <p class="text-sm text-[#526875] max-w-md mx-auto leading-relaxed">
                                Thank you for introducing your business. Our coordination secretariat will review your submission and connect with you shortly.
                            </p>
                            <button 
                                @click="submitted = false; category = ''; subCategory = ''" 
                                class="px-5 py-2.5 bg-[#147cb5] text-white text-xs font-bold rounded-md hover:bg-[#106491] transition"
                            >
                                Submit Another Registration
                            </button>
                        </div>

                        <!-- Active Form View -->
                        <form x-show="!submitted" @submit.prevent="handleSubmit" class="space-y-4">
                            
                            <div class="border-b border-[#dce5e8] pb-3 mb-2">
                                <h3 class="text-lg font-bold text-[#102f43]">Business Registration & Enquiry</h3>
                                <p class="text-xs text-[#526875]">Connect with the Navodaya Council of Entrepreneurs.</p>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-xs font-bold text-[#102f43] mb-1">Your Full Name *</label>
                                    <input 
                                        type="text" 
                                        name="name" 
                                        required 
                                        placeholder="e.g. Ramesh Chandra" 
                                        class="w-full px-3.5 py-2.5 text-xs bg-[#f6f7f4] border border-[#dce5e8] rounded-md outline-none focus:bg-white focus:border-[#147cb5]"
                                    >
                                </div>
                                <div>
                                    <label class="block text-xs font-bold text-[#102f43] mb-1">Email Address *</label>
                                    <input 
                                        type="email" 
                                        name="email" 
                                        required 
                                        placeholder="ramesh@company.com" 
                                        class="w-full px-3.5 py-2.5 text-xs bg-[#f6f7f4] border border-[#dce5e8] rounded-md outline-none focus:bg-white focus:border-[#147cb5]"
                                    >
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-xs font-bold text-[#102f43] mb-1">Mobile / WhatsApp Number *</label>
                                    <input 
                                        type="tel" 
                                        name="mobile" 
                                        required 
                                        placeholder="+91 98765 43210" 
                                        class="w-full px-3.5 py-2.5 text-xs bg-[#f6f7f4] border border-[#dce5e8] rounded-md outline-none focus:bg-white focus:border-[#147cb5]"
                                    >
                                </div>
                                <div>
                                    <label class="block text-xs font-bold text-[#102f43] mb-1">Your JNV School & Passout Year *</label>
                                    <input 
                                        type="text" 
                                        name="jnv" 
                                        required 
                                        placeholder="e.g. JNV Lucknow, 2009" 
                                        class="w-full px-3.5 py-2.5 text-xs bg-[#f6f7f4] border border-[#dce5e8] rounded-md outline-none focus:bg-white focus:border-[#147cb5]"
                                    >
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-xs font-bold text-[#102f43] mb-1">Business Category *</label>
                                    <select 
                                        name="category" 
                                        x-model="category" 
                                        required
                                        class="w-full px-3.5 py-2.5 text-xs bg-[#f6f7f4] border border-[#dce5e8] rounded-md outline-none focus:bg-white focus:border-[#147cb5] text-[#102f43]"
                                    >
                                        <option value="">Select Category...</option>
                                        <option value="ca">CA & Financial Services</option>
                                        <option value="it">IT & Software Development</option>
                                        <option value="construction">Construction & Architecture</option>
                                        <option value="printing">Printing & Packaging</option>
                                        <option value="travel">Travel & Hospitality</option>
                                        <option value="medical">Medical & Pharma</option>
                                        <option value="logistics">Transport & Logistics</option>
                                        <option value="legal">Legal & Compliance</option>
                                        <option value="other">Other Business Services</option>
                                    </select>
                                </div>

                                <div>
                                    <label class="block text-xs font-bold text-[#102f43] mb-1">Specific Service Area</label>
                                    <select 
                                        name="sub_category" 
                                        x-model="subCategory"
                                        class="w-full px-3.5 py-2.5 text-xs bg-[#f6f7f4] border border-[#dce5e8] rounded-md outline-none focus:bg-white focus:border-[#147cb5] text-[#102f43]"
                                    >
                                        <option value="">Select Specific Need...</option>
                                        <template x-if="category && subCategories[category]">
                                            <template x-for="item in subCategories[category]" :key="item">
                                                <option :value="item" x-text="item"></option>
                                            </template>
                                        </template>
                                        <option value="custom">Other / Custom Requirement</option>
                                    </select>
                                </div>
                            </div>

                            <div>
                                <label class="block text-xs font-bold text-[#102f43] mb-1">Tell us about your business or requirement *</label>
                                <textarea 
                                    name="message" 
                                    rows="3" 
                                    required 
                                    placeholder="Briefly describe what your business offers or the service you are looking for..."
                                    class="w-full px-3.5 py-2.5 text-xs bg-[#f6f7f4] border border-[#dce5e8] rounded-md outline-none focus:bg-white focus:border-[#147cb5]"
                                ></textarea>
                            </div>

                            <button 
                                type="submit" 
                                :disabled="loading"
                                class="w-full py-3.5 bg-[#147cb5] hover:bg-[#106491] text-white font-bold text-sm rounded-md transition flex items-center justify-center gap-2 cursor-pointer disabled:opacity-70"
                            >
                                <span x-show="!loading" class="flex items-center gap-2">
                                    <span>Submit Business Registration</span>
                                    <span>↗</span>
                                </span>
                                <span x-show="loading">Submitting...</span>
                            </button>

                            <p class="text-[11px] text-center text-[#526875]">
                                Information is reviewed by authorized NCE administrators for membership review and follow-up.
                            </p>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 9. FAQS (Clean Editorial Accordion from join.nceconnect.org) -->
    <!-- ========================================================================= -->
    <section id="faqs" class="py-20 sm:py-24 bg-white border-b border-[#dce5e8]" x-data="{
        activeFaq: 0,
        faqs: [
            {
                q: 'Who is NCE for?',
                a: 'NCE is a community of entrepreneurs connected through Jawahar Navodaya Vidyalaya. If you run a business, provide a professional service, or are exploring entrepreneurship, tell us your connection to Navodaya so the team can guide you.'
            },
            {
                q: 'Do I need to attend meetings daily at 7:30 AM?',
                a: 'No. You choose any one chapter day and participate only once in a week. The weekly 90-minute agenda is structured to fit into a founder’s active work week while maintaining disciplined engagement.'
            },
            {
                q: 'My English is not fluent. Can I participate in meetings?',
                a: 'Yes, absolutely. Navodaya was established for talented students from all vernacular backgrounds across India. NCE is your safe grooming ground where brothers and sisters encourage you to present and grow.'
            },
            {
                q: 'People already know my business. Why introduce myself repeatedly? (The Colgate Principle)',
                a: 'Consider Colgate: people have known it for decades, yet it advertises continuously. In business, visibility is critical to remain top-of-mind. Introducing your latest prepositions and capabilities ensures you are remembered when referral opportunities arise.'
            },
            {
                q: 'How is NCE different from informal alumni groups?',
                a: 'NCE is not just another alumni chat group. It is a professionally managed, legally registered Section 8 non-profit company (Ministry of Corporate Affairs, Govt. of India) dedicated to business mentorship, structured referrals, and economic growth.'
            },
            {
                q: 'Why is there a nominal ₹1,000 annual fee?',
                a: 'Commercial networking groups charge ₹75,000 to ₹1,20,000 annually. NCE is 100% non-profit. The nominal ₹1,000 fee acts as a commitment filter so only serious entrepreneurs participate, and it supports Zoom infrastructure and regional logistics.'
            },
            {
                q: 'I already run an established enterprise. Why should I join?',
                a: 'Large business owners face the highest operational risk and need deeply trusted vendor partners. The Navodaya bond provides that comfort. Additionally, as an established leader, your guidance and referrals help younger alumni founders.'
            }
        ]
    }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
                
                <!-- Left Title & Contact -->
                <div class="lg:col-span-4 space-y-4">
                    <span class="eyebrow">A little clarity</span>
                    <h2 class="text-3xl sm:text-4xl font-bold tracking-tight text-[#102f43] leading-tight">
                        Before you<br>take the next step.
                    </h2>
                    <p class="text-sm text-[#526875] pt-4">
                        Have another question?<br>
                        <a href="mailto:info@ncoe.org.in" class="text-link mt-1">
                            <span>Talk to the NCE team</span>
                            <span>↗</span>
                        </a>
                    </p>
                </div>

                <!-- Right FAQ List -->
                <div class="lg:col-span-8 divide-y divide-[#dce5e8] border-t border-b border-[#dce5e8]">
                    <template x-for="(faq, index) in faqs" :key="index">
                        <div class="py-5">
                            <button 
                                @click="activeFaq = (activeFaq === index ? -1 : index)"
                                class="w-full text-left flex items-center justify-between gap-4 font-bold text-base text-[#102f43] hover:text-[#147cb5] transition cursor-pointer"
                            >
                                <span x-text="faq.q"></span>
                                <span class="text-xl font-normal text-[#526875]" x-text="activeFaq === index ? '−' : '+'"></span>
                            </button>
                            <div 
                                x-show="activeFaq === index" 
                                x-collapse
                                x-cloak
                                class="pt-3 text-sm text-[#526875] leading-relaxed"
                            >
                                <p x-text="faq.a" class="whitespace-pre-line"></p>
                            </div>
                        </div>
                    </template>
                </div>

            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 10. SOLID CALL TO ACTION BANNER (from join.nceconnect.org) -->
    <!-- ========================================================================= -->
    <section class="bg-[#082f49] text-white py-16 sm:py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row items-center justify-between gap-8">
                <div class="space-y-3 text-center lg:text-left">
                    <span class="text-xs uppercase tracking-[0.16em] text-[#b4d0df] font-bold block">
                        Your next chapter starts with a connection
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-bold tracking-tight text-white leading-tight">
                        Let's build something<br>better, together.
                    </h2>
                    <p class="text-sm text-[#b4d0df] max-w-xl">
                        Introduce your business to the Navodayan entrepreneur community.
                    </p>
                </div>

                <div class="shrink-0">
                    <a 
                        href="#enquiry" 
                        class="inline-flex items-center justify-center gap-3 bg-white text-[#082f49] hover:bg-[#f6f7f4] px-8 py-4 rounded-md font-bold text-sm transition duration-150 shadow-md"
                    >
                        <span>Register your business</span>
                        <span class="text-lg leading-none">↗</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

</x-layouts.app>