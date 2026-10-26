<div>

    <!-- ========================================================================= -->
    <!-- 1. STATIC PAGE HERO (Inner-page banner with solid brand color) -->
    <!-- ========================================================================= -->
    <section class="relative bg-[#0b5a85] text-white border-b border-[#083f5d] overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-14 sm:py-20 lg:py-24">
            <nav class="flex items-center gap-2 text-[11px] font-bold uppercase tracking-[0.16em] text-white/70" aria-label="Breadcrumb" data-reveal>
                <a href="{{ route('home') }}" class="hover:text-white transition-colors">Home</a>
                <span class="text-white/40">/</span>
                <span class="text-white">Contact</span>
            </nav>

            <div class="mt-6 max-w-3xl" data-reveal data-reveal-delay="100">
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold tracking-tight text-white leading-[1.05]">
                    Contact NCoE
                </h1>
                <p class="mt-4 text-base sm:text-lg text-white/80 leading-relaxed">
                    Let's start a conversation. Whether you're exploring membership, a partnership, or a business opportunity, the NCoE team is here to help.
                </p>
            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 2. CONTACT CHANNELS (Editorial intro with direct contact cards) -->
    <!-- ========================================================================= -->
    <section class="py-16 sm:py-24 bg-white border-b border-[#dce5e8]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-center">

                <div class="lg:col-span-7 space-y-6" data-reveal="left">
                    <div>
                        <span class="eyebrow">Get in touch</span>
                        <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold tracking-tight text-[#102f43] leading-tight">
                            We'd love to<br>
                            <span class="text-[#147cb5]">hear from you.</span>
                        </h2>
                    </div>

                    <p class="text-base sm:text-lg text-[#526875] leading-relaxed max-w-2xl">
                        NCoE is built on conversation. Tell us about your business, your chapter, or the kind of connection you're looking for, and we'll point you to the right people.
                    </p>

                    <p class="text-sm sm:text-base text-[#526875] leading-relaxed max-w-2xl">
                        For membership questions, partnership ideas, or media requests, reach the secretariat directly. We usually respond within two working days.
                    </p>

                    <div class="flex flex-col items-stretch sm:flex-row sm:items-center gap-3 sm:gap-4 pt-2">
                        <a href="#contact-form" class="btn-theme-primary">
                            <span>Send a message</span>
                            <span class="text-base leading-none">&rarr;</span>
                        </a>
                        <a href="mailto:info@ncoe.org.in" class="btn-theme-light">
                            <span>Email the team</span>
                            <span class="text-base leading-none">&rarr;</span>
                        </a>
                    </div>
                </div>

                <div class="lg:col-span-5" data-reveal="right" data-reveal-delay="120">
                    <div class="space-y-4">

                        <a href="mailto:info@ncoe.org.in" class="group block bg-white rounded-xl border border-[#dce5e8] p-6 transition-all duration-200 hover:border-[#147cb5] hover:-translate-y-1 hover:shadow-md">
                            <div class="flex items-start gap-4">
                                <div class="shrink-0 w-11 h-11 rounded-xl bg-[#e7f4fb] text-[#147cb5] flex items-center justify-center">
                                    <i data-lucide="mail" class="w-5 h-5"></i>
                                </div>
                                <div>
                                    <span class="text-[11px] font-bold uppercase tracking-[0.18em] text-[#7a8d99]">Email</span>
                                    <p class="mt-1 text-lg font-bold text-[#102f43] group-hover:text-[#147cb5] transition-colors">info@ncoe.org.in</p>
                                    <p class="mt-1 text-sm text-[#526875] leading-relaxed">Membership, partnerships and general enquiries.</p>
                                </div>
                            </div>
                        </a>

                        <a href="tel:+919411841092" class="group block bg-white rounded-xl border border-[#dce5e8] p-6 transition-all duration-200 hover:border-[#147cb5] hover:-translate-y-1 hover:shadow-md">
                            <div class="flex items-start gap-4">
                                <div class="shrink-0 w-11 h-11 rounded-xl bg-[#e7f4fb] text-[#147cb5] flex items-center justify-center">
                                    <i data-lucide="phone" class="w-5 h-5"></i>
                                </div>
                                <div>
                                    <span class="text-[11px] font-bold uppercase tracking-[0.18em] text-[#7a8d99]">Phone</span>
                                    <p class="mt-1 text-lg font-bold text-[#102f43] group-hover:text-[#147cb5] transition-colors">+91 94118 41092</p>
                                    <p class="mt-1 text-sm text-[#526875] leading-relaxed">Speak with the NCoE coordination secretariat.</p>
                                </div>
                            </div>
                        </a>

                        <div class="bg-[#082f49] rounded-xl p-6 text-white">
                            <div class="flex items-start gap-4">
                                <div class="shrink-0 w-11 h-11 rounded-xl bg-white/10 text-[#8ed4f5] flex items-center justify-center">
                                    <i data-lucide="map-pin" class="w-5 h-5"></i>
                                </div>
                                <div>
                                    <span class="text-[11px] font-bold uppercase tracking-[0.18em] text-[#b4d0df]">Secretariat</span>
                                    <p class="mt-1 text-lg font-bold text-white">South Extension I, New Delhi</p>
                                    <p class="mt-1 text-sm text-[#b4d0df] leading-relaxed">Meetings by appointment. Weekly online sessions and regional gatherings.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 3. CONTACT FORM (Clear enquiry form with a dark editorial side panel) -->
    <!-- ========================================================================= -->
    <section
        id="contact-form"
        class="py-16 sm:py-24 bg-[#f6f7f4] border-b border-[#dce5e8]"
        x-data="{
            loading: false,
            submitted: false,
            handleSubmit() {
                this.loading = true;
                setTimeout(() => {
                    this.loading = false;
                    this.submitted = true;
                }, 800);
            }
        }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="max-w-6xl mx-auto bg-white rounded-xl border border-[#dce5e8] overflow-hidden" data-reveal="scale">
                <div class="grid grid-cols-1 lg:grid-cols-12">

                    <!-- Left: Context & Direct Details -->
                    <div class="lg:col-span-5 bg-[#082f49] text-white p-6 sm:p-10 lg:p-12 space-y-8">
                        <div class="space-y-4">
                            <span class="text-[11px] font-bold uppercase tracking-[0.16em] text-[#b4d0df]">Write to us</span>
                            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold tracking-tight text-white leading-tight">
                                Tell us what<br>
                                you're building.
                            </h2>
                            <p class="text-sm sm:text-base text-[#b4d0df] leading-relaxed">
                                Share a few details and the secretariat will route your message to the right desk.
                            </p>
                        </div>

                        <div class="space-y-4">
                            <div class="flex items-start gap-4">
                                <span class="shrink-0 text-[11px] font-bold tracking-[0.16em] text-[#8ed4f5]">01</span>
                                <div>
                                    <p class="text-sm font-bold text-white">Tell us about you</p>
                                    <p class="mt-1 text-sm text-[#b4d0df] leading-relaxed">Membership, a partnership or a specific business need.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <span class="shrink-0 text-[11px] font-bold tracking-[0.16em] text-[#8ed4f5]">02</span>
                                <div>
                                    <p class="text-sm font-bold text-white">We route your enquiry</p>
                                    <p class="mt-1 text-sm text-[#b4d0df] leading-relaxed">Your message reaches the relevant chapter or desk.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <span class="shrink-0 text-[11px] font-bold tracking-[0.16em] text-[#8ed4f5]">03</span>
                                <div>
                                    <p class="text-sm font-bold text-white">We respond</p>
                                    <p class="mt-1 text-sm text-[#b4d0df] leading-relaxed">Expect a reply within two working days.</p>
                                </div>
                            </div>
                        </div>

                        <div class="pt-6 border-t border-white/10 space-y-3 text-sm">
                            <a href="mailto:info@ncoe.org.in" class="flex items-center gap-2.5 text-[#dceaf1] hover:text-white transition-colors">
                                <i data-lucide="mail" class="w-4 h-4"></i>
                                <span>info@ncoe.org.in</span>
                            </a>
                            <a href="tel:+919411841092" class="flex items-center gap-2.5 text-[#dceaf1] hover:text-white transition-colors">
                                <i data-lucide="phone" class="w-4 h-4"></i>
                                <span>+91 94118 41092</span>
                            </a>
                            <p class="flex items-start gap-2.5 text-[#b4d0df]">
                                <i data-lucide="map-pin" class="w-4 h-4 mt-0.5 shrink-0"></i>
                                <span>South Extension I, New Delhi</span>
                            </p>
                        </div>
                    </div>

                    <!-- Right: Contact Form -->
                    <div class="lg:col-span-7 p-6 sm:p-10 lg:p-12">

                        <!-- Success View -->
                        <div x-show="submitted" class="text-center py-10 space-y-4">
                            <div class="w-12 h-12 rounded-full bg-[#e7f4fb] text-[#147cb5] flex items-center justify-center mx-auto">
                                <i data-lucide="check" class="w-6 h-6"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-[#102f43]">Message received</h3>
                            <p class="text-sm text-[#526875] max-w-md mx-auto leading-relaxed">
                                Thank you for reaching out. The NCoE secretariat will review your message and respond within two working days.
                            </p>
                            <button
                                @click="submitted = false"
                                class="px-5 py-2.5 bg-[#147cb5] text-white text-xs font-bold rounded-md hover:bg-[#106491] transition">
                                Send another message
                            </button>
                        </div>

                        <!-- Active Form View -->
                        <form x-show="!submitted" @submit.prevent="handleSubmit" class="space-y-5">

                            <div class="border-b border-[#dce5e8] pb-3 mb-2">
                                <h3 class="text-lg font-bold text-[#102f43]">Send a message</h3>
                                <p class="text-xs text-[#526875]">Fields marked * are required.</p>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-6 gap-y-5">
                                <div>
                                    <label for="contact-name" class="block text-[11px] font-semibold uppercase tracking-[0.12em] text-[#526875] mb-1.5">Your Full Name *</label>
                                    <input
                                        id="contact-name"
                                        type="text"
                                        name="name"
                                        required
                                        autocomplete="name"
                                        class="w-full px-0 py-2.5 text-sm bg-transparent border-x-0 border-t-0 border-b border-[#dce5e8] rounded-none outline-none focus:border-[#147cb5] transition-colors">
                                </div>
                                <div>
                                    <label for="contact-email" class="block text-[11px] font-semibold uppercase tracking-[0.12em] text-[#526875] mb-1.5">Email Address *</label>
                                    <input
                                        id="contact-email"
                                        type="email"
                                        name="email"
                                        required
                                        autocomplete="email"
                                        class="w-full px-0 py-2.5 text-sm bg-transparent border-x-0 border-t-0 border-b border-[#dce5e8] rounded-none outline-none focus:border-[#147cb5] transition-colors">
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-6 gap-y-5">
                                <div>
                                    <label for="contact-phone" class="block text-[11px] font-semibold uppercase tracking-[0.12em] text-[#526875] mb-1.5">Phone / WhatsApp</label>
                                    <input
                                        id="contact-phone"
                                        type="tel"
                                        name="phone"
                                        autocomplete="tel"
                                        class="w-full px-0 py-2.5 text-sm bg-transparent border-x-0 border-t-0 border-b border-[#dce5e8] rounded-none outline-none focus:border-[#147cb5] transition-colors">
                                </div>
                                <div>
                                    <label for="contact-organisation" class="block text-[11px] font-semibold uppercase tracking-[0.12em] text-[#526875] mb-1.5">Organisation</label>
                                    <input
                                        id="contact-organisation"
                                        type="text"
                                        name="organisation"
                                        autocomplete="organization"
                                        class="w-full px-0 py-2.5 text-sm bg-transparent border-x-0 border-t-0 border-b border-[#dce5e8] rounded-none outline-none focus:border-[#147cb5] transition-colors">
                                </div>
                            </div>

                            <div>
                                <label for="contact-topic" class="block text-[11px] font-semibold uppercase tracking-[0.12em] text-[#526875] mb-1.5">I'm reaching out about *</label>
                                <select
                                    id="contact-topic"
                                    name="topic"
                                    required
                                    class="w-full px-0 py-2.5 text-sm bg-transparent border-x-0 border-t-0 border-b border-[#dce5e8] rounded-none outline-none focus:border-[#147cb5] transition-colors text-[#102f43]">
                                    <option value="">Select a topic...</option>
                                    <option value="membership">Membership &amp; benefits</option>
                                    <option value="chapter">Regional chapter</option>
                                    <option value="partnership">Business partnership</option>
                                    <option value="media">Media &amp; press</option>
                                    <option value="other">Something else</option>
                                </select>
                            </div>

                            <div>
                                <label for="contact-message" class="block text-[11px] font-semibold uppercase tracking-[0.12em] text-[#526875] mb-1.5">Your Message *</label>
                                <textarea
                                    id="contact-message"
                                    name="message"
                                    rows="4"
                                    required
                                    class="w-full px-0 py-2.5 text-sm bg-transparent border-x-0 border-t-0 border-b border-[#dce5e8] rounded-none outline-none focus:border-[#147cb5] transition-colors"></textarea>
                            </div>

                            <button
                                type="submit"
                                :disabled="loading"
                                class="w-full py-3.5 bg-[#147cb5] hover:bg-[#106491] text-white font-bold text-sm rounded-md transition flex items-center justify-center gap-2 cursor-pointer disabled:opacity-70">
                                <span x-show="!loading" class="flex items-center gap-2">
                                    <span>Send message</span>
                                    <span class="text-base leading-none">&rarr;</span>
                                </span>
                                <span x-show="loading">Sending...</span>
                            </button>

                            <p class="text-[11px] text-center text-[#526875]">
                                Your details are used only to respond to this enquiry.
                            </p>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 4. QUICK ROUTES (Three clear paths into the community) -->
    <!-- ========================================================================= -->
    <section class="py-16 sm:py-24 bg-white border-b border-[#dce5e8]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="max-w-3xl mx-auto text-center mb-12 sm:mb-14 space-y-3" data-reveal>
                <span class="eyebrow">Quick routes</span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold tracking-tight text-[#102f43] leading-tight">
                    The right desk, first time.
                </h2>
                <p class="text-base sm:text-lg text-[#526875] leading-relaxed">
                    Choose the path that fits your question, or write to us directly and we'll connect the dots.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6" data-reveal-group>

                <a href="{{ route('home') }}#enquiry" class="group bg-white rounded-xl border border-[#dce5e8] p-6 sm:p-8 flex flex-col justify-between transition-all duration-200 hover:border-[#147cb5] hover:-translate-y-1 hover:shadow-md">
                    <div>
                        <div class="w-14 h-14 rounded-xl bg-[#f6f7f4] border border-[#dce5e8] flex items-center justify-center mb-5 group-hover:bg-[#147cb5]/10 group-hover:border-[#147cb5]/40 transition-colors">
                            <i data-lucide="users" class="w-6 h-6 text-[#147cb5]"></i>
                        </div>
                        <h3 class="text-lg font-bold text-[#102f43] mb-2.5 group-hover:text-[#147cb5] transition-colors">Membership</h3>
                        <p class="text-sm text-[#526875] leading-relaxed">Join NCoE, review member benefits, or ask about the annual commitment.</p>
                    </div>
                    <span class="mt-5 text-[11px] font-bold uppercase tracking-[0.16em] text-[#147cb5]">Explore membership &rarr;</span>
                </a>

                <a href="{{ route('home') }}#chapters" class="group bg-white rounded-xl border border-[#dce5e8] p-6 sm:p-8 flex flex-col justify-between transition-all duration-200 hover:border-[#147cb5] hover:-translate-y-1 hover:shadow-md">
                    <div>
                        <div class="w-14 h-14 rounded-xl bg-[#f6f7f4] border border-[#dce5e8] flex items-center justify-center mb-5 group-hover:bg-[#147cb5]/10 group-hover:border-[#147cb5]/40 transition-colors">
                            <i data-lucide="map-pin" class="w-6 h-6 text-[#147cb5]"></i>
                        </div>
                        <h3 class="text-lg font-bold text-[#102f43] mb-2.5 group-hover:text-[#147cb5] transition-colors">Regional chapters</h3>
                        <p class="text-sm text-[#526875] leading-relaxed">Connect with a chapter near you, or bring the NCoE network to your city.</p>
                    </div>
                    <span class="mt-5 text-[11px] font-bold uppercase tracking-[0.16em] text-[#147cb5]">Find a chapter &rarr;</span>
                </a>

                <a href="mailto:info@ncoe.org.in?subject=Partnership%20enquiry" class="group bg-white rounded-xl border border-[#dce5e8] p-6 sm:p-8 flex flex-col justify-between transition-all duration-200 hover:border-[#147cb5] hover:-translate-y-1 hover:shadow-md">
                    <div>
                        <div class="w-14 h-14 rounded-xl bg-[#f6f7f4] border border-[#dce5e8] flex items-center justify-center mb-5 group-hover:bg-[#147cb5]/10 group-hover:border-[#147cb5]/40 transition-colors">
                            <i data-lucide="handshake" class="w-6 h-6 text-[#147cb5]"></i>
                        </div>
                        <h3 class="text-lg font-bold text-[#102f43] mb-2.5 group-hover:text-[#147cb5] transition-colors">Partnerships &amp; media</h3>
                        <p class="text-sm text-[#526875] leading-relaxed">Collaborate with the council, invite us to speak, or request a media conversation.</p>
                    </div>
                    <span class="mt-5 text-[11px] font-bold uppercase tracking-[0.16em] text-[#147cb5]">Start a conversation &rarr;</span>
                </a>

            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 5. CALL TO ACTION (Light editorial panel, contact-specific wording) -->
    <!-- ========================================================================= -->
    <section class="py-16 sm:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative overflow-hidden rounded-xl border border-[#dce5e8] bg-[#f6f7f4] p-8 sm:p-10 lg:p-14" data-reveal="scale">
                <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-8 lg:gap-14">
                    <div class="max-w-2xl space-y-4 text-center lg:text-left">
                        <span class="eyebrow" style="margin-bottom: 0;">Prefer a direct conversation?</span>
                        <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold tracking-tight text-[#102f43] leading-tight">
                            Call the secretariat.<br>
                            <span class="text-[#147cb5]">We'll take it from there.</span>
                        </h2>
                        <p class="text-sm sm:text-base text-[#526875] leading-relaxed">
                            For urgent membership or chapter questions, reach us by phone. For everything else, email works just as well.
                        </p>
                    </div>

                    <div class="flex flex-col sm:flex-row lg:flex-col gap-3 w-full sm:w-auto">
                        <a href="tel:+919411841092" class="btn-theme-primary">
                            <span>Call +91 94118 41092</span>
                            <span class="text-base leading-none">&rarr;</span>
                        </a>
                        <a href="mailto:info@ncoe.org.in" class="btn-theme-light">
                            <span>Email the team</span>
                            <span class="text-base leading-none">&rarr;</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
