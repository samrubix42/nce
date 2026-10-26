<div>

    <!-- ========================================================================= -->
    <!-- 1. STATIC PAGE HERO (Inner-page banner with solid brand color) -->
    <!-- ========================================================================= -->
    <section class="relative bg-[#0b5a85] text-white border-b border-[#083f5d] overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-14 sm:py-20 lg:py-24">
            <nav class="flex items-center gap-2 text-[11px] font-bold uppercase tracking-[0.16em] text-white/70" aria-label="Breadcrumb" data-reveal>
                <a href="{{ route('home') }}" class="hover:text-white transition-colors">Home</a>
                <span class="text-white/40">/</span>
                <span class="text-white">About</span>
            </nav>

            <div class="mt-6 max-w-3xl" data-reveal data-reveal-delay="100">
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold tracking-tight text-white leading-[1.05]">
                    About NCoE
                </h1>
                <p class="mt-4 text-base sm:text-lg text-white/80 leading-relaxed">
                    Shared roots. Growing together. A community built by Navodayans, for Navodayan entrepreneurs.
                </p>
            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 2. INTRODUCTION (Easy-to-scan editorial copy with supporting image) -->
    <!-- ========================================================================= -->
    <section class="py-16 sm:py-24 bg-white border-b border-[#dce5e8]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-center">

                <div class="lg:col-span-7 space-y-6" data-reveal="left">
                    <div>
                        <span class="eyebrow">Who we are</span>
                        <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold tracking-tight text-[#102f43] leading-tight">
                            Welcome to the Navodaya<br>
                            <span class="text-[#147cb5]">Council of Entrepreneurs.</span>
                        </h2>
                    </div>

                    <p class="text-base sm:text-lg text-[#526875] leading-relaxed max-w-2xl">
                        A vibrant community where the spirit of entrepreneurship thrives among the alumni of Navodaya Vidyalaya. At NCoE, we believe in harnessing the collective potential of Navodayans to foster innovation, drive growth, and create impact.
                    </p>

                    <p class="text-sm sm:text-base text-[#526875] leading-relaxed max-w-2xl">
                        Founded on the principles of collaboration and mutual support, NCoE serves as a beacon for Navodayan entrepreneurs across various industries. Our mission is to empower members with resources and opportunities that catalyze business success and personal development.
                    </p>

                    <div class="flex flex-col items-stretch sm:flex-row sm:items-center gap-3 sm:gap-4 pt-2">
                        <a href="{{ route('home') }}#enquiry" class="btn-theme-primary">
                            <span>Join NCoE</span>
                            <span class="text-base leading-none">↗</span>
                        </a>
                        <a href="{{ route('home') }}#benefits" class="btn-theme-light">
                            <span>Membership Benefits</span>
                            <span class="text-base leading-none">→</span>
                        </a>
                    </div>
                </div>

                <div class="lg:col-span-5" data-reveal="right" data-reveal-delay="120">
                    <div class="overflow-hidden rounded-xl border border-[#dce5e8] bg-[#f6f7f4] shadow-xs">
                        <img
                            src="{{ asset('images/about.jpeg') }}"
                            alt="Navodayan entrepreneurs sharing experiences at an NCoE gathering"
                            class="w-full h-72 sm:h-96 lg:h-[480px] object-cover">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 3. STATS BAR (Matches the home page values bar) -->
    <!-- ========================================================================= -->
    <section class="bg-[#082f49] text-white py-8 border-b border-[#062438]" aria-label="NCoE at a glance">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 lg:grid-cols-4 items-center gap-6" data-reveal-group>
                <div class="col-span-2 lg:col-span-1">
                    <strong class="text-xl sm:text-2xl font-bold tracking-tight block">Built on a shared bond.</strong>
                </div>
                <div class="lg:border-l border-white/20 lg:pl-6 text-sm">
                    <div class="text-2xl font-bold tracking-tight">2022</div>
                    <span class="block text-[11px] text-[#b4d0df] tracking-[0.12em] uppercase mt-0.5">Founded in Delhi</span>
                </div>
                <div class="lg:border-l border-white/20 lg:pl-6 text-sm">
                    <div class="text-2xl font-bold tracking-tight" data-count-to="100" data-count-suffix="+">100+</div>
                    <span class="block text-[11px] text-[#b4d0df] tracking-[0.12em] uppercase mt-0.5">Online Meetings</span>
                </div>
                <div class="lg:border-l border-white/20 lg:pl-6 text-sm">
                    <div class="text-2xl font-bold tracking-tight" data-count-to="6">6</div>
                    <span class="block text-[11px] text-[#b4d0df] tracking-[0.12em] uppercase mt-0.5">Offline Gatherings</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 4. MISSION & VISION (Two clean architectural cards) -->
    <!-- ========================================================================= -->
    <section id="mission" class="py-16 sm:py-24 bg-white border-b border-[#dce5e8]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="max-w-3xl mx-auto text-center mb-12 sm:mb-14 space-y-3" data-reveal>
                <span class="eyebrow">What drives us</span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold tracking-tight text-[#102f43] leading-tight">
                    Our Mission &amp; Vision
                </h2>
                <p class="text-base sm:text-lg text-[#526875] leading-relaxed">
                    A dynamic ecosystem for Navodayan entrepreneurs, built for innovation, collaboration, and mutual growth.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-[1px] bg-[#dce5e8] border border-[#dce5e8] rounded-xl overflow-hidden" data-reveal-group>
                <div class="bg-white p-8 sm:p-10 lg:p-12 group transition-colors hover:bg-[#fafcfd]">
                    <div class="w-14 h-14 rounded-xl bg-[#f6f7f4] border border-[#dce5e8] flex items-center justify-center mb-6 group-hover:bg-[#147cb5]/10 group-hover:border-[#147cb5]/40 transition-colors">
                        <i data-lucide="target" class="w-6 h-6 text-[#147cb5]"></i>
                    </div>
                    <span class="text-[11px] font-bold uppercase tracking-[0.18em] text-[#147cb5]">Our Mission</span>
                    <h3 class="mt-3 text-2xl font-bold text-[#102f43] tracking-tight">Nurturing the entrepreneurial spirit.</h3>
                    <p class="mt-4 text-sm sm:text-base text-[#526875] leading-relaxed">
                        To create a dynamic ecosystem that nurtures the entrepreneurial spirit of Navodayans. We aim to provide a platform for innovation, collaboration, and mutual growth, where every member can access the resources they need to succeed.
                    </p>
                </div>

                <div class="bg-white p-8 sm:p-10 lg:p-12 group transition-colors hover:bg-[#fafcfd]">
                    <div class="w-14 h-14 rounded-xl bg-[#f6f7f4] border border-[#dce5e8] flex items-center justify-center mb-6 group-hover:bg-[#147cb5]/10 group-hover:border-[#147cb5]/40 transition-colors">
                        <i data-lucide="eye" class="w-6 h-6 text-[#147cb5]"></i>
                    </div>
                    <span class="text-[11px] font-bold uppercase tracking-[0.18em] text-[#147cb5]">Our Vision</span>
                    <h3 class="mt-3 text-2xl font-bold text-[#102f43] tracking-tight">The leading network for Navodayan entrepreneurs.</h3>
                    <p class="mt-4 text-sm sm:text-base text-[#526875] leading-relaxed">
                        To be recognised for our commitment to excellence, community, and the advancement of business practices. We envision a future where our members lead the way in creating sustainable and impactful businesses.
                    </p>
                </div>
            </div>

        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 5. WHAT YOU GET (Four clean benefit cards) -->
    <!-- ========================================================================= -->
    <section id="what-you-get" class="py-16 sm:py-24 bg-white border-b border-[#dce5e8]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-12 sm:mb-14" data-reveal>
                <div>
                    <span class="eyebrow">What you get</span>
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold tracking-tight text-[#102f43] leading-tight">
                        More than a network.
                    </h2>
                </div>
                <p class="text-base text-[#526875] max-w-lg">
                    Practical support for every stage of the entrepreneurial journey — from legal clarity to personal growth.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6" data-reveal-group>

                <!-- Legal Assistance -->
                <div class="bg-white rounded-xl border border-[#dce5e8] p-6 sm:p-7 flex flex-col justify-between transition-all duration-200 hover:border-[#147cb5] hover:-translate-y-1 hover:shadow-md group">
                    <div>
                        <div class="w-14 h-14 rounded-xl bg-[#f6f7f4] border border-[#dce5e8] flex items-center justify-center mb-5 group-hover:bg-[#147cb5]/10 group-hover:border-[#147cb5]/40 transition-colors">
                            <i data-lucide="scale" class="w-6 h-6 text-[#147cb5]"></i>
                        </div>
                        <h3 class="text-lg font-bold text-[#102f43] mb-2.5 group-hover:text-[#147cb5] transition-colors leading-snug">
                            Legal Assistance
                        </h3>
                        <p class="text-sm text-[#526875] leading-relaxed">
                            Navigate the complexities of business law with confidence.
                        </p>
                    </div>
                </div>

                <!-- Networking -->
                <div class="bg-white rounded-xl border border-[#dce5e8] p-6 sm:p-7 flex flex-col justify-between transition-all duration-200 hover:border-[#147cb5] hover:-translate-y-1 hover:shadow-md group">
                    <div>
                        <div class="w-14 h-14 rounded-xl bg-[#f6f7f4] border border-[#dce5e8] flex items-center justify-center mb-5 group-hover:bg-[#147cb5]/10 group-hover:border-[#147cb5]/40 transition-colors">
                            <i data-lucide="users" class="w-6 h-6 text-[#147cb5]"></i>
                        </div>
                        <h3 class="text-lg font-bold text-[#102f43] mb-2.5 group-hover:text-[#147cb5] transition-colors leading-snug">
                            Networking
                        </h3>
                        <p class="text-sm text-[#526875] leading-relaxed">
                            Connect with like-minded professionals and expand your business horizons.
                        </p>
                    </div>
                </div>

                <!-- Education -->
                <div class="bg-white rounded-xl border border-[#dce5e8] p-6 sm:p-7 flex flex-col justify-between transition-all duration-200 hover:border-[#147cb5] hover:-translate-y-1 hover:shadow-md group">
                    <div>
                        <div class="w-14 h-14 rounded-xl bg-[#f6f7f4] border border-[#dce5e8] flex items-center justify-center mb-5 group-hover:bg-[#147cb5]/10 group-hover:border-[#147cb5]/40 transition-colors">
                            <i data-lucide="graduation-cap" class="w-6 h-6 text-[#147cb5]"></i>
                        </div>
                        <h3 class="text-lg font-bold text-[#102f43] mb-2.5 group-hover:text-[#147cb5] transition-colors leading-snug">
                            Education
                        </h3>
                        <p class="text-sm text-[#526875] leading-relaxed">
                            Stay ahead of the curve with workshops and sessions tailored to the entrepreneurial journey.
                        </p>
                    </div>
                </div>

                <!-- Coaching -->
                <div class="bg-white rounded-xl border border-[#dce5e8] p-6 sm:p-7 flex flex-col justify-between transition-all duration-200 hover:border-[#147cb5] hover:-translate-y-1 hover:shadow-md group">
                    <div>
                        <div class="w-14 h-14 rounded-xl bg-[#f6f7f4] border border-[#dce5e8] flex items-center justify-center mb-5 group-hover:bg-[#147cb5]/10 group-hover:border-[#147cb5]/40 transition-colors">
                            <i data-lucide="compass" class="w-6 h-6 text-[#147cb5]"></i>
                        </div>
                        <h3 class="text-lg font-bold text-[#102f43] mb-2.5 group-hover:text-[#147cb5] transition-colors leading-snug">
                            Coaching
                        </h3>
                        <p class="text-sm text-[#526875] leading-relaxed">
                            Gain insights from experts in business, life, and health to elevate your personal and professional life.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 6. MEMBERSHIP COMMITMENT (Requirements & Responsibilities) -->
    <!-- ========================================================================= -->
    <section id="commitment" class="py-16 sm:py-24 bg-[#f6f7f4] border-b border-[#dce5e8]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-start">

                <!-- Left: Header & Fee -->
                <div class="lg:col-span-5 space-y-6" data-reveal="left">
                    <div>
                        <span class="eyebrow">Membership</span>
                        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold tracking-tight text-[#102f43] leading-tight">
                            A commitment to<br>growth and excellence.
                        </h2>
                        <p class="mt-4 text-base text-[#526875] leading-relaxed">
                            Joining NCoE is more than a membership. It is a pledge to participate actively, support fellow members, and uphold the standards of our community.
                        </p>
                    </div>

                    <div class="bg-white rounded-xl border border-[#dce5e8] p-6 sm:p-8">
                        <div class="flex items-baseline gap-2">
                            <span class="text-4xl font-bold tracking-tight text-[#102f43]">₹1,000</span>
                            <span class="text-sm font-medium text-[#526875]">nominal annual fee</span>
                        </div>
                        <p class="mt-3 text-sm text-[#526875] leading-relaxed">
                            A commitment filter that keeps the network serious, and supports our meeting infrastructure and regional logistics.
                        </p>
                        <a href="{{ route('home') }}#enquiry" class="btn-theme-primary mt-6 w-full">
                            <span>Join NCoE</span>
                            <span class="text-base leading-none">↗</span>
                        </a>
                    </div>
                </div>

                <!-- Right: Requirements & Responsibilities -->
                <div class="lg:col-span-7 space-y-6" data-reveal-group>

                    <div class="bg-white rounded-xl border border-[#dce5e8] p-6 sm:p-8">
                        <div class="flex items-start gap-4">
                            <div class="shrink-0 w-11 h-11 rounded-xl bg-[#e7f4fb] text-[#147cb5] flex items-center justify-center">
                                <i data-lucide="clipboard-check" class="w-5 h-5"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-[#102f43] tracking-tight">Requirements for Membership</h3>
                                <p class="mt-2 text-sm sm:text-base text-[#526875] leading-relaxed">
                                    With a nominal fee of ₹1,000, members pledge to be active participants in our weekly online meetings, contributing to the vibrancy of our network.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl border border-[#dce5e8] p-6 sm:p-8">
                        <div class="flex items-start gap-4">
                            <div class="shrink-0 w-11 h-11 rounded-xl bg-[#e7f4fb] text-[#147cb5] flex items-center justify-center">
                                <i data-lucide="shield-check" class="w-5 h-5"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-[#102f43] tracking-tight">Responsibilities of Members</h3>
                                <p class="mt-2 text-sm sm:text-base text-[#526875] leading-relaxed">
                                    As stewards of the NCoE ethos, members are expected to generate opportunities for co-members and uphold the highest standards of integrity and delivery.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-[#082f49] rounded-xl p-6 sm:p-8 text-white">
                        <p class="text-sm sm:text-base leading-relaxed text-[#dceaf1]">
                            Together, we are not just building businesses; we are nurturing a legacy of Navodayan entrepreneurship that stands for excellence, innovation, and brotherhood.
                        </p>
                        <p class="mt-3 text-sm font-bold text-white">
                            Join us in shaping a future where every Navodayan entrepreneur is a beacon of success.
                        </p>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 7. OUR STORY (Editorial timeline with image) -->
    <!-- ========================================================================= -->
    <section id="story" class="py-16 sm:py-24 bg-white border-b border-[#dce5e8]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-center">

                <!-- Left: Image -->
                <div class="lg:col-span-5 order-2 lg:order-1" data-reveal="left">
                    <div class="overflow-hidden rounded-xl border border-[#dce5e8] bg-[#f6f7f4] shadow-xs">
                        <img
                            src="{{ asset('images/banner-1.webp') }}"
                            alt="NCoE delegates at a national gathering"
                            class="w-full h-80 sm:h-96 lg:h-[460px] object-cover">
                    </div>
                </div>

                <!-- Right: Story -->
                <div class="lg:col-span-7 order-1 lg:order-2 space-y-6" data-reveal="right">
                    <div>
                        <span class="eyebrow">Our story</span>
                        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold tracking-tight text-[#102f43] leading-tight">
                            From a Delhi idea to<br>
                            <span class="text-[#147cb5]">a national community.</span>
                        </h2>
                    </div>

                    <p class="text-base text-[#526875] leading-relaxed">
                        NCoE was founded in 2022 in the bustling city of Delhi, with a vision to unite Navodayan entrepreneurs from all walks of life. Since our inception, we've successfully conducted over 100 online meetings and 6 impactful offline gatherings in cities like Delhi, Hyderabad, Bengaluru, Mumbai, Ahmedabad, and Patna.
                    </p>

                    <p class="text-base text-[#526875] leading-relaxed">
                        These events have been a cornerstone of our community, providing invaluable opportunities for networking, learning, and collaboration. Our next offline meet is eagerly anticipated to be held in Delhi on 11th May 2024 — a day of insightful discussions, strategic partnerships, and the shared joy of Navodayan camaraderie.
                    </p>

                    <div class="pt-2 border-t border-[#dce5e8]">
                        <div class="grid grid-cols-2 sm:grid-cols-3 gap-6 pt-6">
                            <div>
                                <div class="text-2xl font-bold tracking-tight text-[#102f43]">2022</div>
                                <span class="block text-[11px] text-[#7a8d99] tracking-[0.12em] uppercase mt-0.5">Founded</span>
                            </div>
                            <div>
                                <div class="text-2xl font-bold tracking-tight text-[#102f43]">6 Cities</div>
                                <span class="block text-[11px] text-[#7a8d99] tracking-[0.12em] uppercase mt-0.5">Offline Meets</span>
                            </div>
                            <div>
                                <div class="text-2xl font-bold tracking-tight text-[#102f43]">100+</div>
                                <span class="block text-[11px] text-[#7a8d99] tracking-[0.12em] uppercase mt-0.5">Online Sessions</span>
                            </div>
                        </div>
                    </div>

                    <div class="pt-2">
                        <a href="{{ route('home') }}#events" class="text-link">
                            <span>View upcoming events</span>
                            <span>→</span>
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 8. CALL TO ACTION (Light editorial panel, about-specific wording) -->
    <!-- ========================================================================= -->
    <section class="py-16 sm:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative overflow-hidden rounded-xl border border-[#dce5e8] bg-[#f6f7f4] p-8 sm:p-10 lg:p-14" data-reveal="scale">
                <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-8 lg:gap-14">
                    <div class="max-w-2xl space-y-4 text-center lg:text-left">
                        <span class="eyebrow" style="margin-bottom: 0;">Rooted in Navodaya. Growing in business.</span>
                        <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold tracking-tight text-[#102f43] leading-tight">
                            Your story belongs<br>
                            <span class="text-[#147cb5]">in this community.</span>
                        </h2>
                        <p class="text-sm sm:text-base text-[#526875] leading-relaxed">
                            Meet founders and professionals who share your roots — and want to see your business grow.
                        </p>
                    </div>

                    <div class="w-full lg:w-auto shrink-0">
                        <a
                            href="{{ route('home') }}#enquiry"
                            class="btn-theme-primary w-full lg:w-auto">
                            <span>Introduce your business</span>
                            <span class="text-base leading-none">↗</span>
                        </a>
                        <p class="mt-3 text-center lg:text-right text-[11px] text-[#7a8d99]">
                            No obligation. Just a conversation.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
